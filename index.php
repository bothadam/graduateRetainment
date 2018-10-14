<html>
    <form>
        <input type="text" name="username" text="Username here">
        <input type="password" name="username" text="Username here">
    </form>
    
    
    <?php
session_start();
    $username = $_POST["username"];
    $password = $_POST["password"]; 

    $host = "localhost";
    $dbusername = "intelli4_adam";
    $dbpassword = "Winbox@@7";
    $dbname = "intelli4_graduateRetainmentDB";
    
    $conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname);

    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: ".mysqli_connect_error();
    }

    if($username == "admin"){
        echo "admin";
        $sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
        $re = mysqli_query($conn, $sql);

        //check to see if there is any record / row in the database
	   //if there is then the user exists
	   if (mysqli_num_rows($re)) {
		//echo "Welcome";
		//creating a session name with username ad inserting the submitted username
		$_SESSION['username'] = $username;
		header("Location: admin.php");
	   }else{
		//display error if no record exists
		echo "Error : Invalid Admin Login Credentials";
	   }
    }else{

    $sql = "SELECT * FROM clients WHERE username='$username' AND password='$password'";
    $re = mysqli_query($conn, $sql);

    //check to see if there is any record / row in the database
	//if there is then the user exists
	if (mysqli_num_rows($re)) {
		//echo "Welcome";
		//creating a session name with username ad inserting the submitted username
		$_SESSION['username'] = $username;
		header("Location: products.php");
	}else{
		//display error if no record exists
		echo "Error : Invalid Login Credentials";
	}
        }
?>
</html>