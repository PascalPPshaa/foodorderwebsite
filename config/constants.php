

// session_start();

// define('SITEURL', 'http://localhost/foodorderwebsite/');
// define('LOCALHOST', 'localhost');
// define('DB_USERNAME', 'root');
// define('DB_PASSWORD', '');
// define('DB_NAME', 'food-order');



// $conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error());
// $db_select = mysqli_select_db($conn, DB_NAME) or die(mysqli_error());



<?php 
    session_start();

    // Mengambil data dari Environment Variables Vercel
    $db_host = getenv('DB_HOST');
    $db_user = getenv('DB_USERNAME');
    $db_pass = getenv('DB_PASSWORD');
    $db_name = getenv('DB_NAME');
    $db_port = getenv('DB_PORT');

    // Koneksi Database
    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name, $db_port);

    if(!$conn) {
        die("Koneksi Database Gagal: " . mysqli_connect_error());
    }

    // Mengatur SITEURL agar dinamis mengikuti domain Vercel
    define('SITEURL', 'https://' . $_SERVER['HTTP_HOST'] . '/');
?>