<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman View</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body>

    <div class="container text-center mt-4">
    <h1>Daftar Mahasiswa</h1>
    <ol class="list-group my-4">
        
        <!-- <li>Suhendar Aryadi</li>
        <li>Cici Alifa</li>
        <li>Burhan</li>
        <li>Wiwi Marwiyah</li> -->

        <?php

            foreach ($mahasiswa as $nama) {
                echo "<li class=\"list-group-item\"> $nama </li>";
            }
        
        ?>
        
    </ol>

    <!--  echo "$mahasiswa01"; ?> -->

    <!-- <ul>
    <li>Nama: < echo $nama; ?></li>
    <li>Umur: < $umur; ?> </li>
    <li>Kota Asal: < echo $kotaAsal; ?></li> -->
    
    
    </ul>

    <!-- <div>
    <img class="rounded-circle img-thumbnail m-2" src="/img/foto1.jpg">
    <img class="rounded-circle img-thumbnail m-2" src="/img/foto2.jpg" >
    </div> -->
    <p>
    <div>
        Copyright <?php echo date("M-Y"); ?>. Suhendar Aryadi
    </div>

    </div>

    <script src="/js/jquery-3.3.1.slim.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
</body>
</html>