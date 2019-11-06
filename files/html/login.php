<?php $FLAG=getenv("FLAG");
$username=$_GET['username'];
$password=$_GET['password'];
$conn = new mysqli('127.0.0.1', 'root', 'root','ctf');
$sql = 'SELECT * FROM Users WHERE username="'.$username.'" AND password="'.$_GET['password'].'"';
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "Welcome,".$_GET['username'].'<br/>';
    echo $FLAG;
} else {
    echo 'Username or Password is Wrong!';
}
?>