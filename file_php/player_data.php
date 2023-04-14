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
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../file_css/staff.css">
        <title>Player Page</title>
    </head>
    <body>
        <div class="judul">
            <nav>
                <a href="admin.php">ADMIN PAGE</a>
                <a href="player_data.php">PLAYER DATA</a>
                <a href="match.php">MATCH</a>
                <a href="logout.php">LOGOUT</a>
            </nav>
        </div>
        <br>
        <h1>PLAYER OF MANCHESTER UNITED</h1>
	<section>
		<table>
			<thead>
				<tr>
                    <th>No Punggung</th>
					<th>Nama</th>
					<th>Usia</th>
					<th>Posisi</th>
					<th>Negara</th>
                    <th>Gaji Perbulan</th>
					<th>Kontrak</th>
				</tr>
			</thead>
			<tbody id="data-body">
				<tr>
                    <td>1</td>
                    <td>David De Gea</td>
                    <td>30 Tahun</td>
					<td>Goalkeeper</td>
					<td>Spanyol</td>
                    <td>Rp 200000000</td>
                    <td>23 Juni 2026</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Harry Maguire</td>
                    <td>29 Tahun</td>
					<td>Defender</td>
					<td>Inggris</td>
                    <td>Rp 80000000</td>
                    <td>26 Juni 2025</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Phil Jones</td>
                    <td>34 Tahun</td>
					<td>Defender</td>
					<td>Inggris</td>
                    <td>Rp 30000000</td>
                    <td>10 Juni 2024</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Luke Shaw</td>
                    <td>32 Tahun</td>
					<td>Defender</td>
					<td>Inggris</td>
                    <td>Rp 40000000</td>
                    <td>06 juli 2024</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Lisandro Martinez</td>
                    <td>23 Tahun</td>
					<td>Defender</td>
					<td>Argentina</td>
                    <td>Rp 100000000</td>
                    <td>30 Juli 2027</td>
                </tr>
                <tr>
                    <td>18</td>
                    <td>Casemiro</td>
                    <td>35 Tahun</td>
					<td>Midfielder</td>
					<td>Brazil</td>
                    <td>Rp 100000000</td>
                    <td>26 Juni 2024</td>
                </tr>
                <tr>
                    <td>17</td>
                    <td>Fred</td>
                    <td>29 Tahun</td>
					<td>Midfielder</td>
					<td>Brazil</td>
                    <td>Rp 90000000</td>
                    <td>16 Mei 2025</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Bruno Fernandes</td>
                    <td>28 Tahun</td>
					<td>Midfielder</td>
					<td>Portugal</td>
                    <td>Rp 400000000</td>
                    <td>08 Juni 2026</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Marcus Rashford</td>
                    <td>27 Tahun</td>
					<td>Forward</td>
					<td>Inggris</td>
                    <td>Rp 150000000</td>
                    <td>01 Juli 2026</td>
                </tr>
                <tr>
                    <td>21</td>
                    <td>Anthony</td>
                    <td>27 Tahun</td>
					<td>Forward</td>
					<td>Brazil</td>
                    <td>Rp 95000000</td>
                    <td>30 Juni 2026</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Anthony Martial</td>
                    <td>31 Tahun</td>
					<td>Forward</td>
					<td>Prancis</td>
                    <td>Rp 87000000</td>
                    <td>19 Agustus 2023</td>
                </tr>
			</tbody>
		</table>
	</section>

        <footer>
            <p>&copy; 2023 Emyu. All Rights Reserved 
                <br>
            Eggy Brillian</p>
        </footer>
    </body>
</html>