<!-- <form action="/" method="post" enctype="multipart/form-data">
    <input type="file" name="uploadFile" />
    <input type="submit" value="Upload" />
</form> -->

<?php

// ! magic methods
// class A {
//     function __debugInfo() {
//         return ['x' => 123];
//     }
// }

// var_dump(new A()); // shows only x => 123

// class A {
//     function __clone() {
//         echo "Cloned!";
//     }
// }

// $a = new A();
// $b = clone $a; // Cloned!


// class A {
//     function __call($name, $args) {
//         echo "Method $name does not exist";
//     }
// }

// $a = new A();
// $a->hello(); // Method hello does not exist


// ! namespace
// require_once(__DIR__ . '/module1.php');
// require_once(__DIR__ . '/binary.php');

// use RoadmapSh\Module\Logger as ModuleLogger;
// use RoadmapSh\Binary\Logger as BinaryLogger;

// ModuleLogger::log("This is a module log message.");
// echo "<br />";
// BinaryLogger::log("This is a binary log message.");


// ! interface
// interface Animal {
//     public function speak();
// }

// class Dog implements Animal {
//     // MISSING speak()
// }


// interface iTemplate {
//     public function setVariable($name, $var);
//     public function getHtml($template); 
// }

// class Template implements iTemplate {
//     private $vars = array();

//     // public function setVariable($name, $var) {
//     //     $this->vars[$name] = $var;
//     // }

//     public function getHtml($template) {
//         foreach($this->vars as $name => $value) {
//             $template = str_replace('{' . $name . '}', $value, $template);
//         }
//         return $template;
//     }
// }

// echo "<pre>";
// $template = new Template();
// // $template->setVariable('title', 'Hello World');
// // $template->setVariable('body', 'This is a simple templating engine.');
// $html = $template->getHtml('<h1>{title}</h1><p>{body}</p>');
// print_r($html);
// echo "</pre>";


//  ! abstraction
// abstract class AbstractClass
// {
//     // Force extending class to define this method
//     abstract protected function getValue();
//     abstract protected function prefixValue($prefix);

//     // Common method
//     public function printOut()
//     {
//         print $this->getValue() . "\n";
//     }
// }

// echo "<pre>";
// print_r(AbstractClass::printOut());
// echo "</pre>";

// ! polymorphism
// interface Shape {
//   public function draw();
// }

// class Circle implements Shape {
//   public function draw() {
//     echo "Draw a circle";
//   }
// }

// class Rectangle implements Shape {
//   public function draw() {
//     echo "Draw a rectangle";
//   }
// }

// function drawShape(Shape $shape) {
//   $shape->draw();
// }

// $circle = new Circle() ;
// $circle -> draw();  
// drawShape(new Rectangle()); 

// ! inheritence
// class Vehicle {
//     public $color;  

//     public function drive(){
//         echo "Driving a vehicle\n";
//     }
// }

// class Car extends Vehicle {
//     public $brand;

//     public function honk(){
//         echo "Beep Beep!\n";
//     }
// }

// $car = new Car();

// echo "<pre>";
// print_r($car);
// echo "</pre>";

// ! construct & destruct
// class TestClass{
//     public $value = "undefined";
//     private $private = "secret";
//     protected $protected = "hidden";

//     public static $staticValue = "I am static";

//     public function __construct($value){
//         $this -> value = $value;
//     }

//     public function getValue(){
//         return $this -> value;
//     }

//     public static function getStaticValue(){
//         return self::$staticValue;
//     }

//     public function __destruct(){
//         // echo "Destroying " . $this -> value;
//     }
// }

// $class = new TestClass("My Object");
// echo "<pre>";
// print_r($class);

// echo TestClass -> getStaticValue();
// echo "</pre>";

//!  Generate CSRF token
// https://www.phptutorial.net/php-tutorial/php-csrf/
// if(empty($_SESSION['csrf'])) {
//     $_SESSION['csrf'] = bin2hex(random_bytes(32));
// }

// // Verify CSRF token
// if(isset($_POST['csrf']) && $_POST['csrf'] === $_SESSION['csrf']) {
//     // valid CSRF token, perform action
// }

// ! xss
// $raw_text = '<script>alert("XSS Attack!");</script>';
// $secure_text = htmlspecialchars($raw_text, ENT_QUOTES, 'UTF-8');
// echo $secure_text;

// ! session
// session_start();

// if(!isset($_SESSION['views'])) {
//     $_SESSION['views'] = 0;
//     echo "This is your first visit!\n";
// }else{
//     $_SESSION['views']++;
//     echo "Page views: " . $_SESSION['views'] . "\n";
// }

// setcookie("user", "John Doe", time() + (86400 * 30), "/"); // 86400 = 1 day

// ! cookie
// echo "<pre>";
// // print_r($_COOKIE);

// foreach ($_COOKIE as $key => $value) {
//     // echo cookie expire date
//     echo "Cookie Name: " . htmlspecialchars($key) . ", Value: " . htmlspecialchars($value) . "\n";
// }

// echo "</pre>";

// ! file upload
// echo "<pre>";
// print_r($_FILES);
// echo "</pre>";

// ! CSV processing
// $file = fopen(__DIR__ . "/sample.csv", "r");

// function startElement($parser, $name, $attrs) {
//     echo "Start: $name\n";
//     if (!empty($attrs)) {
//         print_r($attrs);
//     }
// }

// function endElement($parser, $name) {
//     echo "End: $name\n";
// }

// function characterData($parser, $data) {
//     $data = trim($data);
//     if ($data !== '') {
//         echo "Data: $data\n";
//     }
// }

// $xml_data = file_get_contents(__DIR__ . "/data.xml");

// $parser = xml_parser_create();


// echo "<pre>";
// // event handlers
// xml_set_element_handler($parser, "startElement", "endElement");
// xml_set_character_data_handler($parser, "characterData");

// // parse
// xml_parse($parser, $xml_data);

// // free resources
// xml_parser_free($parser);

// echo "</pre>";



// ! JSON processing
// // Create an array
// $data = array('a' => 1, 'b' => 2, 'c' => 3);

// // Encode the array into a JSON string
// $json = json_encode($data);
// // echo $json;

// $decoded = json_decode($json, true);
// print_r($decoded);

// ! file permission
// echo chmod(__DIR__ . "/data.json", 0750); // true

// ! writing file
// $myfile = fopen(__DIR__ . "/testfile.txt", "w") or die("Unable to open file!");

// ! appending file
// $file = 'new-user.txt';
// $current = file_get_contents($file);
// print_r($current);

// ! reading file
// $file = fopen(__DIR__ . "/data.json", "r"); 

// $jsonString = fread($file, filesize(__DIR__ . "/data.json"));
// echo json_encode(json_decode($jsonString));

// if ($file) {
//     echo "<pre style='white-space: pre-wrap;'>";
//     while (($line = fgets($file)) !== false) {
//         echo $line;
//     }
//     echo "</pre>";
//     fclose($file);
// } else {
//     echo 'Error opening file';
// }

//! require_once(__DIR__ .'./module1.php');
    
// // echo sum(1, 2, 3, 4, 5); // Outputs: 15
// $db = new Database('localhost', 'root', '', 'test_db');
// $results = $db->query('SELECT * FROM users');

// ! http method
// echo "<pre>";
//     print_r($_SERVER);
// echo "</pre>";

// ! variadic functions
// function studentsAttendence( ...$students) {
//     $count = count($students);

//     if ($count === 0) {
//         return "";
//     }

//     if ($count === 1) {
//         return $students[0];
//     }

//     // get all except last
//     $allButLast = array_slice($students, 0, -1);

//     // get last item
//     $last = end($students);

//     return print_r($last);

//     // join them with commas and add "and" before the last item
//     return implode(", ", $allButLast) . " and " . $last;
// }

// echo studentsAttendence("Math", "Alice", "Bob", "Charlie");

// function sum(...$numbers) {
//     return array_sum($numbers);
// }
// echo sum(1, 2, 3, 4);


// ! recusive
// function countdown($n){
//     if($n <= 0){
//         echo "Done!\n";
//         return;
//     }else{
//         echo $n . "\n";
//         echo "<br/>";
//         return countdown($n - 1);
//     }
// }

//  countdown(9999);

// ! arrow function
// $getVal = fn($x) => $x * 2;
// echo $getVal(5); // Outputs: 10

// ! arrays
// $dom = array(
//     "id" => 1,
//     "children" => array(
//         array(
//             "id" => 2,
//             "children" => null
//         ),
//         array(
//             "id" => 3,
//             "children" => array(
//                 array(
//                     "id" => 4,
//                     "children" => null
//                 )
//             )
//         )   
//     )
// );
// echo "<pre>";
// print_r(json_encode($dom, 128));
// echo "</pre>";

// echo JSON_PRETTY_PRINT;


// ! nullsafe operator
// $session = array(
//     'user' => array(
//         'profile' => null
//     )
// );

// echo $session?->user?->profile?->name;
// ! null coalescing operator
// $GET['username'] = 'alice';
// $_GET['username'] = 'alice';

// $username = $_GET['username'] ?? 'guest';
// echo "Hello, " . htmlspecialchars($username) . "!\n";

// ! match
// $message = match (400) {
//   200, 300 => 'OK',
//   400 => 'error',
//   default => 'unknown status code',
// };

// echo $message;

// ! define
// define("SITE_NAME", "My Awesome Site");
// echo "Welcome to " . SITE_NAME . "!\n";

// ! var_dump

// $array = ["john", "jane"];
// echo "<pre>";
// print_r($array);
// echo "</pre>";

// ! type casting
// ? string to int
// $str = "123";
// $int = (int)$str; // or intval($str)
// echo $int;

// ? int to float
// $int = 123;
// $float = (float)$int; // or floatval($int)

// get type 
// echo gettype($float); // Outputs: double

// ? boolean to int
// $bool = true;
// $int = (int)$bool; // or intval($bool)
// echo $int; // Outputs: 1

// ? boolean to string
// $bool = false;
// $str = (string)$bool; // or strval($bool)
// echo $str; // Outputs: 1




// ! scopes in php
// $my_value = "Hello, World!";
// echo "<pre>";
// print_r($GLOBALS);
// echo "</pre>";

// function myFunction() {
//     global $my_value;
//     echo $my_value;
// }

// myFunction(); // Outputs: Hello, World!


// echo "Current PHP version: " . PHP_VERSION;


// ! what is php 
// echo "PHP stands for Hypertext Preprocessor." ;

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

// session
// session_start();

// if(!isset($_SESSION['views'])) {
//     $_SESSION['views'] = 0;
//     echo "This is your first visit!";
// }else{
//     $_SESSION['views']++;
//     echo "Page views: " . $_SESSION['views'];
// }

// !mysqli connection
// $servername = "localhost";
// $username = "username";
// $password = "password";
// $dbname = "myDB";

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);

// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }
// echo "Connected successfully";


// ! PDO connection
// try {
//     $pdo = new PDO('mysql:host=localhost;dbname=test', 'username', 'password');
//     $stmt = $pdo->query('SELECT * FROM myTable');
//     while ($row = $stmt->fetch()) {
//         echo $row['name'] . "\n";
//     }
// } catch (PDOException $e) {
//     echo "Connection failed: " . $e;
// }

echo "\n";

