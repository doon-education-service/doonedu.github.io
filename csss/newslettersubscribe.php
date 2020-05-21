

<?php

$conn = mysqli_connect('localhost','root');

if($conn){
    echo "Connection Successfull";
}
else {"no Connection";
}


mysqli_select_db($conn, 'suscribestoournewletter');

$user = $_POST['user'];
$email = $_POST['email'];


$query = " insert into newslettersubscribe (user, email )
values ('$user', '$email') ";

echo "$query";





mysqli_query($conn, $query);


header('location:web.php');

?>