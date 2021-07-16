
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    
    
    <title>Website Mitra Pangoje'</title>

    <!-- Custom fonts for this template-->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> -->

    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>



    <style>
    .toggle {
      -webkit-appearance: none;
      -moz-appearance: none;
      appearance: none;
      width: 98px;
      height: 30px;
      position: relative;
      border-radius: 20px;
      display: inline-block;
      overflow: hidden;
      outline: none;
      border: none;
      cursor: pointer;
      background-color: #707070;
      transition: background-color ease 0.3s;
    }
    .toggle:before {
      content: "Buka Tutup";
      display: block;
      position: absolute;
      z-index: 2;
      width: 25px;
      height: 25px;
      background: #fff;
      left: 2px;
      top: 2px;
      border-radius: 50%;
      font:bold 12px/28px Helvetica;
      text-indent: -40px;
      word-spacing: 30px;
      color: #fff;
      text-shadow: -1px -1px rgba(0,0,0,0.15);
      white-space: nowrap;
      box-shadow: 0 1px 2px rgba(0,0,0,0.2);
      transition: all cubic-bezier(0.3, 1.5, 0.7, 1) 0.3s;
    }
    .toggle:checked {background: #4CD964;}
    .toggle:checked:before {left:70px;}

    #wrapper{
        width: 50%;
        margin-left: 25%;
    }

    @media screen and (max-width: 600px) {
      #wrapper {
        width: 100%;

      }
    }
    </style>



</head>





<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper" style="position: center;"> <br><br>

       



        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content"><br>

              



                <!-- Begin Page Content -->
                <div style="position: center;" class="container-fluid">

                <!-- <?php
                    
                    $page = $_GET['page'];
                    $aksi = $_GET['aksi'];

                    if ($page == ""){
                        include "../input_menu/menu.php"; }
                    

                    if ($page == "input_menu"){
                        if ($aksi == ""){
                            include "../input_menu/menu.php";
                        } elseif($aksi == "tambah-menu"){
                            include "promo_act/tambah.php";
                        } elseif($aksi == "delete-menu"){
                            include "promo_act/hapus.php";
                        } elseif($aksi == "rincian-menu"){
                            include "../input_menu/menu2.php"; 
                        }  elseif($aksi == "sudah-hapus"){
                            include "../../input_menu/menu.php"; 
                        } elseif($aksi == "ubah-menu"){
                            include "promo_act/ubah.php";
                        } elseif($aksi == "selesai"){
                            include "../input_menu/selesai.php"; 
                        } 
                    }

                ?>            -->      




                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Saldo Jekpay 
                            </h6>
                        <a href="?page=input_menu&aksi=tambah-menu&nama_warung=<?php echo $nama_warung?>" class="btn btn-success" style="margin-bottom: 10px;"> <i class ="fa fa-plus"></i> 
                        Top Up</a>
                    </div>
                </div>


                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Saldo Pendapatan
                            </h6>
                        <a href="?page=input_menu&aksi=tambah-menu&nama_warung=<?php echo $nama_warung?>" class="btn btn-success" style="margin-bottom: 10px;"> <i class ="fa fa-plus"></i> 
                        Top Up</a>
                    </div>
                </div>



                <?php
                include 'koneksi.php'; 
                $no = 1;
                $query = mysqli_query($koneksi,"SELECT * FROM user ORDER BY user_foto DESC LIMIT 1");
                

                while ($data = mysqli_fetch_array($query)){

                ?>


                <form action="action/ket_toko.php" method="post" enctype="multipart/form-data">
                    <div style="text-align: center;  position: center;" id="" class="form-group">
                        <h2 id="status">Keterangan Toko anda <?php echo $data['user_foto']; ?></h2>
                        <input id="swbtn" name="keterangan" class="toggle" type="checkbox" />
                        <script>
                            let swbtn = document.getElementById("swbtn");
                            let status = document.getElementById("status");
                            swbtn.addEventListener("click", function(){
                                if (swbtn.checked) {
                                    status.innerHTML = "Keterangan Toko anda <?php echo $data['user_foto']; ?>";
                                    
                                } else if (!swbtn.checked)  {
                                    status.innerHTML = "Keterangan Toko anda <?php echo $data['user_foto']; ?>";
                                }
                            });
                        </script>
                    </div>
                    <input type="submit" name="" value="Simpan" class="btn btn-primary">
                </form>

                <?php } ?>



                <!-- <form action="action/ket_toko.php" method="post" enctype="multipart/form-data">
                    <div style="text-align: center;  position: center;" id="" class="form-group">
                        <input id="" name="keterangan2" class="text" type="text" />
                        <select name="kategori">
                        <option value="">Pilih Kategori</option>
                        <option value="1">Pakaian Pria</option>
                        <option value="2">Pakaian Wanita</option>
                        <option value="3">Pakaian Anak</option>
                        </select>
                    </div>
                    <input type="submit" name="" value="Simpan" class="btn btn-primary">
                </form> -->
                





                <div style="text-align: center;  position: center;" id="" class="form-group">
                    <a  href="?page=input_menu&aksi=tambah-menu&nama_warung=<?php echo $nama_warung?>" class="btn btn-success" style="margin-bottom: 10px;"> <i class ="fa fa-plus"></i> 
                            Tutup/Buka Toko</a>
                </div>

                <div style="text-align: center;  position: center;" id="" class="form-group">
                    <a  href="atur_menu/atur_menu.php" class="btn btn-success" style="margin-bottom: 10px;"> <i class ="fa fa-plus"></i> 
                            Atur Menu</a>
                </div>

                <div style="text-align: center;  position: center;" id="" class="form-group">
                    <a  href="?page=input_menu&aksi=tambah-menu&nama_warung=<?php echo $nama_warung?>" class="btn btn-success" style="margin-bottom: 10px;"> <i class ="fa fa-plus"></i> 
                            Atur Promo</a>
                </div>

                <div style="text-align: center;  position: center;" id="" class="form-group">
                    <a  href="riwayat_transaksi/riwayat_transaksi.php" class="btn btn-success" style="margin-bottom: 10px;"> <i class ="fa fa-plus"></i> 
                            Riwayat Transaksi</a>
                </div>

                <div style="text-align: center;  position: center;" id="" class="form-group">
                    <a  href="logout.php" class="btn btn-success" style="margin-bottom: 10px;"> <i class ="fa fa-plus"></i> 
                            Profil</a>
                </div>


                







                </div>
                <!-- /.container-fluid -->






                

            </div>
            <!-- End of Main Content -->









            <!-- Footer -->
            <footer style="background-color: #E3E3E3" class="sticky-footer">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; PT Master Tech Indonesia 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    






    <!-- Bootstrap core JavaScript-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="assets/js/demo/datatables-demo.js"></script>

</body>

</html>

<!--  -->