<?php $this->output('siswa/menu');?>
<form action="" method="post">
Nama : <input type="text" name="nama"/><br>
Alamat : <textarea name="alamat" maxlength="220"></textarea><br>
<input type="submit" name="simpan" value="Simpan"/>
</form>
<br>
<?php echo $stt; ?>