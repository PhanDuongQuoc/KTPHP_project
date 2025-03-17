<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
include '../config/db.php';

// Xử lý thêm học phần
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["add"])) {
    $maHP = $_POST["maHP"];
    $tenHP = $_POST["tenHP"];
    $soTinChi = $_POST["soTinChi"];

    $stmt = $conn->prepare("INSERT INTO HocPhan (MaHP, TenHP, SoTinChi) VALUES (?, ?, ?)");
    $stmt->bind_param("ssi", $maHP, $tenHP, $soTinChi);

    if ($stmt->execute()) {
        echo "<script>alert('✅ Thêm học phần thành công!'); window.location.href='hocphan.php';</script>";
    } else {
        echo "<script>alert('❌ Lỗi: " . $stmt->error . "');</script>";
    }
    $stmt->close();
}

// Lấy danh sách học phần
$sql = "SELECT * FROM HocPhan";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Quản lý Học Phần</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>

    <h2>📚 Danh sách Học Phần</h2>
    <table border="1">
        <tr>
            <th>Mã HP</th>
            <th>Tên HP</th>
            <th>Số tín chỉ</th>
            <th>Hành động</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()) : ?>
            <tr>
                <td><?= $row["MaHP"] ?></td>
                <td><?= $row["TenHP"] ?></td>
                <td><?= $row["SoTinChi"] ?></td>
                <td>
                    <a href="edit_hocphan.php?maHP=<?= $row['MaHP'] ?>">✏ Sửa</a> | 
                    <a href="delete_hocphan.php?maHP=<?= $row['MaHP'] ?>" onclick="return confirm('Bạn có chắc muốn xóa?')">❌ Xóa</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>

    <h2>➕ Thêm Học Phần</h2>
    <form method="POST">
        <input type="text" name="maHP" placeholder="Mã HP" required>
        <input type="text" name="tenHP" placeholder="Tên HP" required>
        <input type="number" name="soTinChi" placeholder="Số tín chỉ" required>
        <button type="submit" name="add">Thêm</button>
    </form>

</body>
</html>
