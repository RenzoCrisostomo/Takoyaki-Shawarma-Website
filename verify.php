<?php
session_start();

$username = "takoyaki";
$passhash = "$2y$10$9TWcbct12/ScsDtKkaZNMOgl4P.fEY92gBWO6B3bcY1Cx9BmY5zFS"; //takoyaki
$bearer = "QWERTYuiop123456789asdfghJKLmnbvZXC"; //for authentication

if (isset($_POST['username']) && isset($_POST['password'])) {
    if ($_POST['username'] === $username && password_verify($_POST['password'], $passhash)) {
        $_SESSION['bearer'] = $bearer;
        header("location: adminpage.php");
    } else {
        	echo "<script>
        	alert('Your Username or Password is incorrect');
        	window.location.href='login.php';
        	</script>";  
    }
} else {
    echo "Not posting! Invalid!<br>";
    echo "<a href='login.php'>Back</a>";
    die();
}

?>