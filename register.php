<?php
include "db/db_connect.php";
if (isset($_POST['register'])) {

    $email =$_POST['email'] ;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sanitizeEmail = filter_var($email , FILTER_SANITIZE_EMAIL); //untuk menyaring karakter tertentu yang tidak valid dalam email


    $sql = "INSERT INTO tb_users (email,username,password) VALUES ('$email','$username','$password')";

    if (empty($email) &&  empty($username) &&  empty($password)) { //untuk validasi bahwa data tidak boleh kosong
        echo "Data invalid";
    } else if(strlen($username) < 5 && strlen($password) < 5 && !filter_var($sanitizeEmail , FILTER_VALIDATE_EMAIL)) {
        echo "Data invalid";
    } else {
        $db->query($sql);
    }

    //filter_validate_email : //untuk memvalidasi apakah email sudah sesuai format 

};

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
            <form action="register.php" method="post">
                <div class="form-element">
                    <label for="email">
                        <i class="bx bxs-envelope"></i>
                    </label>
                    <input type="email" id="email" placeholder="Enter email here" name="email">
                    <br>
                    <span>
                    <?php if (empty($email)) {
                        echo "Please enter the email";
                    } else if (!filter_var($sanitizeEmail , FILTER_VALIDATE_EMAIL)) {
                        echo "Please enter valid email";
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
                        <?php if (empty($username)) {
                            echo "Please enter the username";
                        } else if(strlen($username) < 5) {
                            echo "username have 5 character minimum";
                        }
                        ?>
                    </span>
                </div> <br> <br>

                <div class="form-element">
                    <label for="password">
                        <i class="bx bxs-key "></i>
                    </label>
                    <input type="password" id="password" placeholder="Enter password here" name="password">
                    <span>
                        <?php if (empty($password)) {
                            echo "Please enter the password";
                        } else if(strlen($password) < 5) {
                            echo "Password have 5 character minimum";
                        }
                        ?>
                    </span>

                </div> <br> <br>

                <section class="form-element">
                    <input type="checkbox" name="showPassword" id="showPassword">
                    <p>show password</p>
                </section>

                <div class="form-element">
                    <button type="submit" name="register" id="submitButton">Sign Up</button>
                    <p>Already have an account? <a href="signin.php">Sign In</a></p>
                </div>
            </form>

        </section>
    </main>
    <script src="script/main.js"></script>
</body>

</html>