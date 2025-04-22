<!DOCTYPE html>
<html lang="zxx">

<?php include 'db.php'; ?>

<head>
    <?php include 'tittle.php'; ?>
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <?php include 'header.php'; ?>
    <!-- Header End -->

    <!-- Product Section Begin -->
    <section class="trending-products">
        <div class="container">
            <div class="section-title" style="margin-top: 50px;">
                <h4>All Trending Products</h4>
            </div>
            <div class="row">

            <?php
            // Query untuk mengambil semua data trending dari database
            $query = "SELECT * FROM trending";
            $result = $conn->query($query);

            // Mengecek apakah ada data trending yang tersedia
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    // Menampilkan data trending dalam bentuk item produk
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
                echo "<p>No trending products available.</p>";
            }
            ?>

            </div>
        </div>
    </section>

    <!-- Product Section End -->

<!-- Footer Section Begin -->
<?php include 'footer.php'; ?>
  <!-- Footer Section End -->

  <!-- Search model Begin -->
  <div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch"><i class="icon_close"></i></div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Search here.....">
        </form>
    </div>
</div>
<!-- Search model end -->

<!-- Js Plugins -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/player.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/mixitup.min.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>


</body>

</html>