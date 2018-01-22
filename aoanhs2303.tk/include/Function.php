<?php require_once("include/DB.php"); ?>
<?php require_once("include/Session.php"); ?>


<?php 
function Redirect_to($New_Location) {
    header("Location:".$New_Location);
    exit;
}
function Login_Attemp($Username, $Password) {
    global $Connection;
    $QueryLogin = "SELECT * FROM admin WHERE username = '$Username' AND password ='$Password'";
    $Execute = mysqli_query($Connection, $QueryLogin);
    if($admin = mysqli_fetch_assoc($Execute)) {
        return $admin;
    } else {
        return null;
    }
}

function Login() {
    if(isset($_SESSION['User_id'])) {
        return true;
    }
}

function Confirm_Login() {
    if(!Login()) {
        $_SESSION["ErrorMessage"] = "Dang nhap da nhe !";
        Redirect_to("login.php");
    }
}
?>