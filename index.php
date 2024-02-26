<?php
require_once("connection.php"); // Include the connection file to connect to the database
?>

<!DOCTYPE html>
<head>
<title>page!</title>
</head>
<body>
<form method="post">
<center><b>
<!-- Form for adding a new stock item -->
Product<input type="text" name="product" required placeholder="product name:"><br><br><br>
Quantity<input type="text" name="quantity" placeholder="quantity value:"><br><br><br>
Price<input type="text" name="price"  required placeholder="price_N1:"><br><br><br>
Date<input type="text" name="date"  required value="<?php echo date("m-d-y"); ?>" placeholder="Date_N1:"><br><br><br>
<button type="submit"  required name="save">Record</button> <!-- Submit button to save the data -->
</b>
</center>
</form>

<?php
if(isset($_POST['save'])){ // Check if the form is submitted
    $product = $_POST['product'];
    $date = $_POST['date'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $query = "INSERT INTO stockm1(Stock_Id, product_N1, Date_N1, quantity_N1, price_N1) VALUES (null, '$product', '$date', '$quantity', '$price')";
    $des = mysqli_query($conn, $query); // Execute the insert query
    if($des == 1){
        echo "data inserted"; // Display message if data is inserted successfully
        header("location:table_view.php"); // Redirect to the table view page
    }
    else{
        echo "data not inserted"; // Display message if data is not inserted
    }
}
?>
</body>

<style type="text/css">
/* CSS Stylesheet for Form Styling */
body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    margin: 0;
    padding: 0;
}
form {
    width: 50%;
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}
input[type="text"], button {
    width: 100%;
    padding: 10px;
    margin: 5px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
}
button {
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}
button:hover {
    background-color: #0056b3;
}
center {
    text-align: center;
}
input[readonly] {
    background-color: #f0f0f0;
}
input:focus {
    border-color: #007bff;
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
}
</style>
</html>