<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Price Quote Request</title>
  <!-- <link rel="stylesheet" href="css/style.css" /> -->
</head>

<body>
  <h1>Price Quote Request</h1>

  <form id="quote-form">
  Requestor: <input type="text" id="requestor" placeholder="Enter your name" required><br>
Comapany: <input type="text" id="company" placeholder="Enter the company's name" required>   
Location: <input type="text" id="location" placeholder="Enter your location" required><br>
Requestor Date: <input type="date" id="request_date" placeholder="Select date" required>   
Required date: <input type="date" id="required_date" placeholder="Select date" required><br>
Availability status: <input type="radio" id="item_status" name="item_status" value="yes" required> Yes | <input type="radio" id="item_status" name="item_status" value="no" required> No <br>
Replacement model availability: <input type="radio" id="model_availability" name="model_availability" value="yes" required> Yes | <input type="radio" id="model_availability" name="model_availability" value="no" required> No <br>
 <button type="submit" id="add-quote">Proceed</button> <br/>
  </form>
  <br/>
  
<div id="item-box" style="display: none;">
  <form id="item-form">
    <input type="text" id="description" placeholder="Enter item description" required>
    <input type="text" id="code" placeholder="Enter item code number" required>
    <input type="number" id="quantity" placeholder="Enter quantity" required>
    <button type="submit" id="add-item">Add item</button>
  </form>
  <br/>

  <table class="tableTwo" id="quoteTable">
    <thead>
      <tr>
        <th>S/N</th>
        <th class="itemDes">ITEM DESCRIPTION</th>
        <th>ITEM CODE</th>
        <th>QUANTITY</th>
        <th></th>
      </tr>
    </thead>
    <tbody id="tableBody">
    </tbody>
    <tfoot>
      <tr>
        <td colspan="5"><button type="button" id="delete-row" >Delete
            Row</button></td>
        <tr/>
    </tfoot>
  </table>
  
  <table class="tableThree">
    <tr class="quoteEnd">
      <th>Subtotal</th>

      <td></td>
    </tr>

    <tr class="quoteEnd">
      <th>Tax Rate</th>

      <td></td>
    </tr>

    <tr class="quoteEnd">
      <th>Sale Tax</th>

      <td></td>
    </tr>

    <tr class="quoteEnd">
      <th>Other</th>

      <td></td>
    </tr>

    <tr class="quoteEnd">
      <th>Total</th>

      <td></td>
    </tr>
  </table>
<br/>

<button id="submit-quote" type="button" disabled>Submit quotation</button>

</div>




  <script src="js/jquery-3.6.3.min.js"></script>
<script src="js/script.js"></script>

</body>

</html>