<?php
// Kết nối cơ sở dữ liệu
$conn = new mysqli('localhost', 'root', '', 'CuaHangTraiCay');
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Truy vấn sản phẩm
$sql = "SELECT * FROM SANPHAM";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cửa hàng Trái Cây</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h1>Cửa hàng Trái Cây & Rau Củ</h1>
        <div class="product-grid">
            <?php while ($row = $result->fetch_assoc()) { ?>
                <div class="product-item">
                    <img src="images/<?php echo $row['hinh_anh']; ?>" alt="<?php echo $row['ten_san_pham']; ?>">
                    <h2><?php echo $row['ten_san_pham']; ?></h2>
                    <p>Số lượng: <?php echo $row['so_luong']; ?></p>
                    <p>Giá: <?php echo number_format($row['gia']); ?> VND</p>
                    <button class="add-to-cart" data-id="<?php echo $row['id']; ?>">Thêm vào giỏ hàng</button>
                </div>
            <?php } ?>
        </div>
    </div>

    <script src="js/main.js"></script>
</body>
</html>

<?php
$conn->close();
?>
