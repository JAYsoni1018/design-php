<?php
if(!isset($_SESSION))
{
    session_start();
}
include('./dbconnect.php');
if(!isset($_SESSION['login'])){
        if(isset($_POST['email']) && isset($_POST['pass']))
        {
        
            $email=$_POST['email'];
            $pass=$_POST['pass'];

            $sql="select * from admin where email='$email' and password='$pass'";
            $result=$conn->query($sql);
            // echo $result;
            $row=$result->num_rows;
            if($row>0){
                $_SESSION['login']=true;
                $_SESSION['email']=$email;
                echo "<script>location.href='./index.php';</script>";
                // echo "<script>location.href='./Admin/index.php';</script>";
                
            }
            else{
                
                echo "<script>location.href='./login.php';</script>";
            }
        }
}

?>
