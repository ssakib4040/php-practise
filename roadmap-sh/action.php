<?php

if(isset($_POST['name']) && isset($_POST['age'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];

    echo "Your name is: " . htmlspecialchars($name) . "\n";
    echo "Your age is: " . htmlspecialchars($age) . "\n";
}
?>