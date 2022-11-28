<?php
    include("config.php");
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Dashboard | IT Tomorrow</title>
    <link rel="stylesheet" href="dashboard-admin.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>

<body>
    <div class="header">
        <a href="home-admin.php"><img src="logo-ittomorrow.png" style="width: 100px; height: 100px;"></a>
        <div class="navBar">
            <h3><a href="home-admin.php" style="color: aliceblue;">Home</a></h3>
            <h3><a href="login-admin.php" style="color: aliceblue;">Log out</a></h3>
        </div>
    </div>
    <script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>
    <!-- Page content -->
    <div class="main">
        <div class="container-1">
            <h3>Dashboard Kompetisi</h3>
            <table class="styled-table">
                <thead>
                    <tr>
                        <th>Kategori Kompetisi</th>
                        <th>Peserta</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> Coding Tomorrow </td>
                        <?php
                            $query = pg_query("SELECT * FROM peserta where namalomba = 'CodingTomorrow'");
                            $banyak = pg_num_rows($query);
                            echo "<td>".$banyak."</td>"
                        ?>
                    </tr>
                    <tr class="active-row">
                        <td>UI Tomorrow</td>
                        <?php
                            $query = pg_query("SELECT * FROM peserta where namalomba = 'UITomorrow'");
                            $banyak2 = pg_num_rows($query);
                            echo "<td>".$banyak2."</td>"
                        ?>
                    </tr>
                    <tr>
                        <td>Poster Tomorrow</td>
                        <?php
                            $query = pg_query("SELECT * FROM peserta where namalomba = 'PosterTomorrow'");
                            $banyak3 = pg_num_rows($query);
                            echo "<td>".$banyak3."</td>"
                        ?>
                    </tr>
                    <!-- and so on... -->
                </tbody>
            </table>
        </div>
        <br>
        <br>
        <div class="dashboard-coding">
            <h3>Coding Tomorrow</h3>
            <table class="table-coding" style="width: 1200px; max-width: 1200px;">
                <thead>
                    <tr>
                        <th>Nomor</th>
                        <th>Nama Peserta</th>
                        <th>NIM</th>
                        <th>Institusi Peserta</th>
                        <th>Email Peserta</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <?php
                        $query = pg_query("SELECT * FROM peserta where namalomba = 'CodingTomorrow'");
                        $noUrut = 1;
                        // $query = mysqli_query($db, $sql);


                        while($siswa = pg_fetch_array($query)){
                            echo "<tr>";

                            echo "<td>".$noUrut."</td>";
                            echo "<td>".$siswa['namapeserta']."</td>";
                            echo "<td>".$siswa['nimpeserta']."</td>";
                            echo "<td>".$siswa['institusipeserta']."</td>";
                            echo "<td>".$siswa['emailpeserta']."</td>";
                            
                            echo "<td>";
                            echo "<a href='detail-peserta-coding.php?id=".$siswa['nimpeserta']."'><button>Detail</button</a>"; 
                            echo "<a href='hapus.php?nimpeserta=".$siswa['nimpeserta']."'><button>Diskualifikasi</button</a>";
                            echo "</td>";

                            echo "</tr>";
                            $noUrut++;
                            }


                        ?> 
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="dashboard-ui">
            <h3>UI Tomorrow</h3>
            <table class="table-ui" style="width: 1200px; max-width: 1200px;">
                <thead>
                    <tr>
                        <th>Nomor</th>
                        <th>Nama Peserta</th>
                        <th>NIM</th>
                        <th>Institusi Peserta</th>
                        <th>Email Peserta</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <?php
                        $query = pg_query("SELECT * FROM peserta where namalomba = 'UITomorrow'");
                        $noUrut = 1;
                        // $query = mysqli_query($db, $sql);


                        while($siswa = pg_fetch_array($query)){
                            echo "<tr>";

                            echo "<td>".$noUrut."</td>";
                            echo "<td>".$siswa['namapeserta']."</td>";
                            echo "<td>".$siswa['nimpeserta']."</td>";
                            echo "<td>".$siswa['institusipeserta']."</td>";
                            echo "<td>".$siswa['emailpeserta']."</td>";
                            
                            echo "<td>";
                            echo "<a href='detail-peserta-ui.php?id=".$siswa['nimpeserta']."'><button>Detail</button</a>";
                            echo "<a href='hapus.php?nimpeserta=".$siswa['nimpeserta']."'><button>Diskualifikasi</button</a>";
                            echo "</td>";

                            echo "</tr>";
                            $noUrut++;

                            }


                        ?>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="dashboard-poster">
            <h3>Poster Tomorrow</h3>
            <table class="table-poster" style="width: 1200px; max-width: 1200px;">
                <thead>
                    <tr>
                        <th>Nomor</th>
                        <th>Nama Peserta</th>
                        <th>NIM</th>
                        <th>Institusi Peserta</th>
                        <th>Email Peserta</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <?php
                        $query = pg_query("SELECT * FROM peserta where namalomba = 'PosterTomorrow'");
                        $noUrut = 1;
                        // $query = mysqli_query($db, $sql);


                        while($siswa = pg_fetch_array($query)){
                            echo "<tr>";

                            echo "<td>".$noUrut."</td>";
                            echo "<td>".$siswa['namapeserta']."</td>";
                            echo "<td>".$siswa['nimpeserta']."</td>";
                            echo "<td>".$siswa['institusipeserta']."</td>";
                            echo "<td>".$siswa['emailpeserta']."</td>";
                            
                            echo "<td>";
                            echo "<a href='detail-peserta-poster.php?id=".$siswa['nimpeserta']."'><button>Detail</button</a>";
                            echo "<a href='hapus.php?nimpeserta=".$siswa['nimpeserta']."'><button>Diskualifikasi</button</a>";
                            echo "</td>";

                            echo "</tr>";
                            $noUrut++;
                            
                            }


                        ?>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="footer">
        <p>© Copyright <strong>IT Tomorrow 2022</strong> (Projek Basis Data)</p>
    </div>

</body>

</html>