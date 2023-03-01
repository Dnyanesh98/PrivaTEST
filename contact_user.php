<?php

// $Server_Name="locolhost";
// $User_Name="root";
// $Pwd="";
// $DB_Name="userdata"

$conn = mysqli_connect("localhost","root","","priva_contact");
if (!$conn)
{
    die('error connecting to database');
}
else{
    echo 'connected';
}

mysqli_select_db($conn, "priva_contact");

$user = $_POST['Name'];
$Email = $_POST['Email'];
$Message = $_POST['Message'];

$query = " insert into  user_data (Name, Email, Message)
  values ('$user', '$Email', '$Message')";

//  $query = "INSERT INTO `user_data`(`Name`, `Email`, `Message`) VALUES ('$user','$Email','$Email')";



mysqli_query($conn,$query);

header('location:contactUs.php');

?>