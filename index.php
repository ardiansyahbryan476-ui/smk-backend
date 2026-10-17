<?php
$koneksi = mysqli_connect(
    "localhost",
    "root",
    "",
    "smk"
);

if (!$koneksi) {
    die ("koneksi gagal: ".
    mysqli_connect_error());
}

echo "koneksi database berhasil!";

$query = mysqli_query($koneksi, "select * from anggota"); ?>

<h2>data anggota </h2>
<table border="1" cellpadding="8">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Kelas</th>
    </tr>

    <?php while ($data = mysqli_fetch_assoc($query)) { ?>
    <tr>
        <td><?=$data ['id'];?></td>
        <td><?=htmlspecialchars($data['nama']);?></td>
        <td><?=htmlspecialchars($data['kelas']);?></td>
</tr>
<?php } ?>
</table>