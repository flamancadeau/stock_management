<?php
require_once("connection.php"); // Include the connection file to connect to the database
?>
<table border="1"> <!-- Start of table structure -->
<tr> <!-- Table row for column headers -->
<th>stock_Id</th>	
<th>product name</th>
<th>quantity value</th>
<th>price</th>
<th>Date</th>
<th colspan="2">action</th>
</tr>
<?php
$select="SELECT*FROM stockm1"; // Select query to fetch data from the database
$result=mysqli_query($conn,$select); // Execute the query
if(mysqli_num_rows($result)>0){ // Check if there are rows returned
    while($show=mysqli_fetch_assoc($result)){ // Loop through the results
?>
<tr> <!-- Table row for each stock item -->
<td><?php echo $show['Stock_Id']; ?> </td> <!-- Display stock Id -->
<td><?php echo $show['product_N1']; ?></td> <!-- Display product name -->
<td><?php echo $show['quantity_N1']." "."  kg"; ?> </td> <!-- Display quantity with unit -->
<td><?php echo $show['price_N1']." "."frw"; ?> </td> <!-- Display price with currency -->
<td><?php echo $show['Date_N1']; ?> </td> <!-- Display date -->
<td><a href="table_view.php?DEL=<?php echo $show['Stock_Id'] ?>">delete </a> </td> <!-- Delete action with parameter -->
<td><a href="update.php?UP=<?php echo $show['Stock_Id'] ?>">update </a> </td> <!-- Update action with parameter -->
</tr>
<?php
    }
}
?>
</table> <!-- End of table structure -->

<?php
if(isset($_GET['DEL'])){ // Check if delete action is triggered
$delete=$_GET['DEL']; // Get the delete parameter
$delete="DELETE from stockm1 WHERE  Stock_Id='$delete'"; // Delete query
$check=mysqli_query($conn,$delete); // Execute the delete query
if($check==1){
	echo"data deleted"; // Display message if data is deleted successfully
	header("location:table_view.php"); // Redirect to the table view page
}
else{
	echo "data not deleted"; // Display message if data is not deleted
}
}
?>

<style>
  /* CSS Stylesheet for Form Styling */
form {
    width: 50%;
    margin: 0 auto;
}
input[type="text"] {
    width: 100%;
    padding: 10px;
    margin: 5px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
}
button {
    padding: 10px 20px;
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
table {
    width: 80%;
    margin: 20px auto;
    border-collapse: collapse;
}
th, td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
}
th {
    background-color: #f2f2f2;
}
tr:nth-child(even) {
    background-color: #f2f  
</style>