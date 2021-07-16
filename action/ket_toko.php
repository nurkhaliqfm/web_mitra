<?php 
include '../koneksi.php';
$keterangan = $_POST['keterangan'];


mysqli_query($koneksi, "INSERT INTO user VALUES(NULL,'$keterangan')");
		
?>

<script type="text/javascript">
    window.location.href="../index.php";
</script>



