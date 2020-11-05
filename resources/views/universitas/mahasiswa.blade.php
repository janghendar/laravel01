<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman View</title>
    <link rel="stylesheet" href="/css/my-style.css">
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ol>
        
        <!-- <li>Suhendar Aryadi</li>
        <li>Cici Alifa</li>
        <li>Burhan</li>
        <li>Wiwi Marwiyah</li> -->

        <?php

            foreach ($mahasiswa as $nama) {
                echo "<li> $nama </li>";
            }
        
        ?>
        
    </ol>

    <!--  echo "$mahasiswa01"; ?> -->

    <!-- <ul>
    <li>Nama: < echo $nama; ?></li>
    <li>Umur: < $umur; ?> </li>
    <li>Kota Asal: < echo $kotaAsal; ?></li> -->
    
    
    </ul>

    <img src="/img/foto1.jpg">
    <img src="/img/foto2.jpg" >
    
    <p>
    <div>
        Copyright <?php echo date("M-Y"); ?>. Suhendar Aryadi
    </div>

    <script src="/js/my-script.js"></script>
</body>
</html>