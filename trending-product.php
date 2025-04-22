<?php include 'db.php'; ?>
<!-- Trending Section Begin -->
<div class="trending__product">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-8">
                <div class="section-title">
                    <h4>Trending Now</h4>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="btn__all">
                    <a href="trending-product-all.php" class="primary-btn">View All <span class="arrow_right"></span></a>
                </div>
            </div>
        </div>

        <div class="row">
        <?php
        $query = "SELECT * FROM trending LIMIT 6";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="'.$row['image_url'].'">
                            <div class="ep">Episode '.$row['episode'].'</div>
                            <div class="view"><i class="fa fa-eye"></i> '.$row['views'].'</div>
                        </div>
                        <div class="product__item__text">
                            <ul>
                                <li>'.$row['status'].'</li>
                                <li>'.$row['category'].'</li>
                            </ul>
                            <h5><a href="#">'.$row['title'].'</a></h5>
                        </div>
                    </div>
                </div>';
            }
        } else {
            echo "<p>No trending data available.</p>";
        }
        ?>
        </div>
    </div>
</div>
<!-- Trending Section End -->
