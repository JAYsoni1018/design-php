<?php
include('./component/header.php');

include('../dbconnect.php');

if (isset($_REQUEST['submit'])) {

    if (($_REQUEST['heading'] == "") || ($_REQUEST['desc'] == "")|| ($_REQUEST['sub-heading'] == "")) {

        $msg = '<div class="alert alert-warning col-sm-12 text-center" id="mg">
        Fill All Details.</div>';
    } else {
        $heading = $_REQUEST['heading'];
        $desc = $_REQUEST['desc'];
        $sheading = $_REQUEST['sub-heading'];

        $img = $_FILES['left-img']['name'];
        $left_img_temp = $_FILES['left-img']['tmp_name'];

        $left_img_folder = '../images/Section3/'.$img;
        move_uploaded_file($left_img_temp, $left_img_folder);
        $sql="update section3  set heading='$heading' , description='$desc',sub_heading='$sheading',left_img='$left_img_folder'  where id='1'";

        if ($conn->query($sql) == true) {
            $msg = '<div class="alert alert-success col-sm-12 text-center" id="mg">
        Data Entered successfully.</div>';
        } else {
            $msg = '<div class="alert alert-danger col-sm-12 text-center" id="mg">
        Something went wrong.</div>';
        }
    }
}
?>

<section>

    <div class="col-sm-6 mt-5 mx-5 jumbotron">


        <?php if (isset($msg)) {
            echo $msg;
        } ?>

        <h3 class="text-center">Add New Section 3</h3>
        <form action="" method="POST" enctype="multipart/form-data">

        
            <div class="form-group">
                <label for="heading">Heading </label>
                <textarea name="heading" id="heading" cols="87" rows="4"></textarea>

            </div>
            <div class="form-group">
                <label for="desc">Description</label>
                <textarea name="desc" id="desc" cols="87" rows="4"></textarea>

            </div>
            <div class="form-group">
                <label for="sub-heading">Sub Heading</label>
                <textarea name="sub-heading" id="sub-heading" cols="87" rows="4"></textarea>

            </div>
            <div class="form-group">
                <label for="left-img">Left Image</label>
                <input type="file" class="form-control" id="left-img" name="left-img">
            </div>

            <div class="form-group-row text-center mt-3">
                <button type="submit" class="btn btn-primary" id="submit" name="submit">Submit</button>


            </div>
        </form>
    </div>
</section>

<script src=" js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script src="js/owl.carousel.min.js"></script>
</body>

</html>