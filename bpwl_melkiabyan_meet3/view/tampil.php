<?php
include '../model/database.php';
$db = new database();
?>

<h1>CRUD OOP PHP</h1>
<h2>WWW.MALASNGODING.COM</h2>
<h3>Data User</h3>

<a href="input.php">Input Data</a>
<table border="1">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Usia</th>
        <th>Opsi</th>

    </tr>

<?php
$no=1;
foreach($db->tampil_data() as $x){
?>
    <tr>
    <td><?php echo $no++; ?> </td>
    <td><?php echo $x['nama']; ?> </td>
    <td><?php echo $x['alamat']; ?> </td>
    <td><?php echo $x['usia']; ?> </td> 
    <td>
        <a href = "edit.php?id=<?php echo $x['id'];?>&aksi=edit">Edit</a> 
        <a href = "../controller/proses.php?id=<?php echo $x['id'];?>&aksi=hapus">Hapus</a>
    </td>
    </tr>

<?php
}
?>

