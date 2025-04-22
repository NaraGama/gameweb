<?php include 'db.php'; ?>
<!-- Hero Section Begin -->
<section class="hero">
    <div class="container">
        <div class="hero__slider owl-carousel">

        <?php
        $query = "SELECT * FROM hero_slider";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '
                <div class="hero__items set-bg" data-setbg="'.$row['image_url'].'">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <div class="label">'.$row['label'].'</div>
                                <h2>'.$row['title'].'</h2>
                                <p>'.$row['description'].'</p>
                                <a href="#"><span>Watch Now</span> <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>';
            }
        } else {
            echo "<p>No data available.</p>";
        }
        ?>

        </div>
    </div>
</section>
<!-- Hero Section End -->
