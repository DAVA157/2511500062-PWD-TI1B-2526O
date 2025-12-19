<?php
require 'koneksi.php';

$sql = "SELECT * FROM tbl_tamu ORDER BY cid DESC";
$q = mysqli_query($conn, $sql);
$no = 1;

?>

<table border="1" cellpadding="8" cellspacing="0">

    <tr>
        <th>No</th>
        <th>ID</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Pesan</th>
        <th>Created At</th>
    </tr>

    <?php while ($row = mysqli_fetch_assoc($q)): ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $row['cid']; ?></td>
            <td><?= $row['cnama']; ?></td>
            <td><?= $row['cemail']; ?></td>
            <td><?= $row['cpesan']; ?></td>
            <td><?= $row['dcreated_at']; ?></td>
        </tr>

    <?php endwhile; ?>
</table>