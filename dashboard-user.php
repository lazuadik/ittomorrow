<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Dashboard | IT Tomorrow</title>
        <link rel="stylesheet" href="dashboard-user.css">
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    </head>
    <body>
        <header>
            <div class="logo">
                <a href="index.php">IT Tomorrow</a>
            </div>
            <div class="navBar">
                <a class="active" href="home-user.php">Home</a>
                <a href="compe.php">Competitions</a>
                <a href="about.php">About</a>
                <a href="dashboard-user.php" style="padding: 10px 20px; border-radius: 50px; background-color: rgb(179, 179, 222);">Dasboard</a>
                <a href="login.php" style="padding: 10px 20px; border-radius: 50px; background-color: rgb(179, 179, 222);">Login</a>
            </div>
        </header>
        <main>
            <div class="container">
                <div class="card">
                    <img src="WhatsApp Image 2022-08-20 at 11.16.08.jpeg" alt="John" style="max-width: 100px; max-height: 200px; border-radius: 20px;">
                    <h1>Muhammad Rangga Rafif</h1>
                    <p class="title">UX Tomorrow Participant</p>
                    <p>IPB University</p>
                </div>
            </div>
            <div class="container-2">
                <h3>Kumpulkan Karya</h3>
                <form class="linkkarya" action="prosespengumpulan.php" method="POST">
                    <input type="text" placeholder="Masukkan Link karya" name="linkkarya" class="linkkarya">
                    <input type="submit" name="kumpul" value="Submit"></input>
                </form>
            </div>
        </main>
    </body>
</html>
