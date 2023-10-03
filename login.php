<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css2">
    <title>Connexion</title>
</head>
<body>
    <div class="wrapper">
        <form action="loginPost.php" method="POST">
            <h1>Connexion</h1>
            <div class="input-box">
                <input type="email" placeholder="Email" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" required>
                <i class='bx bxs-lock-alt'></i>
            </div>

            <div class="remember-forgot">
                <label><input type="checkbox"> Enregistrer</label>
                <a href="#"> Mot de passe oublié ?</a>
            </div>

            <button type="submit" class="btn">Se connecter</button>

            <div class="register-link">
                <p>Je n'est pas de compte? <a href="#">S'inscrire</a></p>
            </div>
        </form>
    </div>
    
</body>
</html>