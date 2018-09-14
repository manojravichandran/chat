<?
session_start();
 
function loginForm(){
    echo'
    <div id="loginform">
    <form action="index.php" method="post">
        <p>Please enter your name to continue:</p>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" />
        <input type="submit" name="enter" id="enter" value="Enter" />
    </form>
    </div>
    ';
}
 
if(isset($_POST['enter'])){
    if($_POST['name'] != ""){
        $_SESSION['name'] = stripslashes(htmlspecialchars($_POST['name']));
    }
    else{
        echo '<span class="error">Please type in a name</span>';
    }
}
?>
<?php
if(!isset($_SESSION['name'])){
    loginForm();
}
else{
?>
<div id="wrapper">
    <div id="menu">
        <p class="welcome"><b>WELCOME TO CHATZ</b></p>
        <p class="logout"><a id="Exit" href="#">Exit from Chatz</a></p>
        <div style="clear:both"></div>
    </div>
    <div id="chatbox">

    </div>
    <div id="mes">
     <form name="message" action="">
        <input name="usermsg" type="text" id ="usermsg" size="60"/>
        <input name="submit" type="submit" id="submit" value="send" class="search"/>

     </form>
    </div>

</div>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
<script type="text/javascript">
// jQuery Document
$(document).ready(function(){
});
</script>
<?php
{
}
?>