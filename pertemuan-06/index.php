<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Judul halaman halo</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>INI HEADER</h1>
        <button class="menu-toggle" id="menuToggle" aria-label="toggle navigasi">
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
        <section id="home">
            <h2>Selamat Datang</h2>
            <p>ini contoh paragraf HTML.</p>
        </section>
        <section id="about">
            <?php
            $nama = "DAVA PRATAMA" &#128526";
            $nim = "2511500062";
            $tempat_lahir = "TANJUNG LABU";
            $tanggal_lahir = "15 APRIL 2007";
            $hobi = "Memancinng";
            $pasangan = "-";
            $pekerjaan = "MAHASISWA";
            $orang_tua = "-";
            $kakak = "-";
            $adik = "HUMEIRAG";
            ?>
            <h2>Tentang kami</h2>
            <P>
                <strong>NAMA :</strong>
                <?php
                echo "$nama";
                ?>
            </P>


            <p>
               <strong>NIM :</strong>
               <?php
               echo "$nim"
              ?> 
            </p>


            <p> <strong>Tempat lahir:</strong>
               <?php
               echo"$tempat_lahir"
               ?> 
            </p>   


             <p> <strong>tanggal_lahir:</strong>
               <?php
               echo"$tanggal_lahir"
               ?> 
            </p>   


              <p> <strong>Hobi:</strong>
               <?php
               echo"$hobi"
               ?> 
            </p>   


              <p> <strong>Pasangan:</strong>
               <?php
               echo"$pasangan"
               ?> 
            </p>   


              <p> <strong>pekerjaan:</strong>
               <?php
               echo"$pekerjaan"
               ?> 
            </p>   


              <p> <strong>orang tua:</strong>
               <?php
               echo"$orang_tua"
               ?> 
            </p>   


              <p> <strong>kakak:</strong>
               <?php
               echo"$kakak"
               ?> 
            </p>   


              <p> <strong>adikk:</strong>
               <?php
               echo"$adik"
               ?> 
            </p>   
         </section>

        <section id="ipk">
            <h2>Nilai Saya</h2>
            <!-- MATKUL 1 -->
            <p><strong>NAMA MATA KULIAH 1 :</strong>
            <?php
            $NamaMatkul1 = "PEMOGRAMAN WEB";
            echo $NamaMatkul1;
            ?>
            </p>

            <p><strong>SKS :</strong>
            <?php
            $sksmatkul1 = "8";
            echo $sksmatkul1;
            ?>
            </p>
            
            <p><strong>KEHADIRAN :</strong>
            <?php
            $nilaihadir1 = "100";
            echo $nilaihadir1
            ?>
            </p>

            <p><strong>TUGAS :</strong>
            <?php
            $nilaitugas1 = "100";
            echo $nilaitugas1
            ?>
            </p>

            <p><strong>UTS :</strong>
            <?php
            $nilaiuts1 = "100";
            echo $nilaiuts1
            ?>
            </p>

            <p><strong>UAS :</strong>
            <?php
            $nilaiUAS1 = "100";
            echo $nilaiUAS1
            ?>
            </p>

            <p><strong>NILAI AKHIR :</strong>
            <?php
            $nilaiakhir1 = (0.1 * $nilaihadir1) + (0.2 * $nilaitugas1) + (0.3 * $nilaiuts1) + (0.4 * $nilaiUAS1);
            echo $nilaiakhir1;
            ?>
           </p>


            <p><strong>GRADE :</strong>
            <?php
            if ($nilaihadir1 < 70) {
                $grade1 = "E";
            } elseif ($nilaiakhir1 >= 91) {
                $grade1 ="A";
            } elseif ($nilaiakhir1 >= 81) {
                $grade1 = "A-";
            } elseif ($nilaiakhir1 >= 76) {
                $grade1 = "B+";
            } elseif ($nilaiakhir1 >= 71) {
                $grade1 = "B";
            } elseif ($nilaiakhir1 >= 66) {
                $grade1 = "B-";
            } elseif ($nilaiakhir1 >= 61) {
                $grade1= "C+";
            } elseif ($nilaiakhir1 >= 56) {
                $grade1 = "C";
            } elseif ($nilaiakhir1 >= 51) {
                $grade1 = "C-";
            } elseif ($nilaiakhir1 >= 36) {
                $grade1 = "D";
            }else {
                $grade1 = "E";
            }
             echo $grade1;
             ?>
            </p>

            <p><strong>ANGKA MUTU</strong>
            <?php
            if ($nilaihadir1 < 70) {
                $mutu1 = "0.00";
            } elseif ($nilaiakhir1 >= 91) {
                $mutu1 = "4.00";
            } elseif ($nilaiakhir1 >= 81) {
                $mutu1 = "3.70";
            } elseif ($nilaiakhir1 >= 76) {
                $mutu1 = "3.30";
            } elseif ($nilaiakhir1 >= 71) {
                $mutu1 = "3.00";
            } elseif ($nilaiakhir1 >= 66) {
                $mutu1 = "2.70";
            } elseif ($nilaiakhir1 >= 61) {
                $mutu1 = "2.30";
            } elseif ($nilaiakhir1 >= 56) {
                $mutu1 = "1.70";
            } elseif ($nilaiakhir1 >= 51) {
                $mutu1 = "1.00";
            } else {
                $mutu1 = "0.00";
            }
            echo $mutu1;
            ?>
            </p>
            <p><strong>BOBOT :</strong>
            <?php
            $bobot1 = $mutu1 * $sksmatkul1;
            echo $bobot1;
            ?>
            </p>

            <p><strong>STATUS :</strong>
            <?php
            if ($grade1 == "A") {
                $status1 = "LULUS";
            } elseif ($grade1 == "A-") {
                $status1 = "LULUS";
            } elseif ($grade1 == "B+") {
                $status1 = "LULUS";
            } elseif ($grade1 == "B") {
                $status1 = "LULUS";
            } elseif ($grade1 == "B-") {
                $status1 = "LULUS";
            } elseif ($grade1 == "C+") {
                $status1 = "LULUS";
            } elseif ($grade1 == "C") {
                $status1 = "LULUS";
            } elseif ($grade1=="C-") {
                $status1 = "LULUS";
            } else {
                $status1 = "GAGAL";
            }
            echo $status1;
            ?>
            </p>
            <!-- MATKUL 1 ABIS -->
            <hr>
            <!-- MATKUL2 -->
               <p><strong>NAMA MATA KULIAH 2 :</strong>
            <?php
            $NamaMatkul2 = "KALKULUS";
            echo $NamaMatkul2;
            ?>
            </p>

            <p><strong>SKS :</strong>
            <?php
            $sksmatkul2 = "8";
            echo $sksmatkul2;
            ?>
            </p>
            
            <p><strong>KEHADIRAN :</strong>
            <?php
            $nilaihadir2 = "100";
            echo $nilaihadir2
            ?>
            </p>

            <p><strong>TUGAS :</strong>
            <?php
            $nilaitugas2 = "100";
            echo $nilaitugas2
            ?>
            </p>

            <p><strong>UTS :</strong>
            <?php
            $nilaiuts2 = "100";
            echo $nilaiuts2
            ?>
            </p>

            <p><strong>UAS :</strong>
            <?php
            $nilaiUAS2 = "100";
            echo $nilaiUAS2
            ?>
            </p>

            <p><strong>NILAI AKHIR :</strong>
            <?php
            $nilaiakhir2 = (0.1 * $nilaihadir2) + (0.2 * $nilaitugas2) + (0.3 * $nilaiuts2) + (0.4 * $nilaiUAS2);
            echo $nilaiakhir2;
            ?>
           </p>


            <p><strong>GRADE :</strong>
            <?php
            if ($nilaihadir2 < 70) {
                $grade2 = "E";
            } elseif ($nilaiakhir2 >= 91) {
                $grade2 ="A";
            } elseif ($nilaiakhir2 >= 81) {
                $grade2 = "A-";
            } elseif ($nilaiakhir2 >= 76) {
                $grade2 = "B+";
            } elseif ($nilaiakhir2 >= 71) {
                $grade2 = "B";
            } elseif ($nilaiakhir2 >= 66) {
                $grade2 = "B-";
            } elseif ($nilaiakhir2 >= 61) {
                $grade2= "C+";
            } elseif ($nilaiakhir2 >= 56) {
                $grade2 = "C";
            } elseif ($nilaiakhir2 >= 51) {
                $grade2 = "C-";
            } elseif ($nilaiakhir2 >= 36) {
                $grade2 = "D";
            }else {
                $grade2 = "E";
            }
             echo $grade2;
             ?>
            </p>

            <p><strong>ANGKA MUTU</strong>
            <?php
            if ($nilaihadir2 < 70) {
                $mutu2 = "0.00";
            } elseif ($nilaiakhir2 >= 91) {
                $mutu2 = "4.00";
            } elseif ($nilaiakhir2 >= 81) {
                $mutu2 = "3.70";
            } elseif ($nilaiakhir2 >= 76) {
                $mutu2 = "3.30";
            } elseif ($nilaiakhir2 >= 71) {
                $mutu2 = "3.00";
            } elseif ($nilaiakhir2 >= 66) {
                $mutu2 = "2.70";
            } elseif ($nilaiakhir2 >= 61) {
                $mutu2 = "2.30";
            } elseif ($nilaiakhir2 >= 56) {
                $mutu2 = "1.70";
            } elseif ($nilaiakhir2 >= 51) {
                $mutu2 = "1.00";
            } else {
                $mutu2 = "0.00";
            }
            echo $mutu2;
            ?>
            </p>
            <p><strong>BOBOT :</strong>
            <?php
            $bobot2 = $mutu2 * $sksmatkul2;
            echo $bobot2;
            ?>
            </p>

            <p><strong>STATUS :</strong>
            <?php
            if ($grade2 == "A") {
                $status2 = "LULUS";
            } elseif ($grade2 == "A-") {
                $status2 = "LULUS";
            } elseif ($grade2 == "B+") {
                $status2 = "LULUS";
            } elseif ($grade2 == "B") {
                $status2 = "LULUS";
            } elseif ($grade2 == "B-") {
                $status2 = "LULUS";
            } elseif ($grade2 == "C+") {
                $status2 = "LULUS";
            } elseif ($grade2 == "C") {
                $status2 = "LULUS";
            } elseif ($grade2=="C-") {
                $status2 = "LULUS";
            } else {
                $status2 = "GAGAL";
            }
            echo $status2;
            ?>
            </p>
            <!-- MATKUL 2 SELESAI -->
            <hr>
            <!-- MATKUL 3 -->    
             <p><strong>NAMA MATA KULIAH 3:</strong>
            <?php
            $NamaMatkul3 = "PENGANTAR TEKNIK INFORMATIKA";
            echo $NamaMatkul3;
            ?>
            </p>

            <p><strong>SKS :</strong>
            <?php
            $sksmatkul3 = "8";
            echo $sksmatkul3;
            ?>
            </p>
            
            <p><strong>KEHADIRAN :</strong>
            <?php
            $nilaihadir3 = "100";
            echo $nilaihadir3
            ?>
            </p>

            <p><strong>TUGAS :</strong>
            <?php
            $nilaitugas3 = "100";
            echo $nilaitugas3;
            ?>
            </p>

            <p><strong>UTS :</strong>
            <?php
            $nilaiuts3 = "100";
            echo $nilaiuts3;
            ?>
            </p>

            <p><strong>UAS :</strong>
            <?php
            $nilaiUAS3= "100";
            echo $nilaiUAS3;
            ?>
            </p>

            <p><strong>NILAI AKHIR :</strong>
            <?php
            $nilaiakhir3 = (0.1 * $nilaihadir3) + (0.2 * $nilaitugas3) + (0.3 * $nilaiuts3) + (0.4 * $nilaiUAS3);
            echo $nilaiakhir3;
            ?>
           </p>


            <p><strong>GRADE :</strong>
            <?php
            if ($nilaihadir3 < 70) {
                $grade3 = "E";
            } elseif ($nilaiakhir3 >= 91) {
                $grade3 ="A";
            } elseif ($nilaiakhir3 >= 81) {
                $grade3 = "A-";
            } elseif ($nilaiakhir3 >= 76) {
                $grade3 = "B+";
            } elseif ($nilaiakhir3 >= 71) {
                $grade3 = "B";
            } elseif ($nilaiakhir3 >= 66) {
                $grade3 = "B-";
            } elseif ($nilaiakhir3 >= 61) {
                $grade3= "C+";
            } elseif ($nilaiakhir3 >= 56) {
                $grade3 = "C";
            } elseif ($nilaiakhir3 >= 51) {
                $grade3 = "C-";
            } elseif ($nilaiakhir3 >= 36) {
                $grade3 = "D";
            }else {
                $grade3 = "E";
            }
             echo $grade3;
             ?>
            </p>

            <p><strong>ANGKA MUTU</strong>
            <?php
            if ($nilaihadir3 < 70) {
                $mutu3 = "0.00";
            } elseif ($nilaiakhir3 >= 91) {
                $mutu3 = "4.00";
            } elseif ($nilaiakhir3 >= 81) {
                $mutu3 = "3.70";
            } elseif ($nilaiakhir3 >= 76) {
                $mutu3 = "3.30";
            } elseif ($nilaiakhir3 >= 71) {
                $mutu3 = "3.00";
            } elseif ($nilaiakhir3 >= 66) {
                $mutu3 = "2.70";
            } elseif ($nilaiakhir3 >= 61) {
                $mutu3 = "2.30";
            } elseif ($nilaiakhir3 >= 56) {
                $mutu3 = "1.70";
            } elseif ($nilaiakhir3 >= 51) {
                $mutu3 = "1.00";
            } else {
                $mutu3 = "0.00";
            }
            echo $mutu3;
            ?>
            </p>
            <p><strong>BOBOT :</strong>
            <?php
            $bobot3 = $mutu3 * $sksmatkul3;
            echo $bobot3;
            ?>
            </p>

            <p><strong>STATUS :</strong>
            <?php
            if ($grade3 == "A") {
                $status3 = "LULUS";
            } elseif ($grade3 == "A-") {
                $status3 = "LULUS";
            } elseif ($grade3 == "B+") {
                $status3 = "LULUS";
            } elseif ($grade3 == "B") {
                $status3 = "LULUS";
            } elseif ($grade3 == "B-") {
                $status3 = "LULUS";
            } elseif ($grade3 == "C+") {
                $status3 = "LULUS";
            } elseif ($grade3 == "C") {
                $status3 = "LULUS";
            } elseif ($grade3=="C-") {
                $status3 = "LULUS";
            } else {
                $status3 = "GAGAL";
            }
            echo $status3;
            ?>
            </p>
            <!-- MATKUL 3 ABIS -->
            <hr>
            <!-- MATKUL 4 -->
            <p><strong>NAMA MATA KULIAH 4 :</strong>
            <?php
            $NamaMatkul4 = "KALKULUS";
            echo $NamaMatkul4;
            ?>
            </p>

            <p><strong>SKS :</strong>
            <?php
            $sksmatkul4 = "8";
            echo $sksmatkul4;
            ?>
            </p>
            
            <p><strong>KEHADIRAN :</strong>
            <?php
            $nilaihadir4 = "100";
            echo $nilaihadir4
            ?>
            </p>

            <p><strong>TUGAS :</strong>
            <?php
            $nilaitugas4 = "100";
            echo $nilaitugas4
            ?>
            </p>

            <p><strong>UTS :</strong>
            <?php
            $nilaiuts4 = "100";
            echo $nilaiuts4
            ?>
            </p>

            <p><strong>UAS :</strong>
            <?php
            $nilaiUAS4 = "100";
            echo $nilaiUAS4
            ?>
            </p>

            <p><strong>NILAI AKHIR :</strong>
            <?php
            $nilaiakhir4 = (0.1 * $nilaihadir4) + (0.2 * $nilaitugas4) + (0.3 * $nilaiuts4) + (0.4 * $nilaiUAS4);
            echo $nilaiakhir4;
            ?>
           </p>


            <p><strong>GRADE :</strong>
            <?php
            if ($nilaihadir4 < 70) {
                $grade4 = "E";
            } elseif ($nilaiakhir4 >= 91) {
                $grade4 ="A";
            } elseif ($nilaiakhir4 >= 81) {
                $grade4 = "A-";
            } elseif ($nilaiakhir4 >= 76) {
                $grade4 = "B+";
            } elseif ($nilaiakhir4 >= 71) {
                $grade4 = "B";
            } elseif ($nilaiakhir4 >= 66) {
                $grade4 = "B-";
            } elseif ($nilaiakhir4 >= 61) {
                $grade4= "C+";
            } elseif ($nilaiakhir4 >= 56) {
                $grade4 = "C";
            } elseif ($nilaiakhir4 >= 51) {
                $grade4 = "C-";
            } elseif ($nilaiakhir4 >= 36) {
                $grade4 = "D";
            }else {
                $grade4 = "E";
            }
             echo $grade4;
             ?>
            </p>

            <p><strong>ANGKA MUTU</strong>
            <?php
            if ($nilaihadir4 < 70) {
                $mutu4 = "0.00";
            } elseif ($nilaiakhir4 >= 91) {
                $mutu4 = "4.00";
            } elseif ($nilaiakhir4 >= 81) {
                $mutu4 = "3.70";
            } elseif ($nilaiakhir4 >= 76) {
                $mutu4 = "3.30";
            } elseif ($nilaiakhir4 >= 71) {
                $mutu4 = "3.00";
            } elseif ($nilaiakhir4 >= 66) {
                $mutu4 = "2.70";
            } elseif ($nilaiakhir4 >= 61) {
                $mutu4 = "2.30";
            } elseif ($nilaiakhir4 >= 56) {
                $mutu4 = "1.70";
            } elseif ($nilaiakhir4 >= 51) {
                $mutu4 = "1.00";
            } else {
                $mutu4 = "0.00";
            }
            echo $mutu4;
            ?>
            </p>
            <p><strong>BOBOT :</strong>
            <?php
            $bobot4= $mutu4 * $sksmatkul4;
            echo $bobot4;
            ?>
            </p>

            <p><strong>STATUS :</strong>
            <?php
            if ($grade4 == "A") {
                $status4 = "LULUS";
            } elseif ($grade4 == "A-") {
                $status4 = "LULUS";
            } elseif ($grade4 == "B+") {
                $status4 = "LULUS";
            } elseif ($grade4 == "B") {
                $status4 = "LULUS";
            } elseif ($grade4 == "B-") {
                $status4 = "LULUS";
            } elseif ($grade4 == "C+") {
                $status4 = "LULUS";
            } elseif ($grade4 == "C") {
                $status4 = "LULUS";
            } elseif ($grade4=="C-") {
                $status4 = "LULUS";
            } else {
                $status4 = "GAGAL";
            }
            echo $status4;
            ?>
            </p>
            <!-- matkul 4 abis -->
            <hr>
            <!-- matkul 5 -->
             <p><strong>NAMA MATA KULIAH 5 :</strong>
            <?php
            $NamaMatkul5 = "KONSEP BASIS DATA";
            echo $NamaMatkul5;
            ?>
            </p>

            <p><strong>SKS :</strong>
            <?php
            $sksmatkul5 = "8";
            echo $sksmatkul5;
            ?>
            </p>
            
            <p><strong>KEHADIRAN :</strong>
            <?php
            $nilaihadir5 = "100";
            echo $nilaihadir5
            ?>
            </p>

            <p><strong>TUGAS :</strong>
            <?php
            $nilaitugas5 = "100";
            echo $nilaitugas5
            ?>
            </p>

            <p><strong>UTS :</strong>
            <?php
            $nilaiuts5 = "100";
            echo $nilaiuts5
            ?>
            </p>

            <p><strong>UAS :</strong>
            <?php
            $nilaiUAS5 = "100";
            echo $nilaiUAS5
            ?>
            </p>

            <p><strong>NILAI AKHIR :</strong>
            <?php
            $nilaiakhir5 = (0.1 * $nilaihadir5) + (0.2 * $nilaitugas5) + (0.3 * $nilaiuts5) + (0.4 * $nilaiUAS5);
            echo $nilaiakhir5;
            ?>
           </p>


            <p><strong>GRADE :</strong>
            <?php
            if ($nilaihadir5 < 70) {
                $grade5 = "E";
            } elseif ($nilaiakhir5 >= 91) {
                $grade5 ="A";
            } elseif ($nilaiakhir5 >= 81) {
                $grade5 = "A-";
            } elseif ($nilaiakhir5 >= 76) {
                $grade5 = "B+";
            } elseif ($nilaiakhir5 >= 71) {
                $grade5 = "B";
            } elseif ($nilaiakhir5 >= 66) {
                $grade5 = "B-";
            } elseif ($nilaiakhir5 >= 61) {
                $grade5= "C+";
            } elseif ($nilaiakhir5 >= 56) {
                $grade5 = "C";
            } elseif ($nilaiakhir5 >= 51) {
                $grade5 = "C-";
            } elseif ($nilaiakhir5 >= 36) {
                $grade5 = "D";
            }else {
                $grade5 = "E";
            }
             echo $grade5;
             ?>
            </p>

            <p><strong>ANGKA MUTU</strong>
            <?php
            if ($nilaihadir5 < 70) {
                $mutu5 = "0.00";
            } elseif ($nilaiakhir5 >= 91) {
                $mutu5 = "4.00";
            } elseif ($nilaiakhir5 >= 81) {
                $mutu5 = "3.70";
            } elseif ($nilaiakhir5 >= 76) {
                $mutu5 = "3.30";
            } elseif ($nilaiakhir5 >= 71) {
                $mutu5 = "3.00";
            } elseif ($nilaiakhir5 >= 66) {
                $mutu5 = "2.70";
            } elseif ($nilaiakhir5 >= 61) {
                $mutu5 = "2.30";
            } elseif ($nilaiakhir5 >= 56) {
                $mutu5 = "1.70";
            } elseif ($nilaiakhir5 >= 51) {
                $mutu5 = "1.00";
            } else {
                $mutu5 = "0.00";
            }
            echo $mutu5;
            ?>
            </p>

            <p><strong>BOBOT :</strong>
            <?php
            $bobot5 = $mutu5 * $sksmatkul5;
            echo $bobot5;
            ?>
            </p>

            <p><strong>STATUS :</strong>
            <?php
            if ($grade5 == "A") {
                $status5 = "LULUS";
            } elseif ($grade5 == "A-") {
                $status5 = "LULUS";
            } elseif ($grade5 == "B+") {
                $status5 = "LULUS";
            } elseif ($grade5 == "B") {
                $status5 = "LULUS";
            } elseif ($grade5 == "B-") {
                $status5 = "LULUS";
            } elseif ($grade5 == "C+") {
                $status5 = "LULUS";
            } elseif ($grade5 == "C") {
                $status5 = "LULUS";
            } elseif ($grade5=="C-") {
                $status5 = "LULUS";
            } else {
                $status5 = "GAGAL";
            }
            echo $status5;
            ?>
            </p>
            <!-- matkul 5 abis -->
            <hr>
            <p><strong>TOTAL BOBOT:</strong>
            <?php
            $totalbobot = $bobot1 + $bobot2 + $bobot3 + $bobot4 + $bobot5;
            echo $totalbobot;
            ?>   
        </p>
            <p><strong>TOTAL SKS:</strong>
        <?php
        $totalsks = $sksmatkul1 + $sksmatkul2 + $sksmatkul3 + $sksmatkul4 + $sksmatkul5;
        echo $totalsks;
        ?>
        </p>
            <p><strong>IPK :</strong>
        <?php
        $IPK = $totalbobot/$totalsks;
        echo $IPK;
        ?>
        </p>
        </section>

        <section id="contact">
            <h2>Kontak Kami</h2>
            <form action="" method="GET">

                <label for="TxtNama">
                    <span>Nama:</span>
                    <input type="text" id="TxtNama" name="TxtNama" placeholder="Masuk Nama" required
                        autocomplete="name">
                </label>

                <label for="Txtemail">
                    <span>Email:</span>
                    <input type="Email" id="texemail" placeholder="Masuk email" required autocomplete="email">
                </label>

                <label for="Txtpesan">
                    <span>Pesan:</span>
                    <textarea id="Txtpesan" name="Txtpesan" Rows="4" placeholder="Tulis Pesan Anda..."
                        required></textarea>
                </label>

                <button Type="Submit">Kirim</button>
                <button Type="Reset">Batal</button>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 DAVA PRATAMA [2511500062]</p>
    </footer>

    <script src="scipt.js"></script>

</body>

</html>
