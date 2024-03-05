<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrazione</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div>
        <form id="form" action="" method="post">
            <h1>Registrazione</h1>

            <label for="firstname">Nome</label>
            <input type="text" name="firstname" id="firstname" placeholder="inserisci il tuo nome" maxlength="50"
                required>

            <label for="lastname">Cognome</label>
            <input type="text" name="lastname" id="lastname" placeholder="inserisci il tuo cognome" maxlength="50"
                required>

            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="inserisci la tua email" maxlength="100" required>
            <label for="email" id="emailEsistente">Questa mail è gia in uso</label>

            <label for="email">Nome utente*</label>
            <input type="email" name="username" id="username" placeholder="inserisci il tuo nome utente" maxlength="100">

            <label for="email">Telefono*</label>
            <input type="email" name="phone" id="phone" placeholder="inserisci il tuo numero di telefono" maxlength="100" required>

            <label for="pass">Password</label>
            <input type="password" name="pass" id="pass" placeholder="inserisci la password" maxlength="24"
                minlength="6" required>
            <p>Non inserire la stessa password della tua mail.</p>

            <label for="confirm">Ripeti password</label>
            <input type="password" name="confirm" id="confirm" placeholder="ripeti la password" maxlength="24"
                minlength="6" required>
            <input type="submit" name="submit" id="submit_button" value="Invia"><br>

            <a href="./form_di_login.php">Hai già un account?</a>
        </form>
    </div>
    <script src="./registration.js"></script>
</body>

</html>