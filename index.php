<?php




$serverName='localhost';
$userName='root';
$password='';
$dbName='Hospital';
$con=new mysqli($serverName,$userName,$password,$dbName);
if (mysqli_connect_errno()){
	echo"Failed";
	exit();
}

		$name =  $_REQUEST['name'];
        $phone = $_REQUEST['phone'];
        $email =  $_REQUEST['email'];
        $time = $_REQUEST['time'];
        



$sql="INSERT INTO appointment VALUES( '$name','$phone', '$email', '$time')"; /*('NAME', 'EMAIL', '999999999', 'MOBILE,TAB etc..')*/



if(mysqli_query($con, $sql)){
            
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($con);
        }

          
        
        mysqli_close($con);


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>
    <div style="text-align: center;">
        <h1>Appointment Confirmed</h1>
        <p>NAME:<?php echo "$name";   ?></p>
        <p>PHONE:<?php echo "$phone";   ?></p>
        <p>EMAIL:<?php echo "$email";   ?></p>
        <p>TIME:<?php echo "$time";   ?></p>
    </div>
</body>
</html>