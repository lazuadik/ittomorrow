<?php
  session_start();
  include("config.php");
  session_start();
    include("config.php");
    if(!isset($_SESSION["login-admin"])){
    header("Location: login-admin.php");
    exit;
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>IT Tomorrow</title>
        <link rel="stylesheet" href="compe.css">
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    </head>
    <body>
        <header>
            <div class="logo">
                <a href="index.html">IT Tomorrow</a>
            </div>
            <div class="navBar">
                <a class="active" href="home-admin.php">Home</a>
                <a href="compe-admin.php">Competitions</a>
                <a href="about-admin.php">About</a>
                <a href="dashboard-admin.php" style="padding: 10px 20px; border-radius: 50px; background-color: rgb(179, 179, 222);">Dashboard</a>
                <a href="login-admin.php" style="padding: 10px 20px; border-radius: 50px; background-color: rgb(179, 179, 222);">Login</a>
            </div>
        </header>
        <main>
            <div class="container">
                <div class="ux">
                    <h2>UX Tomorrow</h2>
                    <p>UX Tomorrow adalah kompetisi desain pengalaman pengguna yang mengutamakan<br>
                        kenyamanan, kepuasan, dan efisiensi. UX Today dapat diikuti oleh seluruh mahasiswa<br>
                        perguruan tinggi di Indonesia. Setiap tim wajib terdiri dari 1-3 orang yang berasal dari <br>
                        universitas/institut yang sama.</p>
                    <h3>Biaya Pendaftaran</h3>
                    <p style="color:white;background-color: rgb(154, 154, 242); max-width: 95px; border-radius: 15px; padding: 10px 10px;"><span>Rp90.000</span></p>
                    <h3>Timeline</h3>
                    <table>
                        <tr>
                            <td style="margin: 5px;">Pendaftaran</td>
                            <td style="padding: 0px 10px 0px 10px;">1 Oktober - 2 November</td>
                          </tr>
                          <tr>
                            <td style="padding: 0px 10px 0px 0px;">Technical Meeting</td>
                            <td style="padding: 0px 10px 0px 10px;">12 Oktober</td>
                          </tr>
                          <tr>
                            <td style="padding: 0px 10px 0px 0px;">Pengumpulan Karya</td>
                            <td style="padding: 0px 10px 0px 10px;">1 Oktober - 3 November</td>
                          </tr>
                          <tr>
                            <td style="padding: 0px 10px 0px 0px;">Pengumumam Finalis</td>
                            <td style="padding: 0px 10px 0px 10px;">15 November</td>
                          </tr>
                          <tr>
                            <td style="padding: 0px 10px 0px 0px;">Final</td>
                            <td style="padding: 0px 10px 0px 10px;">18 November</td>
                          </tr>
                          <tr>
                            <td style="padding: 0px 10px 0px 0px;">Pengumuman Juara</td>
                            <td style="padding: 0px 10px 0px 10px;">20 November</td>
                          </tr>
                    </table>
                </div>
                <br>
                <div class="hack">
                    <h2 style="color: blue;">Hack Tomorrow</h2>
                    <p>Hack Today adalah kompetisi keamanan siber dengan mekanisme Capture The Flag<br>
                        (Jeopardy style) yang setiap tim diminta untuk menyelesaikan beberapa kasus dari<br>
                        berbagai kategori dengan tujuan mendapatkan sebuah flag untuk tiap kasusnya. Hack <br>
                        Today dapat diikuti oleh siswa SLTA/sederajat atau mahasiswa perguruan tinggi di<br>
                        seluruh Indonesia. Setiap tim wajib terdiri dari 1-3 orang yang berasal dari lembaga<br>
                        atau institusi yang sama.</p>
                    <h3>Biaya Pendaftaran</h3>
                    <p style="color:white;background-color: rgb(154, 154, 242); max-width: 95px; border-radius: 15px; padding: 10px 10px;"><span>Rp75.000</span></p>
                    <h3>Timeline</h3>
                    <table>
                        <tr>
                            <td style="margin: 5px;">Pendaftaran</td>
                            <td style="padding: 0px 10px 0px 10px;">1 Oktober - 2 November</td>
                          </tr>
                          <tr>
                            <td style="padding: 0px 10px 0px 0px;">Technical Meeting</td>
                            <td style="padding: 0px 10px 0px 10px;">12 Oktober</td>
                          </tr>
                          <tr>
                            <td style="padding: 0px 10px 0px 0px;">Warm up</td>
                            <td style="padding: 0px 10px 0px 10px;">3 November</td>
                          </tr>
                          <tr>
                            <td style="padding: 0px 10px 0px 0px;">Penyisihan</td>
                            <td style="padding: 0px 10px 0px 10px;">4 November</td>
                          </tr>
                          <tr>
                            <td style="padding: 0px 10px 0px 0px;">Final</td>
                            <td style="padding: 0px 10px 0px 10px;">7 November</td>
                          </tr>
                          <tr>
                            <td style="padding: 0px 10px 0px 0px;">Pengumuman Juara</td>
                            <td style="padding: 0px 10px 0px 10px;">20 November</td>
                          </tr>
                    </table>
                </div>
                <br>
                <div class="poster">
                    <h2 style="color: blue;">Poster Tomorrow</h2>
                    <p>Poster Competition adalah kompetisi desain poster yang mengutamakan isi, visual,<br>
                        dan orisinalitas karya. Poster Competition dapat diikuti oleh masyarakat umum di<br>
                        seluruh Indonesia. Poster Competition mewadahi masyarakat yang memiliki ide dan<br>
                        krativitas untuk menyampaikannya melalui media poster.</p>
                    <h3>Biaya Pendaftaran</h3>
                    <p style="color:white;background-color: rgb(154, 154, 242); max-width: 95px; border-radius: 15px; padding: 10px 22px;"><span>Gratis</span></p>
                    <h3>Timeline</h3>
                    <table>
                        <tr>
                            <td style="margin: 5px;">Pendaftaran</td>
                            <td style="padding: 0px 10px 0px 10px;">1 Oktober - 2 November</td>
                          </tr>
                          <tr>
                            <td style="padding: 0px 10px 0px 0px;">Pengumpulan Karya</td>
                            <td style="padding: 0px 10px 0px 10px;">1 Oktober - 3 November</td>
                          </tr>
                          <tr>
                            <td style="padding: 0px 10px 0px 0px;">Pengumuman Juara</td>
                            <td style="padding: 0px 10px 0px 10px;">20 November</td>
                          </tr>
                    </table>
                </div>
            </div>
            <br><br>
            <div class="footer">
                <p>© Copyright <strong>IT Tomorrow 2022</strong> (Projek Basis Data)</p>
            </div>
        </main>
    </body>
</html>