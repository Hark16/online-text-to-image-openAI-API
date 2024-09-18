<?php
include '00.php';

// Create a new table: hk_admin_details
mysqli_query($conn, "CREATE TABLE IF NOT EXISTS wp_hk_admin_details (
    id BIGINT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    email TEXT(200) NOT NULL,
    password TEXT(200) NOT NULL
)");

// Create a new table: hk_admin_credits
mysqli_query($conn, "CREATE TABLE IF NOT EXISTS wp_hk_admin_credits (
    id BIGINT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    total_credits INT(5) NOT NULL
)");

// Create a new table: hk_admin_apis
mysqli_query($conn, "CREATE TABLE IF NOT EXISTS wp_hk_admin_apis (
    id BIGINT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    my_key_name TEXT(200) NOT NULL,
    my_key TEXT(200) NOT NULL
)");

// Create a new table: hk_all_users
mysqli_query($conn, "CREATE TABLE IF NOT EXISTS wp_hk_all_users (
    id BIGINT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    email TEXT(200) NOT NULL,
    password TEXT(200) NOT NULL,
    date TEXT(200) NOT NULL
)");

// Create a new table: hk_all_credits
mysqli_query($conn, "CREATE TABLE IF NOT EXISTS wp_hk_all_credits (
    id BIGINT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    email TEXT(200) NOT NULL,
    buy INT(100) NOT NULL,
    spend INT(100) NOT NULL,
    date TEXT(200) NOT NULL
)");

// Create a new table: hk_all_images
mysqli_query($conn, "CREATE TABLE IF NOT EXISTS wp_hk_all_images (
    id BIGINT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    email TEXT(200) NOT NULL,
    prompt TEXT NOT NULL,
    image_name TEXT(200) NOT NULL,
    date TEXT(200) NOT NULL
)");

// Create a new table: hk_all_payments
mysqli_query($conn, "CREATE TABLE IF NOT EXISTS wp_hk_all_payments (
    id BIGINT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    email TEXT NOT NULL,
    status TEXT NOT NULL,
    payment_id TEXT NOT NULL,
    amount TEXT NOT NULL,
    date TEXT(200) NOT NULL
)");

// Close the MySQLi connection
$conn->close();

?>
