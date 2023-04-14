<?php
session_start();

// Verifikasi role pengguna
if (!isset($_SESSION['role']) || $_SESSION['role'] != 'staff') {
    echo "
    <script>
        alert('Silahkan login terlebih dahulu');
        window.location.href = 'login.php';
    </script>";
    session_destroy();
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../file_css/player.css">
        <title>Player Page</title>
    </head>
    <body>
        <div class="judul">
            <nav>
                <a href="staff.php">PLAYER DATA</a>
                <a href="match2.php">MATCH</a>
                <a href="logout.php">LOGOUT</a>
            </nav>
        </div>
        <br>
        <h1>JADWAL PERTANDINGAN</h1>
        <table>
            <tr>
                <th>No</th>
                <th>Tanggal Pertandingan</th>
                <th>Pukul</th>
                <th>Lawan</th>
                <th>Home/Away</th>
            </tr>
            <tr>
                <td>1</td>
                <td>24 Mei 2023</td>
                <Td>03.00 WIB</Td>
                <td>Real Madrid</td>
                <td>Home</td>
            </tr>
            <tr>
                <td>2</td>
                <td>29 Mei 2023</td>
                <td>21.30 WIB</td>
                <td>Manchester City</td>
                <td>Away</td>
            </tr>
            <tr>
                <td>3</td>
                <td>5 Juni 2023</td>
                <td>03.00 WIB</td>
                <td>Bayern Munich</td>
                <td>Away</td>
            </tr>
            <tr>
                <td>4</td>
                <td>12 Juni 2023</td>
                <td>18.00 WIB</td>
                <td>Arsenal</td>
                <td>Home</td>
            </tr>
            <tr>
                <td>5</td>
                <td>20 Juni 2023</td>
                <td>00.00 WIB</td>
                <td>Chealsea</td>
                <td>Home</td>
            </tr>
            <tr>
                <td>6</td>
                <td>28 Juni 2023</td>
                <td>03.00 WIB</td>
                <td>Barcelona</td>
                <td>Away</td>
            </tr>
        </table>

        <footer>
            <p>&copy; 2023 Emyu. All Rights Reserved 
                <br>
            Eggy Brillian</p>
        </footer>
    </body>
</html>