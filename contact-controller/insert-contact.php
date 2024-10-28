<?php

require_once "../admin/koneksi.php";

// htmlspecialchars() : berfungsi jika ada penginputan ada tanda kutip ("") maka tidak ada kesalahan tidak error
if (isset($_POST['send'])) {
    $name = mysqli_real_escape_string($koneksi, $_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    $select = mysqli_query($koneksi, "SELECT email FROM contact WHERE email = '$email'");
    // handle error email yang unique
    if (mysqli_num_rows($select) > 0) {
        header("location:../contact.php?status=email-sudahada");
        exit();
    } else {
        $insert = mysqli_query($koneksi, "INSERT INTO contact (nama,email,subject,message) VALUES ('$name','$email','$subject','$message') ");

        if ($insert) {
            header("location:../contact.php?status=success");
            exit();
        }
    }
}
