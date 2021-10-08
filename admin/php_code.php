<?php include('../database/connection.php'); 

//  Initialize variables

$img = [];
$id = "";
$productName = "";
$productType = "";
$productDetails = "";

if (isset($_POST['bannerImg'])) {
    $img = $_FILES['img']['name'];

    if (file_exists("../upload/banner/" . $_FILES["img"]["name"])) {
        $store              = $_FILES["img"]["name"];
        $_SESSION['status'] = "Image already exists. '.$store.'";
    } else {
        $temp        = explode(".", $_FILES["img"]["name"]);
        $newfilename = round(microtime(true)) . '.' . end($temp);
        move_uploaded_file($_FILES["img"]["tmp_name"], "../upload/banner/" . $newfilename);
        $qry                 = "INSERT INTO banner (img) VALUES ('$newfilename')";
        $run                 = mysqli_query($db, $qry);
        if($run){
            header('location: dashboard.php?success');
        }else{
            header('location: dashboard.php?fail');
        }
    }
}

//delete banner images
if (isset($_GET['b_del'])) {
    $id = $_GET['b_del'];
    mysqli_query($db, "DELETE FROM banner WHERE id=$id");
    header('location: dashboard.php?del');
}

//Add product according to the category
if(isset($_POST['productDetails'])) {
    $img = $_FILES["img"]["name"];
    $productName = $_POST['name'];
    $productType = $_POST['productType'];
    $productDetails = $_POST['details'];

    if(file_exists("../upload/products/" . $_FILES["img"]["name"])){
        $store = $_FILES["img"]["name"];
        $_SESSION = "Image already exists. '.$store.'";
    }else{
        $temp = explode(".", $_FILES["img"]["name"]);
        $newfilename = round(microtime(true)) . '.' .end($temp);
        move_uploaded_file($_FILES["img"]["tmp_name"], "../upload/products/" . $newfilename);
        $qry = "INSERT INTO products (productName, productType, productDetails, productImage) VALUES ('$productName', '$productType', '$productDetails', '$newfilename')";
        $run = mysqli_query($db, $qry);
        if($run){
            header('location: productsView.php?success');
        }else{
            header('location: productsView.php?fail');
        }
    }
}

//delete product Info
if (isset($_GET['p_del'])) {
    $id = $_GET['p_del'];
    mysqli_query($db, "DELETE FROM products WHERE id=$id");
    header('location: productsView.php?del');
}

//update product

if(isset($_POST['updateProduct'])){
    $id = $_POST['id'];
    $productName = $_POST['productName'];
    $img = $_FILES["img"]["name"];
    $productType = $_POST["productType"];
    $productDetails = $_POST["description"];

    if(file_exists("../upload/products/" . $_FILES["img"]["name"])){
        $store = $_FILES["img"]["name"];
        $qry = "UPDATE products SET productName = '$productName', productType = '$productType', productDetails = '$productDetails' WHERE id = '$id' ";
        $run = mysqli_query($db, $qry);
        if($run){
            header('location: productsView.php?success');
        }else{
            header('location: productsView.php?fail');
        }

    }else{
        echo "update Called!";
        $temp = explode(".", $_FILES["img"]["name"]);
        $newfilename = round(microtime(true)) . '.' .end($temp);
        move_uploaded_file($_FILES["img"]["tmp_name"], "../upload/products/" . $newfilename);
        $qry = "UPDATE products SET productName = '$productName', productType = '$productType', productDetails = '$productDetails', productImage = '$newfilename' WHERE id = '$id' ";
        $run = mysqli_query($db, $qry);
        if($run){
            header('location: productsView.php?success');
        }else{
            header('location: productsView.php?fail');
        }
    }
}


?>