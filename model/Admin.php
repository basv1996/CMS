<?php 
if (isset($_POST['submit'])){
    
$link = mysqli_connect("localhost", "root", "", "myband");
    if(!$link){
        die("can not connect: " . mysqli_error());}
mysqli_select_db($link, "myband");
    
    $sql = "INSERT INTO newsarticles (title, content) VALUES ('$_POST[title]','$_POST[content]')";
    
    mysqli_query($sql,$link);
    mysqli_close($link);
}
?>
<form  method="post">
    Title:<input type="text" name="title"></input></br>
Content:<input type="text" name="content"></input></br>
<input type="submit" value="Submit">
</form>