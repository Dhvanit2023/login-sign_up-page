<?php
/*
//print_r($_POST);
$name=$_POST['email'];
$number=$_POST['password'];

$con=new mysqli('localhost','root','','login');
if($con->connect_error){
    die('connection failed:'.$con->connect_error);
}
else{
    $stmt=$con->prepare("insert into login(email,pass)values(?,?)");
    $stmt->bind_param("ss",$name,$number);
    $stmt->execute();
    echo"ok done...";
    $stmt->close();
    $con->close();
}

?>



// Replace these values with your database connection details
$servername = "localhost";
$username = "root"; // Database username
$password = ""; // Database password
$dbname = "login"; // Database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $conn->real_escape_string($_POST['email']); // Prevent SQL injection
    $password = $_POST['password'];

    // SQL query to check if the user exists
    $sql = "SELECT * FROM login WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        
        // Verify password (assuming passwords are hashed in your database)
        if (password_verify($password, $user['pass'])) {
            // User found, redirect to index.html
            header("Location: index.html");
            exit();
        } else {
            // Invalid password
            echo "Invalid email or password.";
        }
    } else {
        // User not found
        echo "Invalid ";
    }
}

// Close the connection
$conn->close();
*/


// Replace these values with your database connection details
$servername = "localhost";
$username = "root"; // Database username
$password_db = ""; // Database password
$dbname = "login"; // Database name

// Create connection
$conn = new mysqli($servername, $username, $password_db, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $conn->real_escape_string($_POST['email']); // Prevent SQL injection
    $password = $_POST['password'];

    // SQL query to check if the user exists
    $sql = "SELECT * FROM login WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        
        // Verify password (assuming passwords are hashed in your database)
        if (password_verify($password, $user['pass'])) { // Change 'pass' to 'password'
            // User found, redirect to index.html
            header("Location: index.html");
            exit();
        } else {
            // Invalid password
            echo "Invalid email or password.";
        }
    } else {
        // User not found
        echo "Invalid email or password.";
    }
}

// Close the connection
$conn->close();


?>
