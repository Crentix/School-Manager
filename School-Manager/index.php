<?php include('header.php') ?>

<<?php 

	if(isset($_POST['login'])){
		$_SESSION['username'] = $_POST['username'];
	}

	if(isset($_SESSION['status'])){
		if($_SESSION['status'] != "logged in"){
			header("Location: login.php");
			exit();
		}
	}else{
		header("Location: login.php");
		exit();
	}

?>

<?php include('footer.php') ?>