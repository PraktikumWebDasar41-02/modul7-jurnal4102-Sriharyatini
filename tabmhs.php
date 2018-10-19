<?php
$view=mysqli_connect('localhost','root','','db7');
$data=mysqli_query($view, "SELECT * FROM input");

if(isset($_POST['send'])){
    $nim = $_POST['nim'];
    $nama = $_POST['nm'];
    $tgllahir = $_POST['tgllahir'];
    $jk = $_POST['jk'];
    $progstu = $_POST['ps'];
    $fak = $_POST['fk'];
    $asal = $_POST['alt'];
    $moto = $_POST['mh'];

    $conn=mysqli_query($view,"INSERT INTO input VALUES('$nim','$nama','$tgllahir','$jk','$progstu','$fak','$asal','$moto')");
    if($conn){
        echo "DATA BERHASIL TERSIMPAN";
    }else{
        echo "Maaf Gagal Terinput";
    }
}

?>
<table border=1>
    <h4> Tabel Mahasiswa </h4>
    <tr>
        <td>Nim</th>
        <td>Nama</th>
        <td>Tanggal Lahir</th>
        <td>Jenis Kelamin</th>
        <td>Program Studi</th>
        <td>Fakultas</th>
        <td>Asal</th>
        <td>Moto Hidup</th>
        <td>Aksi </th>

   </tr>
   <?php
   while ($new=mysqli_fetch_array($data)):?>
<tr>
    <td><?php echo $new['NIM'];?></td>
    <td><?php echo $new['Nama'];?></td>
    <td><?php echo $new['Tangal Lahir'];?></td>
    <td><?php echo $new['Jenis Kelamin'];?></td>
    <td><?php echo $new['Program Studi'];?></td>
    <td><?php echo $new['Fakultas'];?></td>
    <td><?php echo $new['Asal'];?></td>
    <td><?php echo $new['Moto Hidup'];?></td>
    <td><a href="delete.php?id=<?php echo$new['id'];?>"> Delete </a></td>
   

   </tr>
<?php endwhile;?>
</table>

<br><a href="datadiri.php">Input Data</a>
