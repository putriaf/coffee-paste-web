<html>
<head> 
    <title>Data Reservasi Coffee Paste</title>
    <link rel="stylesheet" href="/assets/styles/style_view.css">
</head>

<body>
    <header>
        <h1>DATA RESERVASI COFFEE PASTE</h1>
    </header>
    <main>
        <a href=<?= base_url("reservasi/add_new"); ?> class="button">
            Add New Data
        </a>
        <table>
            <thead>
                <tr>
                    <th>ID Pemesanan</th>
                    <th>Nama Lengkap</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>Nomor Telepon</th>
                    <th>Email</th>
                    <th>Jam</th>
                    <th>Jumlah Orang</th>
                    <th>Kode Restoran</th>
                    <th>Tanggal Reservasi</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($reservasi as $row) : ?>
                    <tr>
                        <td class="id"><?= $row['id_pemesanan']; ?></td>
                        <td><?= $row['nama']; ?></td>
                        <td><?= $row['jk']; ?></td>
                        <td><?= $row['alamat']; ?></td>
                        <td><?= $row['telp']; ?></td>
                        <td><?= $row['email']; ?></td>
                        <td><?= $row['jam']; ?></td>
                        <td><?= $row['jml_org']; ?></td>
                        <td><?= $row['kode_resto']; ?></td>
                        <td><?= $row['tgl_rsv']; ?></td>
                        <td class="action edit">
                            <?= anchor("reservasi/edit/{$row['id_pemesanan']}", "Edit") ?>
                        </td>
                        <td class="action delete">
                            <a href=<?= base_url("reservasi/delete/{$row['id_pemesanan']}"); ?>>
                                Delete
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <a class="button" href="home">Back to Home</a>
    </main>
    <footer>
		<p>Coffee Completes Me &#169; Coffee Paste</p>
	</footer>
</body>

</html>
