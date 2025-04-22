<?php
include 'db.php';

$query = "SELECT * FROM trending ORDER BY views DESC LIMIT 6"; // Ambil 5 data dengan views tertinggi
$result = $conn->query($query);

if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '
        <div class="product__sidebar__view__item set-bg mix day week month years" 
             data-setbg="'.$row['image_url'].'">
            <div class="view"><i class="fa fa-eye"></i> '.$row['views'].'</div>
            <h5><a href="#">'.$row['title'].'</a></h5>
        </div>';
    }
}
?>
