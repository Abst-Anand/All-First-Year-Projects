<?php
/*
echo '<pre>';
print_r($_REQUEST);
echo '<br>';

if(isset($_POST['firstname']))
{
    echo 'Firstname, '.$_POST['firstname']. ' ,is passed using POST method';
}

*/

session_start();
echo '<h3>Login Unsuccessful</h3>';
echo '<br>';

if(isset($_SESSION['email']))
{
echo 'Your email &nbsp;'.$_SESSION['email']. '  &nbsp; should be "admin@php".';
echo '<br>';
echo 'Your password &nbsp;'.$_SESSION['password']. '  &nbsp; should be "123".';
echo '<br>';
echo '<br>';
}
else
{
    echo ' Session is unset now';
}
?>
<html>
    <script>
function user_logout()
{
    <?php
         session_unset();
         session_destroy();
         //header("Location:http://localhost/PhpInternship/php/form.php");
    ?>
}
</script>

    <input type="button" value="Logout" onclick="function user_logout()">
</html>