<?php
$connection = new PDO('mysql:host=localhost;dbname=test_db;charset=utf8', 'root', 'admin');
$query      = $connection->query("SELECT TABLE_NAME FROM information_schema.TABLES WHERE TABLE_SCHEMA = 'demo'");
$tables     = $query->fetchAll(PDO::FETCH_COLUMN);

if (empty($tables)) {
    echo '<p class="center">There are no tables in database <code>demo</code>.</p>';
} else {
    echo '<p class="center">Database <code>demo</code> contains the following tables:</p>';
    echo '<ul class="center">';
    foreach ($tables as $table) {
        echo "<li>{$table}</li>";
    }
    echo '</ul>';
}
?>

<?php
/*
$link = mysqli_connect('localhost','root','admin','test_db');

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;

mysqli_close($link);

?>
*/
?>
