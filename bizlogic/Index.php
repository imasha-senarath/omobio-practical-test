<?php
    $con = mysqli_connect('localhost', 'root', '','Exam');

    $userEmail = $_GET["email"];
    $userPassword = $_GET["password"];

    $selectUser = "select * from Exam where email='$userEmail' AND password='$userPassword'";
    $query = mysqli_query($con, $selectUser);
    $check = mysqli_num_rows($query);

    if($check == 1) {
        header('Content-Type: JSON');
        $row = mysqli_fetch_array($query);
        $userID = $row['user_id'];
        echo json_encode("done", JSON_PRETTY_PRINT);
    } 

?>