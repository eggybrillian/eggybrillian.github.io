<?php
session_start();

// Verifikasi role pengguna
if (!isset($_SESSION['role']) || $_SESSION['role'] != 'admin') {
    echo "
    <script>
        alert('Silahkan login terlebih dahulu');
        window.location.href = 'login.php';
    </script>";
    session_destroy();
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../file_css/admin.css">
        <title>Admin Page</title>
        <script>
            function hitungGaji() {
                var nama = document.getElementById('nama').value;
                var gaji = parseInt(document.getElementById('gaji').value);
                var kontrak = parseInt(document.getElementById('kontrak').value);
                var totalGaji = gaji * kontrak;
                document.getElementById('totalGaji').textContent = 'Total Gaji ' + nama + ' Hingga Kontrak Habis : Rp ' + totalGaji;
            }
        </script>
    </head>
    <body>
        <nav>
            <a href="admin.php">ADMIN PAGE</a>
            <a href="player_data.php">PLAYER DATA</a>
            <a href="match.php">MATCH</a>
            <a href="logout.php">LOGOUT</a>
        </nav>

        <h1>STAFF DATA</h1>
        <section>
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Jenis Kelamin</th>
                        <th>Usia</th>
                        <th>Pekerjaan</th>
                        <th>Gaji Perbulan</th>
                        <th>Kontrak</th>
                    </tr>
                </thead>
                <tbody id="data-body">
                    <tr>
                        <td>1</td>
                        <td>Ole</td>
                        <td>ole123@gmail.com</td>
                        <td>Laki-laki</td>
                        <td>46 Tahun</td>
                        <td>Head Coach</td>
                        <td>Rp 100000000</td>
                        <td>56 Bulan</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Eggy</td>
                        <td>eggybrillian@gmail.com</td>
                        <td>Laki-laki</td>
                        <td>20 Tahun</td>
                        <td>Assisten Coach</td>
                        <td>Rp 50000000</td>
                        <td>48 Bulan</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Putra</td>
                        <td>Putra@gmail.com</td>
                        <td>Laki-laki</td>
                        <td>22 Tahun</td>
                        <td>Ball Boy</td>
                        <td>Rp 2000000</td>
                        <td>12 Bulan</td>
                    </tr>
                </tbody>
            </table>
        </section>
        
        <h2>HITUNG GAJI STAFF</h2>
        <div class="hitung">
            <form id="adminForm">
                <label>Nama:</label>
                <input type="text" id="nama" required><br>
                <label>Gaji per Bulan:</label>
                <input type="number" id="gaji" required><br>
                <label>Lama Kontrak (Bulan):</label>
                <input type="number" id="kontrak" required><br><br>
                <input type="button" value="Hitung" onclick="hitungGaji()">
            </form>
            <p id="totalGaji"></p>
        </div>

        <footer>
                <p>&copy; 2023 Emyu. All Rights Reserved <br>
                Eggy Brillian</p>
        </footer>
    </body>
</html>