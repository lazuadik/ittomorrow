<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <title>Register | IT Tomorrow</title>
</head>
<body>
    <div class="container">
        <form action="prosesregister.php" method="POST">
            <div class="register">
                <h2>Register Page</h2>
                <input type="text" placeholder="Username" name="namapeserta">
                <br>
                <input type="password" placeholder="Password" name="passwordpeserta">
                <br>
                <input type="email" placeholder="Email" name="emailpeserta">
                <br>
                <input type="text" placeholder="Asal Institusi" name="institusipeserta">
                <br>
                <input type="text" placeholder="NIM/NRP" name="nimpeserta">
                <div class="pilihLomba">
                    <h3>Pilih Lomba</h3>
                    <select name="namalomba">
                        <option value="Coding">Coding Tomorrow</option>
                        <option value="UI">UI Tomorrow</option>
                        <option value="Poster">Poster Tomorrow</option>
                    </select>
                </div>
                <br>
                <br>
                <button type="submit" name="register"><strong>Register Here</strong></button>
            </div>
        </form>
    </div>
</body>
</html>
