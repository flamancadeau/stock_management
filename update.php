<?php
require_once("connection.php"); // Include the connection file to connect to the database
?>

<?php  
if(isset($_GET['UP'])){ // Check if the update parameter is set
    $updatees = $_GET['UP']; // Get the update parameter
    $select = "SELECT * FROM stockm1 WHERE Stock_Id='$updatees'"; // Select query to retrieve data for updating
    $query = mysqli_query($conn, $select); // Execute the query
    if(mysqli_num_rows($query) > 0){ // Check if there are rows returned
        while($retrive = mysqli_fetch_array($query)){ // Loop through the results
?>
<!DOCTYPE html>
<html>
<head>
<title>UPDATE||RECORD</title>
</head>
<body>
<form method="POST">
    Stock:<input type="text" name="Stock_id" readonly value=<?php echo $retrive['Stock_Id']; ?>><br><br><br>
    product:<input type="text" name="product" value=<?php echo $retrive['product_N1']; ?>><br><br><br>
    quantity:<input type="text" name="quantity" value=<?php echo $retrive['quantity_N1']; ?>><br><br><br>
    price:<input type="text" name="price" value=<?php echo $retrive['price_N1']; ?>><br><br><br>
    Date:<input type="text" name="date" value=<?php echo $retrive['Date_N1']; ?>><br><br><br>
    <button type="submit" name="update">update</button>
</form>
<?php
        }
    }
}
?>
</body>
</html>

<?php
if(isset($_POST['update'])){ // Check if the update form is submitted
    $Stock_Id = $_POST['Stock']; // Get the updated stock ID
    $product = $_POST['product']; // Get the updated product name
    $quantity = $_POST['quantity']; // Get the updated quantity
    $price = $_POST['price']; // Get the updated price
    $date = $_POST['date']; // Get the updated date
    $update = "UPDATE `stockm1` SET `product_N1`='$product', `quantity_N1`='$quantity', `price_N1`='$price', `Date_N1`='$date' WHERE `Stock_Id`='$updatees'";
    $query = mysqli_query($conn, $update); // Execute the update query
    if($query){
        header("location:table_view.php"); // Redirect to the table view page after successful update
    } else {
        echo "Failed"; // Display message if the update fails
    }
}
?>
</html>

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