<?php 
	include('database.php');

	if (isset($_POST['save'])) {
		$name = $_POST['name'];
		$firstname = $_POST['Fullname'];
		$days = $_POST['days'];
		$email = $_POST['email'];
		$sid = $_POST['sid'];

		// $sqlsingledata = "SELECT * FROM student where sid='$sid'";
		$sql ="INSERT INTO student(Firstname,Lastname,days,email,sid) VALUES('$Firstname','$Lastname','$days','$email','$sid')";
	
		
			if(mysqli_query($conn,$sql)){
				echo "Registration Successfully Done";
			}else{
				echo "Error";
			}
		
mysqli_close($conn);
		// $save = $db->query( 
		// $_SESSION['message'] = "Address saved sucessfully!"; 
		// header('location: secnd.php');
	}

// if(isset($_POST['clear'])){
// 	$name = "";
// 		$first_name = "";
// 		$days ="";
// 		$email = "";
// 		$sid = "";
// }

$sqlgetinfo ="SELECT * FROM student";
$results = mysqli_query($conn,$sqlgetinfo);



	

?>