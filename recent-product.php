<?php include 'db.php'; ?>
<!-- Recent Section Begin -->
<div class="recent__product">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-8">
                <div class="section-title">
                    <h4>Recently Added Shows</h4>
                </div>
            </div>
        </div>

        <div class="row">
        <?php
        $query = "SELECT * FROM trending ORDER BY date_added DESC LIMIT 3";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                // Menampilkan data
                echo '
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="'.$row['image_url'].'">
                            <div class="ep">Episode '.$row['episode'].'</div>
                        </div>
                        <div class="product__item__text">
                            <ul>
                                <li>'.$row['status'].'</li>
                                <li>'.$row['category'].'</li>
                            </ul>
                            <h5><a href="#">'.$row['title'].'</a></h5>
                            <p>Added on: '.$row['date_added'].'</p> <!-- Menampilkan tanggal penambahan -->
                        </div>
                    </div>
                </div>';
            }
        } else {
            echo "<p>No recent data available.</p>";
        }
        ?>
        </div>
    </div>
</div>
<!-- Recent Section End -->
