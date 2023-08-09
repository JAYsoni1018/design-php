<section class="services" id="services">


    <div class="heading-2">

        <h1>Best Seller and best selling category on allof time. </h1>
    </div>


    <div class="box-container">

        <?php
        include('./dbconnect.php');

        $sql = "select * from section2  limit 4";
        $res = $conn->query($sql);
        if ($res->num_rows > 0) {
            while ($row = $res->fetch_assoc()) {
                echo '
                    <div class="box">
            <img src="' . str_replace('..', '.', $row['header_img']) . '"  alt="">
            <h3>' . $row['heading'] . '</h3>
            <p>' . $row['description'] . '</p>
        </div>
                    ';
            }
        }
        ?>






    </div>

</section>