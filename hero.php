<section class="home" id="home">
<?php
include('./dbconnect.php');

            $sql="select * from hero ";
            $res=$conn->query($sql);
            if($res->num_rows>0)
            {
                while($row=$res->fetch_assoc())
                {
                    echo '
                    <div class="image">
                    <img src="'.str_replace('..','.',$row['hero_img']).'" alt="Img">
                </div>
                
                <div class="content">
                    <h3> '.$row['heading'].' </h3>
                    <p>'.$row['sub_heading'].'</p>
                    <a href="#" class="btn">get started</a>
                </div>
                    ';
                }
            }
            ?>


</section>