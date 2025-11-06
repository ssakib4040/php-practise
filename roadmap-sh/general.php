<?php

// echo "Hello, World!";

// ! match expression
// $message = match("400"){
//     "200" => "ok",
//     "400" => "bad request",

//     default => "unknown status"
// };

// echo $message;

// ! null coalescing assignment operator 
// $data = [
//     "name" => "John Doe",
//     // "age" => 30
// ];
// // $data["age"] ??= 25;
// echo $data["age"] ?? 40;

// ! null safe operator
// $user = null;

// echo $user ?-> getProfile;

// ! named arguments
// function createUser($name, $age, $email){
//     echo "Name: $name, Age: $age, Email: $email";
// }

// createUser(
//     email: "john@xmaple.com",
//     name: "John Doe");


// ! csv handle
// if (($handle = fopen("./roadmap-sh/sample.csv", "r")) !== FALSE) {
//     while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
//         print_r($data);
//     }
//     fclose($handle);
// }


// json 
// Create an array
// $data = array('a' => 1, 'b' => 2, 'c' => 3);

// // Encode the array into a JSON string
// $json = json_encode($data);
// echo $json;

// // Output: {"a":1,"b":2,"c":3}

// // Decode the JSON string back into an array
// $decoded = json_decode($json, true);
// print_r($decoded);

// // Output: Array ( [a] => 1 [b] => 2 [c] => 3 )
// const FILE_PATH = __DIR__ . '/data.json';

// $jsonString = file_get_contents(FILE_PATH);

// print_r(json_decode($jsonString, true));





// if(isset($_POST['name']) && isset($_POST['age'])) {
//     $name = $_POST['name'];
//     $age = $_POST['age'];

//     echo "Your name is: " . htmlspecialchars($name) . "\n";
//     echo "Your age is: " . htmlspecialchars($age) . "\n";
// }

// ! csrf token generation
// $token = bin2hex(random_bytes(32));

// echo "CSRF Token: " . $token;

// // verfiy token
// // Assume we received a token from a form submission
// $receivedToken = $token;

// if (hash_equals($token, $receivedToken)) {
//     print "Valid CSRF Token.";
// } else {
//     print "Invalid CSRF Token.";
// }

// function authenticate() {
//     header('WWW-Authenticate: Basic realm="Test Authentication System"');
//     header('HTTP/1.0 401 Unauthorized');
//     echo "You must enter a valid login ID and password to access this resource\n";
//     exit;
// }
 
// if (!isset($_SERVER['PHP_AUTH_USER']) ||
//     ($_POST['SeenBefore'] == 1 && $_POST['OldAuth'] == $_SERVER['PHP_AUTH_USER'])) {
//     authenticate();
// } else {
//     echo "<p>Welcome: " . htmlspecialchars($_SERVER['PHP_AUTH_USER']) . "<br />";
//     echo "Old: " . htmlspecialchars($_REQUEST['OldAuth']);
//     echo "<form action='' method='post'>\n";
//     echo "<input type='hidden' name='SeenBefore' value='1' />\n";
//     echo "<input type='hidden' name='OldAuth' value=\"" . htmlspecialchars($_SERVER['PHP_AUTH_USER']) . "\" />\n";
//     echo "<input type='submit' value='Re Authenticate' />\n";
//     echo "</form></p>\n";
// }


// cookie

// setcookie("user", "John Doe", time() + (86400 * 30), "/"); // 86400 = 1 day

// if(isset($_COOKIE["user"])) {
//     echo "Welcome back " . htmlspecialchars($_COOKIE["user"]) . "!";
//     echo "Welcome back " . htmlspecialchars($_COOKIE["wordpress_test_cookie"]) . "!";
// } else {
//     echo "Welcome new user!";   
// }











































































































print "\n";