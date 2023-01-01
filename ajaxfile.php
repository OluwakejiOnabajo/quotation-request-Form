<?php

include_once 'functions.php';

$request = 0;

if(isset($_POST['request'])){
    $request =preg_replace('#[^0-9]#','',$_POST['request']);
}

//Add Quote
if ($request == 1) {
  
  $requestor = test_input($_POST['requestor']);
  $company = test_input($_POST['company']);
  $location = test_input($_POST['location']); 
  $request_date = test_input($_POST['request_date']);
  $required_date = test_input($_POST['required_date']);
  $item_status = test_input($_POST['item_status']);
   $model_availability = test_input($_POST['model_availability']);
   $ref_no = rand(100000000, 999999999);
   $description = explode(",",$_POST['description']);
   $code = explode(",",$_POST['code']);
   $quantity = explode(",",$_POST['quantity']);  
   
   if($requestor !== '' && $company !== '' && $location !== '' && $request_date !== '' && $required_date !== '' && $item_status !== '' && $model_availability !== ''
   && $ref_no !== '' && $description !== '' && $code !== '' && $quantity !== ''){
   
        $stmt = $conn->prepare("INSERT INTO quotes (requestor, company, location, request_date, required_date, item_status, model_availability, ref_no) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssss", $requestor, $company, $location, $request_date, $required_date, $item_status, $model_availability, $ref_no);
        if($stmt->execute()){       

          foreach ($description as $key => $desc) {
            $stmt = $conn->prepare("INSERT INTO quote_items (ref_no, description, code, quantity) VALUES (?, ?, ?, ?)");
          $stmt->bind_param("ssss", $ref_no, $description[$key], $code[$key], $quantity[$key]);
          $stmt->execute(); 
          }
          
          echo json_encode( array("status" => 1, "message" => "Success", "ref_no" => $ref_no ) );
          exit;
        }else{
         echo json_encode( array("status" => 0, "message" => "Ooops! SOmething went wrong" ) );
         exit;
        }
  }

}

//Login
if ($request == 2) {

  $email = test_input($_POST["email"]);
  $password = test_input($_POST["password"]);


 if ($email != "" && $password != "") {

   $stmt = $conn->prepare("SELECT id, password FROM users WHERE email = ?");
   $stmt->bind_param("s", $email);
   $stmt->execute();
   $stmt->store_result();
   $stmt->bind_result($user_id, $hash);
  if($stmt->num_rows > 0 ) {
   $stmt->fetch();

     if (password_verify($password, $hash)) {       
        $_SESSION["user_id"] = $user_id;

        echo json_encode( array("status" => 1, "message" => 'Logged in successfully') );
        exit();
      }else{
   echo json_encode( array("status" => 0, "message" => 'Invalid login credentials!') );
   exit;
 } 
 }else{
  echo json_encode( array("status" => 0, "message" => 'User not found!') );
  exit;
} 
}else{
   echo json_encode( array("status" => 0, "message" => 'Please fill all fields.') );
   exit;
 }

}


//Signup
if ($request == 3) {

  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $password = test_input($_POST["password"]);


 if ($name != "" && $email != "" && $password != "") {

  $password = password_hash($password, PASSWORD_DEFAULT);

  $stmt = $conn->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
  $stmt->bind_param("sss", $name, $email, $password);
  if($stmt->execute()){
   echo json_encode( array("status" => 1, "message" => 'Signed up successfully!') );
   exit;
 } 
 }else{
   echo json_encode( array("status" => 0, "message" => 'Please fill all fields.') );
   exit;
 }
}



?>