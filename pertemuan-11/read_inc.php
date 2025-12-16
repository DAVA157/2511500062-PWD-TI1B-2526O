<?php
require 'koneksi.php';


$fieldContact = [
    "nama"  => ["label" => "Nama:",  "suffix" => ""],
    "email" => ["label" => "Email:", "suffix" => ""],
    "pesan" => ["label" => "Pesan Anda:", "suffix" => ""]
];


$sql = "SELECT * FROM tbl_tamu ORDER BY cid DESC";
$q   = mysqli_query($conn, $sql);


if (!$q) {
    echo "<p style='color:red;'>Gagal membaca data tamu: " . 
         htmlspecialchars(mysqli_error($conn)) . "</p>";
    return;
}


if (mysqli_num_rows($q) == 0) {
    echo "<p>Belum ada data tamu yang tersimpan.</p>";
    return;
}


while ($row = mysqli_fetch_assoc($q)) {


    $arrContact = [
        "nama"  => $row["cnama"]  ?? $row["nama"]  ?? "",
        "email" => $row["cemail"] ?? $row["email"] ?? "",
        "pesan" => $row["cpesan"] ?? $row["pesan"] ?? ""
    ];

    echo tampilkanBiodata($fieldContact, $arrContact);
}
