<?php
// Validate form inputs
if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['password'])) {
    die('Please fill out all fields');
}

if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    die('Invalid email format');
}

// Save profile picture to server
$target_dir = 'uploads/';
$target_file = $target_dir . date('YmdHis') . '_' . basename($_FILES['profile_pic']['name']);
move_uploaded_file($_FILES['profile_pic']['tmp_name'], $target_file);

// Save user data to CSV file
$data = array($_POST['name'], $_POST['email'], $target_file);
$file = fopen('users.csv', 'a');
fputcsv($file, $data);
fclose($file);

// Start session and set cookie
session_start();
$_SESSION['name'] = $_POST['name'];
setcookie('user', $_POST['name'], time() + (86400 * 30), '/');

// Redirect to confirmation page
header('Location: confirmation.php');
exit();
