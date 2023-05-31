<!DOCTYPE html>
<html>
<head>
    <title>Logowanie</title>
    <style>
        body {
            background-color: black;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            background-color: white;
            width: 300px;
            padding: 20px;
            border-radius: 5px;
        }

        .login-container h2 {
            text-align: center;
        }

        .login-container label,
        .login-container input[type="text"],
        .login-container input[type="password"],
        .login-container input[type="submit"] {
            display: block;
            width: 100%;
            margin-bottom: 10px;
        }

        .login-container input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
        }
    </style>
</head>
<body>
<div class="login-container">
    <h2>Logowanie</h2>
    <form action="login.php" method="POST"> <!--// po wypełnieniu formularza i kliknięciu przyciusku dane są wysyłane do pliku login.php-->
        <label for="username">Nazwa użytkownika:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Hasło:</label>
        <input type="password" id="password" name="password" required>

        <input type="submit" value="Zaloguj">
    </form>
</div>
</body>
</html>
