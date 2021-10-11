<?php
	session_start();
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"]=== true){
    header("location: dashboard.php");
    exit;
}

//require_once ("config_demo.php");
define('DB_SERVER','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','test01');

$mysqli=new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);

//check connection

if($mysqli === false){
    die("ERROR:Could not connect.". $mysqli->connect_error);
}


$username =  $password =  "";
$username_err =  $password_err =  $login_err = "";

if($_SERVER["REQUEST_METHOD"]=="POST") {
    if (empty(trim($_POST["username"]))) {
        //check ig username is empty
        $username_err = "please enter username.";
    } else {
        $username = trim($_POST["username"]);
    }

    if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter your password.";
    } else {
        $password = trim($_POST["password"]);
    }

    if (empty($username_err) && empty($password_err)) {
        $sql = "SELECT id ,username,password FROM users2 WHERE username =  ?";

        if ($stmt = $mysqli->prepare($sql)) {
            $stmt->bind_param("s", $param_username);
            $param_username = $username;
            if ($stmt->execute()) {
                $stmt->store_result();
                if ($stmt->num_rows == 1) {
                    $stmt->bind_result($id, $username, $hashed_password);
                    if ($stmt->fetch()) {
                        if (password_verify($password, $hashed_password)) {
                            $_SESSION['loggedin'] = true;
                            $_SESSION['id'] = $id;
                            $_SESSION['username'] = $username;

                            header("localtion: dashboard.php");
                        } else {
                            $login_err = "Incalid username of password";
                        }
                    }
                } else {
                    $login_err = "Incalid username of password";
                }
            } else {
                echo "Oops! Something went wrong.Please try again later.";
            }
            $stmt->close();
        }

    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; }
        .wrapper{ width: 360px; padding: 20px; }
    </style>
</head>
<body>
<div class="wrapper">
    <h2>Login</h2>
    <p>Please fill in your credentials to login.</p>

    <?php
    if(!empty($login_err)){
        echo '<div class="alert alert-danger">' . $login_err . '</div>';
    }
    ?>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
            <span class="invalid-feedback"><?php echo $username_err; ?></span>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password;?>">
            <span class="invalid-feedback"><?php echo $password_err; ?></span>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Login">
        </div>
        <p>Don't have an account? <a href="register_demo.php">Sign up now</a>.</p>
    </form>
</div>
</body>
</html>