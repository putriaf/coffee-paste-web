<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Reservasi Restoran</title>
    <link rel="stylesheet" type="text/css" media="all" href="assets/styles/style_form.css">
    <script>
            function validateForm() {
                var txt;
                var r = confirm("Yakin melakukan reservasi?\n*data akan langsung disimpan\n*jika ingin melakukan pembatalan hubungi kontak Coffee Paste");
                if (r == true) {
                    alert("Berhasil melakukan reservasi!");
                    return true;
                } else {
                    return false;
                }
            }
    </script>
</head>
<body>
    <nav>
		<ul>
            <li> <a href="home">Home</a> </li>
            <li> <a href="about">About</a> </li>
            <li> <a href="menu">Menu</a> </li>
		</ul>
    </nav>
    <h1>FORM RESERVASI COFFEE PASTE</h1>
    <div class="container">
        <form action=<?= base_url("/form/save")?> onsubmit="return validateForm()" method="POST">
        <table class="left">
            <tr>
                <th colspan="2"><h2>Data Pemesan</h2></th>
            </tr>
            <tr>
                <th><label for="nama">Nama</label></th>
                <td>: <input type="text" name="nama" id="nama" placeholder="Masukkan Nama Pemesan" required></td>
            </tr>
            <tr>
                <th><label for="jk">Jenis Kelamin</label></th>
                <td><input type="radio" name="jk" id="jk" value="L">
                    <label for="jk">Laki-laki</label>
                    <input type="radio" name="jk" id="jk" value="P">
                    <label for="jk">Perempuan</label>
                </td>
            </tr>
            <tr>
                <th><label for="alamat">Alamat Lengkap</label></th>
                <td>: <textarea name="alamat" id="alamat" cols="20" rows="8" placeholder="Masukkan Alamat Lengkap"></textarea></td>
            </tr>
            <tr>
                <th><label for="telp">Nomor Telepon</label></th>
                <td>: <input type="text" name="telp" id="telp" placeholder="Masukkan Nomor Telepon" required></td>
            </tr>
            <tr>
                <th><label for="email">Email</label></th>
                <td>: <input type="email" name="email" id="email" placeholder="Masukkan Email" required></td>
            </tr>
        </table>
        <aside>
            <table>
                <tr>
                    <th colspan="2"><h2>Data Reservasi</h2></th>
                </tr>
                <tr>
                    <th><label for="tgl_rsv">Tanggal Reservasi</label></th>
                    <td>: <input type="date" name="tgl_rsv" id="tgl_rsv" required></td>
                </tr>
                <tr>
                    <th><label for="jam">Pilihan Jam</label></th>
                    <td>: <input type="time" name="jam" id="jam" required></td>
                </tr>
                <tr>
                    <th><label for="jml_org">Jumlah Orang</label></th>
                    <td>: <input type="number" name="jml_org" id="jml_org" placeholder="Masukkan Jumlah Orang" required></td>
                </tr>
                <tr>
                    <th><label for="kode_resto">Pilihan Lokasi</label></th>
                    <td>: <select name="kode_resto" id="kode_resto" required>
                        <option value="-">Pilih Lokasi</option>
                        <option value="B001">Sayang</option>
                        <option value="B002">Hegarmanah</option>
                        <option value="B003">Ciseke</option>
                        <option value="B004">Cikuda</option>
                    </select></td>
                </tr>
            </table>
            <button name="submit" id="submit">RESERVASI</button>
        </aside>
        </form>
    </div>
</body>
</html>