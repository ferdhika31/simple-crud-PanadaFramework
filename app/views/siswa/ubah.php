<?php $this->output('siswa/menu');?>
<form action="" method="post">
Nama : <input type="text" name="nama" value="<?php echo $data->nama;?>" /><br>
Alamat : <textarea name="alamat" maxlength="220"><?php echo $data->alamat;?></textarea><br>
<input type="submit" name="ubah" value="Ubah"/>
</form>
<br>
<?php echo $stt; ?>