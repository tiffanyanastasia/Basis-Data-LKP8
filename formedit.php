<?php
include("config.php");

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = pg_query("SELECT * FROM calonsiswa WHERE id = $id");
    $siswa = pg_fetch_array($query);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulir Edit Data Siswa Baru| SMK Coding</title>
</head>

<body>
  <header>
    <h3>Formulir Edit Data Siswa Baru</h3>
  </header>

  <form action="prosesedit.php" method="POST">
    <fieldset>
      <p>
        <input type="hidden" name="id" value="<?php echo $siswa['id']; ?>">
      </p>
      <p>
        <label for="nama">Nama:</label>
        <input type="text" name="nama" value="<?php echo $siswa['nama']; ?>"  placeholder="nama lengkap">
      </p>
      <p>
        <label for="alamat">Alamat:</label>
        <textarea name="alamat"><?php echo $siswa['alamat']; ?></textarea>
      </p>
      <p>
        <label for="jenis_kelamin">Jenis Kelamin:</label>
        <label><input type="radio" name="jenis_kelamin" value="Laki-laki" <?php echo ($siswa['jenis_kelamin'] == 'laki-laki') ? 'checked' : ''; ?>> Laki-laki</label>
        <label><input type="radio" name="jenis_kelamin" value="Perempuan" <?php echo ($siswa['jenis_kelamin'] == 'perempuan') ? 'checked' : ''; ?>> Perempuan</label>
      </p>
      <p>
        <label for="sekolah_asal">Sekolah Asal:</label>
        <input type="text" name="sekolah_asal" value="<?php echo $siswa['sekolah_asal']; ?>" placeholder="nama sekolah">
      </p>
      <p>
        <input type="submit" value="Simpan Perubahan" name="simpan_perubahan" />
      </p>
    </fieldset>
  </form>
</body>
</html>