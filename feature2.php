
<?php
        include('./dbconnect.php');

        $sql = "select * from section4";
        $res = $conn->query($sql);
        if ($res->num_rows > 0) {
            while ($row = $res->fetch_assoc()) {
                echo '
                <div class="box">

        
                <div class="image">
                    <img src="'.str_replace('..','.',$row['right_img']).'" alt="Img">
                </div>
                <div class="content">
                    <h3>'.$row['heading'].'</h3>
                    <p class="box-para">'.$row['description'].'</p>
                    <p class="box-subpara">'.$row['sub_heading'].'</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>
                    ';
            }
        }
        ?>

