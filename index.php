<!doctype <!DOCTYPE html>
<html lang="se">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Portalen till den hemligaste sidan </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <style>
        main {
            width: 80%;
            margin: 0px auto;
        }
        body {

        }
        h1 {

        }
     </style>
</head>
<body>
<main>
</main>
    <h1>Välkommen</h1>
    <form action="login.php" method="POST">
        <fieldset>
            <legend>Logga in</legend>
            <p>
                <label for="username">Användarnamn: </label>
                <input type="text" name="username" id="username">
    </p>
    <p>
    <label for="password">Lösenord: </label>
    <input type="password" name="password" id="password">
    </p>
    <p>
    <input type="submit" name="submit" id="submit" value="Logga in">
    </p>
    </fieldset>
</body>
</html>