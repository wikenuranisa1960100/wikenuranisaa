<!doctype html>
<html lang="en">
    <head>
        <!--Required meta tags-->
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width, initial-scale=1">

        <!--Bootstrap CSS-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        
        <title>Form</title>
    </head>
    <body>
    <section class="banner">
        <h2>Selamat Datang di Website Wike Nur Anisa
            <br>
            <hr>
            Mahasiswa Matematika Universitas Islam Negri Maulana Malik Ibrahim Malang
        </h2>
    </section>
    <?php
        session_start();
    ?>

    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">PK2</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="output.php">Data</a>
                </li>
                <?php 
                if(!empty($_SESSION['username'])){
                    echo'<li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>';
                } else {
                    echo'<li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                    <li class="nav-item"><a class="nav-link" href="registrasi.php">Register</a></li>';
                } ?>

            </ul>
        </div>
    </div>
    </nav>

    <div class="header">
        <div class="left">
            <?php if (!empty($_SESSION['username'])){ ?>
            <div style="clear;both; text-align; right; margin-right: 20px;"><h3>Selamat datang <span id="name"><?php echo $_SESSION['nama']?></span></h3></div>
        <?php } ?>
        </div>
    </div>
   
    
        <div class="container">
            <h2 class="alert alert-primary text-center mt-3">Formulir</h2>
            <form action="output.php" method="POST" enctype="multipart/form-data">
                <div class="mb-4 mt-4">
                    <label for="nama" class="form-label">Nama:</label>
                    <input type="nama" class="form-control" id="nama" placeholder="Masukkan nama" name="nama">
                </div>
                <div class="mb-4 mt-4">
                    <label for="ttl" class="form-label">Tempat, Tanggal Lahir:</label>
                    <input type="ttl" class="form-control" id="ttl" placeholder="Masukkan Tempat, Tanggal Lahir" name="ttl">
                </div>
                <div class="mb-4 mt-4">
                    <label for="jeniskelamin" class="form-label">Jenis Kelamin:</label>
                    <input type="jeniskelamin" class="form-control" id="jeniskelamin" placeholder="Masukkan Jenis Kelamin" name="jeniskelamin">   
                </div>
                <div class="mb-4 mt-4">
                    <label for="usia" class="form-label">Usia:</label>
                    <input type="usia" class="form-control" id="usia" placeholder="Masukkan Usia" name="usia">
                </div>
                <div class="mb-4 mt-4">
                    <label for="alamatemail" class="form-label">Alamat Email:</label>
                    <input type="alamatemail" class="form-control" id="alamatemail" placeholder="Masukkan Alamat Email" name="alamatemail">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>


        <!--Optional 1:Bootstrap Bundle with Popper-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


        <div id="copyright">
        <div class="wrapper">
            &copy; 2021. <b>FORM WIKE</b> All Rights Reserved
        </div>
    </div>
    </body>
</html>