<?php
require_once("functions.php");

if (isset($_POST['submit'])) {
    $name=$_POST['name'];
    $description=$_POST['description'];
    $price=$_POST['price'];
}
$errors=[];
// product name validation
if (empty($name)) {
    $errors[] = "product name is required";
} elseif (! is_string($name)) {
    $errors[] = "product name must be string";
} elseif (strlen($name)<5 or strlen($name)>255) {
    $errors[] = "number of characters of product name must be min:5 and max:255";
} else {
    echo "product name : $name <br>";
}
// product description validation
if (empty($description)) {
    /*add this if statement because when user go to handle-add-product.php page directly in url,
     the browser give a warning about description so we echo it is no description
      when go directly to this page */
    echo null;
} elseif (! is_string($description)) {
    $errors[] = "description must be string";
} else {
    /*only when description is not empty print it*/
    echo "product description : $description <br>";
}
// product price validation
if (empty($price)) {
    $errors[] = "product price is required";
} elseif (! is_numeric($price)) {
    $errors[] = "product price must be number";
} elseif ($price < 0) {
    $errors[] = "product price must be greater than 0";
}  else {
    echo "product price : $price <br>";
    /*if price is not empty and number and greater than 0 then send this price to the function which get
    the price discount and print this discount */
    $priceAfterDiscount=getPriceWithDiscount($price);
    echo "price after discount : $priceAfterDiscount <br>";
} 




echo "<hr>";
if (! empty($errors)) {
    /*when there is no errors in array it still print an array but empty and this is wrong so ((only when)) $errors array
    is not empty print the errors */
    print_r($errors);
    echo "<hr>";
}

?>
<a href="form.php">back to form</a>