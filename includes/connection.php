<!-- <?php
 $db = mysqli_connect('localhost', 'root', '') or
        die ('Unable to connect. Check your connection parameters.');
        mysqli_select_db($db, 'prince' ) or die(mysqli_error($db));
?> -->

<?php
// Retrieve environment variables for the PostgreSQL database
$host ='dpg-ct8nidij1k6c73e936dg-a';         // Render PostgreSQL host
$db   ='prince_qhql';         // Database name
$user ='prince_qhql_user';         // Database username
$pass ='t7pguZ3HU5ExQuAS0oqWUE07ib0Pl951';     // Database password
$port ='5432';         // Database port (default is 5432)

// Build the connection string
// $dsn = "pgsql:host=dpg-ct8nidij1k6c73e936dg-a;port=5432;dbname=prince_qhql;user=prince_qhql_user;password=your_password";
$conn_string = "pgsql:host=dpg-ct8nidij1k6c73e936dg-a;port=5432;dbname=prince_qhql;user=prince_qhql_user;password=t7pguZ3HU5ExQuAS0oqWUE07ib0Pl951";

// Connect to PostgreSQL
$db = pg_connect($conn_string);

if (!$db) {
    die('Unable to connect. Check your connection parameters.');
} else {
    echo "PostgreSQL connection successful!";
}
?>