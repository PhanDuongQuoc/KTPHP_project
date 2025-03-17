<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết sinh viên</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card shadow-lg p-4">
            <h2 class="text-center text-primary">Chi tiết sinh viên</h2>
            <?php
            include '../config/db.php';
            $MaSV = $_GET['MaSV'];
            $sql = "SELECT SinhVien.*, NganhHoc.TenNganh FROM SinhVien 
                    LEFT JOIN NganhHoc ON SinhVien.MaNganh = NganhHoc.MaNganh
                    WHERE MaSV = '$MaSV'";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            ?>
            <div class="row mt-4">
                <div class="col-md-4 text-center">
                    <img src="../uploads/<?= $row['Hinh'] ?>" class="img-fluid rounded shadow" width="150">
                </div>
                <div class="col-md-8">
                    <p><strong>Mã SV:</strong> <?= $row['MaSV'] ?></p>
                    <p><strong>Họ Tên:</strong> <?= $row['HoTen'] ?></p>
                    <p><strong>Giới Tính:</strong> <?= $row['GioiTinh'] ?></p>
                    <p><strong>Ngày Sinh:</strong> <?= $row['NgaySinh'] ?></p>
                    <p><strong>Ngành Học:</strong> <?= $row['TenNganh'] ?></p>
                </div>
            </div>
            <div class="text-center mt-4">
                <a href="index.php" class="btn btn-secondary">Quay lại danh sách</a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
