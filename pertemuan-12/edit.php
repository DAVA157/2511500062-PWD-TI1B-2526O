<?php
session_start();
require 'koneksi.php';
require 'fungsi.php';

/*
Ambil nilai cid dari GET dan lakukan validasi untuk
mengecek cid harus angka dan lebih besar dari 0 (> 0).
'options' => ['min_range' => 1] artinya cid harus ≥ 1
(bukan 0, bahkan bukan negatif, bukan huruf, bukan HTML).
*/
$cid = filter_input(INPUT_GET, 'cid', FILTER_VALIDATE_INT, [
    'options' => ['min_range' => 1]
]);

/*
Skip di atas cara penulisan lamanya adalah:
$cid = $_GET['cid'] ?? '';
$cid = (int)$cid;

Cara lama seperti di atas akan mengambil data mentah
kemudian validasi dilakukan secara terpisah, sehingga
rawan lupa validasi. Untuk input dari GET atau POST,
filter_input() lebih disarankan daripada $_GET atau $_POST.
*/

/*
Cek apakah $cid bernilai valid:
Kalau $cid tidak valid, maka jangan lanjutkan proses,
kembalikan pengguna ke halaman awal (read.php) sembari
mengirim penanda error.
*/
if (!$cid) {
    $_SESSION['flash_error'] = 'Akses tidak valid.';
    redirect_ke('read.php');
}

/*
Ambil data lama dari DB menggunakan prepared statement,
jika ada kesalahan, tampilkan penanda error.
*/
$stmt = mysqli_prepare($conn, "SELECT cid, cnama, cemail, cpesan
                               FROM tbl_tamu WHERE cid = ? LIMIT 1");
if (!$stmt) {
    $_SESSION['flash_error'] = 'Query tidak benar.';
    redirect_ke('read.php');
}

mysqli_stmt_bind_param($stmt, "i", $cid);
mysqli_stmt_execute($stmt);
$res = mysqli_stmt_get_result($stmt);
$row = mysqli_fetch_assoc($res);
mysqli_stmt_close($stmt);

if (!$row) {
    $_SESSION['flash_error'] = 'Record tidak ditemukan.';
    redirect_ke('read.php');
}

// Nilai awal (prefill form)
$nama  = $row['cnama'] ?? '';
$email = $row['cemail'] ?? '';
$pesan = $row['cpesan'] ?? '';

// Ambil error dan nilai old input kalau ada
$flash_error = $_SESSION['flash_error'] ?? '';
$old = $_SESSION['old'] ?? [];

unset($_SESSION['flash_error'], $_SESSION['old']);

if (!empty($old)) {
    $nama  = $old['nama'] ?? $nama;
    $email = $old['email'] ?? $email;
    $pesan = $old['pesan'] ?? $pesan;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Judul Halaman</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1>Ini Header</h1>
    <button class="menu-toggle" id="menuToggle" aria-label="Toggle Navigation">
        &#9776;
    </button>
    <nav>
        <ul>
            <li><a href="#home">Beranda</a></li>
            <li><a href="#about">Tentang</a></li>
            <li><a href="#contact">Kontak</a></li>
        </ul>
    </nav>
</header>

<main>
    <section id="contact">
        <h2>Edit Buku Tamu</h2>

        <?php if (!empty($flash_error)) { ?>
            <div style="padding:10px; margin-bottom:10px;
                        background:#f8d7da; color:#721c24; border-radius:6px;">
                <?= $flash_error; ?>
            </div>
        <?php } ?>
        <form action="update.php" method="post">
            <input type="hidden" name="cid" value="<?= (int)$cid; ?>">

            <p>
                <label for="nama">Nama:</label><br>
                <input type="text" name="nama" id="nama"
                       value="<?= bersihkan($nama); ?>" required>
            </p>

            <p>
                <label for="email">Email:</label><br>
                <input type="email" name="email" id="email"
                       value="<?= bersihkan($email); ?>" required>
            </p>

            <p>
                <label for="pesan">Pesan:</label><br>
                <textarea name="pesan" id="pesan" rows="5"
                          required><?= bersihkan($pesan); ?></textarea>
            </p>

            <p>
                <button type="submit">Update</button>
                <button type="reset">Reset</button>
            </p>
        </form>
    </section>
</main>

<script src="script.js"></script>
</body>
</html>