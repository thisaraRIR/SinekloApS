<?php include '../database/connection.php'; ?>

<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("location: index.php");
}

?>

<?php
    if(isset($_GET['p_upd'])){
        $id = $_GET['p_upd'];
        $update = true;
        $record = mysqli_query($db, "SELECT * FROM products WHERE id=$id");
        if($record->num_rows > 0){
            while($n = $record->fetch_assoc()){
                $id   = $n['id'];
                $productName = $n['productName'];
                $productType = $n['productType'];
                $productDetails = $n['productDetails'];
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title>ADMIN PANEL - EDIT POSTS</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
        integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
    </script>
    <link rel="icon" href="../favamecro.ico">

    <style>
    form {
        width: 45%;
        margin: 50px auto;
        text-align: left;
        padding: 20px;
        border: 1px solid #bbbbbb;
        border-radius: 5px;
    }

    .msg {
        margin: 30px auto;
        padding: 10px;
        border-radius: 5px;
        color: #3c763d;
        background: #dff0d8;
        border: 1px solid #3c763d;
        width: 50%;
        text-align: center;
    }
    </style>


    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../admin//styles//sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php include './pageWrapper.php' ?>

        <!-- End of Sidebar -->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                                <img class="img-profile rounded-circle" src="../images/adminNew.jpg">
                            </a>
                        </li>
                        <!--logout btn-->
                        <li class="nav-item dropdown no-arrow" style="padding-top:15px; ">
                            <a href="logout.php?logout" class="btn btn-outline-secondary" role="button"
                                aria-pressed="true"><i
                                    class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>Logout</a>
                        </li>
                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid" style="width: 1300px;"><br />
                    <!-- Page Heading -->
                    <center>
                        <h1 class="h3 mb-1 text-gray-800">UPDATE PRODUCT</h1>
                        <hr />
                    </center>

                    <form method="POST" action="php_code.php" enctype="multipart/form-data" style="width: 70%">
                        <div class="row">

                            <div class="col-15">
                                <label>Product Name*</label>
                                <input type="text" name="productName" class="form-control"
                                    value="<?php echo $productName ?>" required><br>
                            </div>

                            <div class="col-15">
                                <label for="img">Product Image</label>
                                <input type="file" class="form-control" id="img" name="img"
                                    onchange="getImagePreview(event)">
                                <br /><br />
                                <center>
                                    <div id="preview"></div><br />
                                </center>
                            </div>
                            <div class="col-15">
                                <label>Post Category Types*</label>
                                <select class="form-control" id="type" name="productType" style="height: 40px;"
                                    required>
                                    <option value="Artisan Tea" <?php
                                                                    if ($productType == 'Artisan Tea') {
                                                                        echo "selected";
                                                                    }
                                                                    ?>>Artisan Tea</option>

                                    <option value="High-quality spices" <?php
                                                                        if ($productType == 'High-quality spices') {
                                                                            echo "selected";
                                                                        }
                                                                        ?>>High-quality spices</option>

                                    <option value="Coir brushes" <?php
                                                                                if ($productType == 'Coir brushes') {
                                                                                    echo "selected";
                                                                                }
                                                                                ?>>Coir brushes</option>

                                    <option value="Gem and Jewellery" <?php
                                                                    if ($productType == 'Gem and Jewellery') {
                                                                        echo "selected";
                                                                    }
                                                                    ?>>Gem and Jewellery</option>
                                </select>
                            </div><br><br><br><br>

                            <div class="col-15">
                                <label>Description*</label>
                                <textarea class="form-control" name="description"
                                    id="description"><?php echo $productDetails ?></textarea>
                            </div>
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                        </div>
                        <br />
                        <div class="col-md-20">
                            <button type="submit" name="updateProduct" class="btn btn-primary">Update</button>
                        </div>

                    </form>

                    <!-- Content Row -->
                    <div class="row">

                    </div>
                    <!-- End of Main Content -->

                </div>
                <!-- End of Content Wrapper -->

            </div>
            <!-- End of Page Wrapper -->
        </div>
    </div>
    <!-- Scroll to Top Button -->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="http://cdn.ckeditor.com/4.6.2/standard-all/ckeditor.js"></script>
    <script>
    CKEDITOR.replace('description', {
        height: 300,
        // filebrowserUploadUrl: "upload.php"
    })
    </script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
    <script type="text/javascript">
    function getImagePreview(event) {
        var image = URL.createObjectURL(event.target.files[0]);
        var imagediv = document.getElementById('preview');
        var newimg = document.createElement('img');
        imagediv.innerHTML = '';
        newimg.src = image;
        newimg.width = "300";
        imagediv.appendChild(newimg);
    }
    </script>

</body>

</html>