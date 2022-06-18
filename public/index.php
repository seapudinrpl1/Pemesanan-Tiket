<?php
require "functions.php";

$harga = query("SELECT * FROM kelas");

$pesan_tiket = query("SELECT * FROM pesan_tiket, kelas WHERE pesan_tiket.id_kelas=kelas.id");


?>
<!DOCTYPE html>
<html lang="en" id="home">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Pemesanan Tiket Bus AKAP</title>
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/style.css">
</head>
<body>
    <!-- <div class="container"> -->
        <!-- Navbar -->
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#home">Aplikasi Pemesanan Tiket</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#Kelas">Kelas Bus</a></li>
                    <li><a href="#daftar_harga">Daftar Harga</a></li>
                    <li><a href="#history">History Pelanggan</a></li>
                    
                </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <!-- End Navbar -->

        <!-- Jumbotron -->
        <div class="jumbotron text-center">
          <h1>Aplikasi Pemesanan Tiket <br> Bus AKAP</h1>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae ipsam ex minima maxime. Quibusdam quam explicabo molestiae saepe placeat quis aperiam ad consectetur. Reprehenderit cum illo iure. Dignissimos id officiis eligendi rem labore tempora ipsum voluptas velit earum delectus aliquid quos, commodi culpa eaque fugit, error perspiciatis est unde adipisci!</p>
          <p><a class="btn btn-success btn-lg" href="pesan_tiket.php" role="button">Pesan Tiket</a></p>
        </div>
        <!-- Akhir Jumbotron -->

        <!-- kelas -->
        <section id="Kelas">
          <div class="row">
            <div class="col-sm-12">
              <h2 class="text-center">Kelas Bus</h2>
              <hr>
            </div>
          </div>
          
          <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                    <img src="../node_modules/bootstrap/dist/img/2.jpg" alt="...">
                    <div class="caption">
                        <h3> <b> Kelas Ekonomi </b> </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae esse voluptates minus in laborum ea, perferendis aspernatur praesentium est iure?</p>
                    </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                    <img src="../node_modules/bootstrap/dist/img/3.jpg" alt="...">
                    <div class="caption">
                        <h3><b> Kelas Bisnis </b> </h3>
                        <h4></h4>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos exercitationem ipsa nam illo? Dolore assumenda autem sint et! Laborum, tenetur.</p>
                    </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                    <img src="../node_modules/bootstrap/dist/img/4.jpeg" alt="...">
                    <div class="caption">
                        <h3><b> Kelas Eksekutif </b> </h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugit eos inventore deserunt nihil voluptates molestias fugiat repellendus id a provident.</p>
                    </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End kelas -->

        <!-- daftarharga -->
        <section id="daftar_harga">
          <div class="row">
            <div class="col-sm-12">
              <h2 class="text-center">Daftar Harga</h2>
              <hr>
            </div>
          </div>

          <div class="container">
            <div class="panel panel-primary">
                <!-- Default panel contents -->
                <div class="panel-heading">Daftar Harga Bus AKAP</div>

                <!-- Table -->
                <table class="table table-hover">
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Harga</th>
                    </tr>
                    <?php $i = 1; ?>
                    <?php foreach( $harga as $row ) : ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $row["kelas"]; ?></td>
                        <td><?php echo $row["harga"]; ?></td>
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                </table>
            </div>
          </div>
        </section>
        
        <!-- End daftarharga -->

        <!-- history -->
        <section id="history">
          <div class="row">
            <div class="col-sm-12">
              <h2 class="text-center">History Pelanggan</h2>
              <hr>
            </div>
          </div>

          <div class="container">
            <a href="pesan_tiket.php" class="btn btn-success">
                Pesan Tiket
            </a> <br> <br>
            <div class="panel panel-info">
              <!-- Default panel contents -->
                <div class="panel-heading">History Pelanggan</div>

                <!-- Table -->
                <table class="table table-hover">
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>Kelas Penumpang</th>
                        <th>Jadwal Keberangkatan</th>
                        <th>Jumlah Penumpang Muda</th>
                        <th>Jumlah Penumpang Lansia</th>
                        <th>Harga Tiket</th>
                        <th>Total Bayar</th>
                    </tr>

                    <?php $i = 1; ?>
                    <?php foreach( $pesan_tiket as $row ) : ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $row["nama"]; ?></td>
                        <td><?php echo $row["kelas"]; ?></td>
                        <td><?php echo $row["jadwal"]; ?></td>
                        <td><?php echo $row["penumpang_muda"]; ?></td>
                        <td><?php echo $row["penumpang_lansia"]; ?></td>
                        <td><?php echo $row["harga"]; ?></td>
                        <td><?php echo $row["total"]; ?></td>
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                </table>
            </div>
          </div>
        </section>
        <!-- end history -->

        <!-- Footer -->
        <footer>
          <div class="container text-center">
            <div class="row">
              <div class="col-sm-12">
                <p>&copy; Copyright 2022 | built with <i class="glyphicon glyphicon-heart"></i> by. <a href="https://instagram.com/saepudinasep">Asep Saepudin</a>.</p>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <a href="http://youtube.com/warungcodingumi" class="btn btn-danger"><i class="glyphicon glyphicon-play"></i> Subscribe to Youtube</a>
              </div>
            </div>
          </div>
        </footer>
        <!-- End Footer -->

    <!-- </div> -->
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../node_modules/bootstrap/dist/js/jquery-3.6.0.min.js"></script>
    <!-- <script src="js/jquery.easing.1.3.js"></script> -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>

    <script src="../node_modules/bootstrap/dist/js/script.js"></script>
</body>
</html>