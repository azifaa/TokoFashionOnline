<?php
    require "session.php";
    require "../koneksi.php";

    $queryKategori = mysqli_query($con, "SELECT * FROM kategori");
    $jumlahkategori = mysqli_num_rows($queryKategori);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategori</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../fontawesome/css/fontawesome.min.css">
</head>
<body>
   <?php require "navbar.php";?>
   <div class="container mt-5">
   <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">
                <a href="../adminpanel" class="text-decoration-none text-muted">
                <i class="fas fa-home"></i> Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                Kategori
            </li>
        </ol>
        </nav>
        <div class="mt-3">
            <h2>List Kategori</h2>

            <div class="table-responsive mt-3">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama.</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while($data=mysqli_fetch_array($queryKategori)){
                            if($jumlahkategori==0){
                                ?>

                                <tr>
                                    <td>Tidak Ada Data Kategori</td>
                                </tr>
                                <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
   </div>

<script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
   <script src="../fontawesome/js/all.min.js"></script>
</body>
</html>