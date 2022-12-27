<?php  
include_once 'connection/config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
     <base href="/quotation-request-Form/">
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Price Quote Request</title>
  <link rel="stylesheet" href="css/style.css" />
</head>

<body>
  <h1>All Price Quote Request</h1>


  <table class="tableOne">
    <thead>
      <tr>
        <th>S/N</th>
        <th>Company</th>
        <th>Quantty</th>
        <th>Reference</th>
        <th>Required Date</th>
        <th>Date Requested</th>
      </tr>
    </thead>
    <tbody>
    <?php 
    $stmt = $conn->prepare("SELECT company, request_date, required_date, ref_no FROM quotes");
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($company, $request_date, $required_date, $ref_no);
    if($stmt->num_rows > 0 ) {     
  $sn = 0;
  $total = 0;
while($stmt->fetch()){
  $sn++;

  $stmt1 = $conn->prepare("SELECT quantity FROM quote_items WHERE ref_no = ?");
  $stmt1->bind_param("s", $ref_no);
  $stmt1->execute();
  $stmt1->store_result();
  $stmt1->bind_result($quantity);
  if($stmt1->num_rows > 0 ) {
 while($stmt1->fetch()){
   $total += $quantity;
 }}

    echo '<tr>
      <td>'.$sn.'</td>
      <td><a href="quotations/'.$ref_no.'">'.$company.'</a></td>
      <td>'.$total.'</td>
      <td><a href="quotations/'.$ref_no.'">'.$ref_no.'</a></td>
      <td>'.$required_date.'</td>
      <td>'.$request_date.'</td>
    </tr>';

    } }else{
      echo '<tr>
      <td colspan="6">No quotation found!</td>
      </tr>';
    }
    ?>
</tbody>
  </table>
  <br />
  

 

  <script src="js/jquery-3.6.3.min.js"></script>
<script src="js/script.js"></script>

</body>

</html>