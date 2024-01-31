<?php
session_start();
if (isset($_SESSION['username'])) {
    echo "User is logged in: " . $_SESSION['username'];

} else {
    echo "User is not logged in.";
    header("location:login.php");
}
?>
<?php
session_start();

$host = "localhost";
$user = "root";
$password = "";
$db = "schoolproject";
$data = mysqli_connect($host, $user, $password, $db);
if (!$data) {
    die("Connection failed: " . mysqli_connect_error());
}
$directory = "./first/";
$files = scandir($directory);

echo "<ul>";
foreach ($files as $file) {
    if ($file != "." && $file != "..") {
        echo "<li><a href='$directory$file'>$file</a></li>";
    }
}
echo "</ul>";
?>
