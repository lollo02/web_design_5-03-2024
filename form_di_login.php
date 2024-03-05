<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log-in</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div>
        <form action="" method="post">

            <h1>Log-in</h1>

            <label for="email">Email</label><br>
            <input type="email" name="email" placeholder="inserisci la tua email" required>

            <label for="pass">Password</label><br>
            <input type="password" name="pass" placeholder="inserisci la tua password" maxlength="24" minlength="6"
                required><br>
            <input type="submit" name="submit" id="submit_button" value="Invia">
            <br><br>
            
            <a href="./recupero_password.php">Password dimenticata?</a><br><br>
            <a href="./form_di_registrazione.php">Account non ancora registrato?</a><br>

        </form>
    </div>
</body>

</html>