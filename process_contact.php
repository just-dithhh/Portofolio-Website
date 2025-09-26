<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $message = isset($_POST['message']) ? $_POST['message'] : '';

    if (empty($name) || empty($email) || empty($message)) {
        die("Kolom wajib belum diisi.");
    }

    $sql = "INSERT INTO contact_form (name, email, phone, message) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $phone, $message);

    if (mysqli_stmt_execute($stmt)) {
        echo "Data berhasil disimpan!";
    } else {
        echo "Gagal simpan data: " . mysqli_stmt_error($stmt);
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
} else {
    die("Akses langsung tidak diizinkan.");
}
?>

