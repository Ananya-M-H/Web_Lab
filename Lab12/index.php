<!DOCTYPE html>
<html>
<head>
    <title>Login</title>

    <style>
        body {
            font-family: sans-serif;
            background: #eee;
            text-align: center;
        }

        form {
            background: #fff;
            margin: 0 8rem;
            border: 1px solid;
            padding: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            font-size: 1.2rem;
            margin-top: 20px;
        }

        input {
            display: block;
            margin: 0 auto;
            padding: 5px;
        }

        button {
            margin: 10px auto;
            display: block;
            padding: 1rem;
        }
    </style>
</head>

<body>

    <h1>Login</h1>

    <form method="POST">
        <label>Username:</label>
        <input type="text" name="username" required>

        <label>Password:</label>
        <input type="password" name="password" required>

        <button type="submit">Login</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $uname = trim($_POST["username"]);
        $pass  = trim($_POST["password"]);

        $file = fopen("loginDetails.txt", "r");

        if ($file) {
            $content = trim(fgets($file));
            fclose($file);

            if ($content === $uname . ":" . $pass) {
                echo "<script>alert('Access granted!');</script>";
            } else {
                echo "<script>alert('Incorrect username or password');</script>";
            }
        } else {
            echo "<script>alert('Error opening file');</script>";
        }
    }
    ?>

</body>
</html>
