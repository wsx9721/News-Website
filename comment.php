<?php
$servername = "localhost";
$username = "root";
$password = "";

    // if ($_POST["SUMBIT"] == "评论") {
        if (isset($_POST["comment"])) {
            $comment = $_POST["comment"];
        }
        // if (isset($_POST['comment'])) {
        //     $comment = $_POST['comment'];
        // }
        try {
            $conn = new PDO("mysql:host=$servername;dbname=hahaha", $username, $password);
            $sql = "INSERT INTO COMMENTS (comment)
            VALUES ('$comment')";
            $conn->exec($sql);
            // echo "<script>alert('评论成功！'); history.go(-1);</script>";
        }
        catch(PDOException $e)
        {

        }
        $conn = null;
        require ('News-Website.php');

    // }


 ?>
