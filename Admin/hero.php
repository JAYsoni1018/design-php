
<?php
include('./component/header.php');

include('../dbconnect.php');

if(isset($_REQUEST['Hero'])){

    if(($_REQUEST['heading']=="") || ($_REQUEST['sub-heading']=="")){
       
        $msg= '<div class="alert alert-warning col-sm-12 text-center" id="mg">
        Fill All Details.</div>';
    }
    else{
        $heading=$_REQUEST['heading'];
        $sheading=$_REQUEST['sub-heading'];
      
        $img=$_FILES['hero_img']['name'];
        $hero_img_temp=$_FILES['hero_img']['tmp_name'];

        $hero_img_folder='../images/HeroIMG/'.$img;
        move_uploaded_file($hero_img_temp,$hero_img_folder);
        // update student set name='$name',email='$mail',pass='$pass',occ='$occ' where id='$sid'
        $sql="update hero  set heading='$heading' , sub_heading='$sheading',hero_img='$hero_img_folder'  where id='1'";
        if($conn->query($sql)==true)
        {
        $msg= '<div class="alert alert-success col-sm-12 text-center" id="mg">
        Data Entered successfully.</div>';

        }
        else{
        $msg= '<div class="alert alert-danger col-sm-12 text-center" id="mg">
        Something went wrong.</div>';

        }

    }
   
}
?>

<section>

<div class="col-sm-6 mt-5 mx-5 jumbotron">
    
      
      <?php if(isset($msg)){echo $msg;} ?>

    <h3 class="text-center">Add New Hero</h3>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="heading">Heading </label>
            <textarea name="heading" id="heading" cols="87" rows="4"></textarea>

        </div>
        <div class="form-group">
            <label for="sub-heading">Sub heading</label>
            <textarea name="sub-heading" id="sub-heading" cols="87" rows="4"></textarea>

        </div>
        <div class="form-group">
                    <label for="hero_img">Hero Image</label>
                    <input type="file" class="form-control" id="hero_img" name="hero_img">
                </div>
        
        <div class="form-group-row text-center mt-3">
            <button type="submit" class="btn btn-primary" id="Hero" name="Hero" >Submit</button>
            
            
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