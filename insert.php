<?php
//insert.php
if(isset($_POST["subject"]))
{
 include("connect.php");
 $subject = mysqli_real_escape_string($connect, $_POST["subject"]);
 $comment = mysqli_real_escape_string($connect, $_POST["comment"]);
 $query = "
 INSERT INTO comment(comment_subject, comment_text)
 VALUES ('$subject', '$comment')";
 mysqli_query($connect, $query);
}
?>
