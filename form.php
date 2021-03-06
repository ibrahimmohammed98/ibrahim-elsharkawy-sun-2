<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>asignment2</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>

    <div class="container text-center">
        <h1 class="text-center">Add Product</h1>
        <form method="POST" action="handle-add-product.php" class="w-50 m-auto">
            <input type="text" placeholder="name" name="name" class="form-control">
            <textarea placeholder="description" cols="74" rows="3" name="description" class="my-4"></textarea>
            <input type="number" placeholder="price" name="price" class="form-control mb-4">
            <input type="submit" value="submit" name="submit" class="btn btn-info">
        </form>
    </div>

</body>

</html>