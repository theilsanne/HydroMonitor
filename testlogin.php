<? 
/* Include Files *********************/
session_start(); 
include("login.php");
/*************************************/
?>

<html>
<title>Login Test</title>
<body>
<? 
if($logged_in){
   echo 'Logged in as '.$_SESSION['username'].', <a href="logout.php">logout</a>';
}else{
   echo 'Not logged in.';
}
?>
