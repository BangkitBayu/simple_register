<?php
include "db/db_connect.php";
if (isset($_POST['register'])) {

    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO tb_users (email,username,password) VALUES ('$email','$username','$password')";

    $db->query($sql);

    if (empty($email)) {
        $email_error = "Please enter the email!";
    } else if (!preg_match("/[a-zA-Z]*$/" , $email)) {
        $email_error = "Please enter correct an email!";
    }

    if (empty($username)) {
        $username_error = "Please enter the username!";
    }

    if (empty($password)) {
        $password_error = "Please enter the password!";
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="node_modules/boxicons/css/boxicons.min.css">
    <title>Sign Up</title>
</head>

<body>
    <main>
        <section class="form-container">
            <h1>Sign Up</h1>
            <form action="signup.php" method="post">
                <div class="form-element">
                    <label for="email">
                        <i class="bx bxs-envelope"></i>
                    </label>
                    <input type="email" id="email" placeholder="Enter email here" name="email">
                    <br>
                    <span>
                        <?php if (!empty($email_error)) {
                            echo $email_error;
                        }
                        ?>
                    </span>
                </div> <br> <br>

                <div class="form-element">
                    <label for="username">
                        <i class="bx bx-user"></i>
                    </label>
                    <input type="text" id="username" placeholder="Enter username here" name="username">
                    <br>
                    <span>
                        <?php if (!empty($username_error)) {
                            echo $username_error;
                        }
                        ?>
                    </span>
                </div> <br> <br>

                <div class="form-element">
                    <label for="password">
                        <i class="bx bx-show"></i>
                    </label>
                    <input type="password" id="password" placeholder="Enter password here" name="password">
                    <br>
                    <span>
                        <?php if (!empty($password_error)) {
                            echo $password_error;
                        }
                        ?>
                    </span>
                </div> <br> <br>

                <div class="form-element">
                    <button type="submit" name="register" id="submitButton">Sign Up</button>
                    <br>
                    <p>Already have an account? <a href="signin.php">Sign In</a></p>
                </div>
            </form>

        </section>
    </main>
    <script src="script/validate.js"></script>
</body>

</html>