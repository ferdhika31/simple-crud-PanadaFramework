<?php $this->output('siswa/menu');?>
<table>
<tr>
	<td>Nama</td>
	<td>:</td>
	<td><?php echo $data->nama;?></td>
</tr>
<tr>
	<td>Alamat</td>
	<td>:</td>
	<td><?php echo $data->alamat;?></td>
</tr>
<tr>
	<td colspan="3"><a href="<?php echo $this->uri->baseUri;?>index.php/siswa/tampil">[kembali]</a></td>
</tr>
</table>