<?php  
/**
 *  For your System Functions such as C.R.U.D Manipulations
 *	C.R.U.D (Create, Read, Update, Delete)
 */
require_once 'config/sysconfig.php';

class systemfunctions 
{
	public static function getdbconnection(){
		$server = sysconfig::$servername;
		$user = sysconfig::$username;
		$pass = sysconfig::$password;
		$db = sysconfig::$database;
		$pdo = new PDO("mysql:host=$server;dbname=$db", $user, $pass);
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $pdo;
	}
	// Always add " $pdo = systemfunctions::getdbconnection(); " on your PHP functions if you have Database driven functions
	public static function myFunction(){
		try{
			$pdo = systemfunctions::getdbconnection();
			echo "Successfully Connected,<br>Database Name: ".sysconfig::$database;
			return $pdo;

		}catch(PDOException $e){
			echo "<span style='color: red;'>System ERROR: </span>".$e->getMessage();
		}
		
	}
	public static function sessionStart(){
		session_start();
		$sessionuser = '';
		if(isset($_SESSION['txtusername'])){
		}else{
			session_destroy();
			header('location: login.php');
		}if(isset($_POST['btnlogout'])){
			session_start();
			session_destroy();
			header('location: login.php');
		}
		$sessionuser = $_SESSION['txtusername'];
		return $sessionuser;
	}

	public static function syslogin(){
		session_start();
		$pdo = systemfunctions::getdbconnection();
		$msg = '';
		$remainusername = "";
		if(isset($_POST['btnlogin'])){
			$username = $_POST['txtusername'];
			$password = md5($_POST['txtpassword']);
			// $sql = "select * from tbl_user_accounts where username = '$username' and password = '$password' and status = 'active' ";
			// $query = $pdo->prepare($sql);
			// $query->execute(array($username,$password));
			// $row = $query->rowCount();
			// $fetch = $query->fetch();

			// Correct the SQL statement
            $sql = "SELECT * FROM tbl_user_accounts WHERE username = :username AND password = :password AND status = 'active'";
            
            // Prepare the statement
            $query = $pdo->prepare($sql);
            
            // Bind the parameters explicitly (named placeholders)
            $query->bindParam(':username', $username);
            $query->bindParam(':password', $password);
            
            // Execute the query
            $query->execute();
            
            // Get the number of rows
            $row = $query->rowCount();
            $fetch = $query->fetch();
            
			if($row > 0){
				$_SESSION['txtusername'] = $fetch['username'];
				header("location: index.php");
				exit();
			}else{
				$msg = '<br>
						<div class="alert alert-danger">
							<strong>Oops!</strong> Authentication Incorrect. Check your username or password.
						</div>
						';
			}

		}
		return $msg;
	}
	
}
?>