

<?php

$conn = mysqli_connect('localhost','root');

if($conn){
    echo "Connection Successfull";
}
else {"no Connection";
}


mysqli_select_db($conn, 'youtubeuserdata');

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comments = $_POST['comments'];

$query = " insert into userinfodata (user, email, mobile, comment)
values ('$user', '$email', '$mobile', '$comments') ";





mysqli_query($conn, $query);


header('location:index.php');

?>