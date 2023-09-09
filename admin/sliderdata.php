<?php
session_start();
include('../include/dbController.php');
$db_handle = new DBController();

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $area = $_POST['area'];
    $price = $_POST['price'];
    $section_name = $_POST['section_name'];
    $id = $_POST['id'];

    $image = '';



    if (!empty($_FILES['image']['name'])) {
        $RandomAccountNumber = mt_rand(1, 99999);
        $file_name = $RandomAccountNumber . "_" . $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_tmp = $_FILES['image']['tmp_name'];

        $file_type = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        if ($file_type != "jpg" && $file_type != "png" && $file_type != "jpeg") {
            $attach_files = '';
            echo "<script>
                alert('Image format not work.');
                window.location.href='sliderdata.php';
                </script>";

        } else {
            move_uploaded_file($file_tmp, "../images/slider/" . $file_name);
            $image = "images/slider/" . $file_name;

            $i = 1;
        }
    }else{
        $image=$_POST['image_url'];
    }


    $query = "UPDATE `slider` SET `name`='$name',`description`='$description',`area`='$area',`price`='$price',`section_name`='$section_name',`image`='$image' WHERE id='$id'";

    $insert = $db_handle->insertQuery($query);

    if ($insert) {
        echo "<script>
                alert('Slider Updated.');
                window.location.href='sliderdata.php';
                </script>";
    }


}

if (isset($_GET['delete_slider_id'])) {

    $id = $_GET['delete_slider_id'];
    $query = "DELETE FROM `slider` WHERE id='$id'";

    $insert = $db_handle->insertQuery($query);

    if ($insert) {
        echo "<script>
                alert('Slider Deleted.');
                window.location.href='sliderdata.php';
                </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Slider Data - Ideal Property</title>

    <?php require_once 'include/css.php'; ?>

</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <?php require_once 'include/sidebar.php'; ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <?php require_once 'include/topbar.php'; ?>

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <?php
                if (isset($_GET['slider_id'])) {
                    $query = "SELECT * FROM slider where id={$_GET['slider_id']}";
                    $data = $db_handle->runQuery($query);
                    ?>
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Edit Slider</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Edit Slider</h6>
                        </div>
                        <div class="card-body">
                            <form action="" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id" value="<?php echo $data[0]["id"]; ?>" required>
                                <input type="hidden" name="image_url" value="<?php echo $data[0]["image"]; ?>" required>
                                <div class="mb-3">
                                    <label>Title</label>
                                    <input type="text" class="form-control" name="name" value="<?php echo $data[0]["name"]; ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label>Description</label>
                                    <textarea class="form-control" name="description" required rows="4"><?php echo $data[0]["description"]; ?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label>Area</label>
                                    <input type="text" class="form-control" name="area" value="<?php echo $data[0]["area"]; ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label>Price</label>
                                    <input type="text" class="form-control" name="price" value="<?php echo $data[0]["price"]; ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label>Image <a href="../<?php echo $data[0]["image"]; ?>" target="_blank">View Image</a></label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="image" id="image">
                                        <label class="custom-file-label" for="image">Choose file</label>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label>Section</label>
                                    <select class="form-control" name="section_name" required>
                                        <option value="<?php echo $data[0]["section_name"]; ?>"><?php echo $data[0]["section_name"]; ?></option>
                                        <option value="最新新聞/資訊">最新新聞/資訊</option>
                                        <option value="獨家村屋推介">獨家村屋推介</option>
                                        <option value="精選村屋推介">精選村屋推介</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <button type="submit" name="update" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <?php
                } else {
                    ?>

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Slider Data</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Slider Data</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Area</th>
                                        <th>Price</th>
                                        <th>Image</th>
                                        <th>Section</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>SL</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Area</th>
                                        <th>Price</th>
                                        <th>Image</th>
                                        <th>Section</th>
                                        <th>Action</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php
                                    $query = "SELECT * FROM slider order by id desc";

                                    $data = $db_handle->runQuery($query);
                                    $row_count = $db_handle->numRows($query);

                                    for ($i = 0; $i < $row_count; $i++) {
                                        ?>
                                        <tr>
                                            <td><?php echo $i + 1; ?></td>
                                            <td><?php echo $data[$i]["name"]; ?></td>
                                            <td><?php echo $data[$i]["description"]; ?></td>
                                            <td><?php echo $data[$i]["area"]; ?></td>
                                            <td><?php echo $data[$i]["price"]; ?></td>
                                            <td><a href="../<?php echo $data[$i]["image"]; ?>" target="_blank">image</a>
                                            </td>
                                            <td><?php echo $data[$i]["section_name"]; ?></td>
                                            <td>
                                                <a href="sliderdata.php?slider_id=<?php echo $data[$i]["id"]; ?>"
                                                   class="btn btn-info">Edit</a>
                                                <a href="sliderdata.php?delete_slider_id=<?php echo $data[$i]["id"]; ?>"
                                                   class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <?php require_once 'include/footer.php'; ?>

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="logout.php">Logout</a>
            </div>
        </div>
    </div>
</div>

<?php require_once 'include/js.php'; ?>
<script>
    // Call the dataTables jQuery plugin
    $(document).ready(function () {
        $('#timeTable').DataTable();
    });
</script>
</body>

</html>
