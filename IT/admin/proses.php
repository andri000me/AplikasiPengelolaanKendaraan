<?php include "../conn.php";?>
<?php
session_start();
if(!isset($_SESSION['username'])){
  echo "<script>alert('Anda Belum Login.'); window.location = '../loginout.php'</script>";
}
if($_SESSION['level']!="admin"){
  echo "<script>alert('Terjadi Ketidaksinkronisasi.'); window.location = '../loginout.php'</script>";
}
?>
<?php
include("koneksi.php");
    $nama=$_POST['nama'];
    $no_telp=$_POST['no_telp'];
    $bagian=$_POST['bagian'];    
    $waktuawal=$_POST['waktuawal'];    
    $waktuakhir=$_POST['waktuakhir'];
    $haritgl=$_POST['haritgl'];
    $alamat=$_POST['alamat'];
    $kegiatan=$_POST['kegiatan'];
    $tempatstandby=$_POST['tempatstandby'];
    $jumlahpeserta=$_POST['jumlahpeserta'];
    $waktustandby=$_POST['waktustandby'];
    $jenis=$_POST['jenis'];
    

 
    $b=mysqli_query($conn, "INSERT INTO customer(nama,no_telp, bagian, waktuawal ,waktuakhir,haritgl,alamat,kegiatan,tempatstandby,jumlahpeserta,waktustandby,jenis)
    value('$nama','$no_telp','$bagian','$waktuawal','$waktuakhir','$haritgl','$alamat','$kegiatan','$tempatstandby','$jumlahpeserta','$waktustandby','$jenis')");

    if($b){
       header("location:customer.php");
       
    }

    

?>