<?php $this->output('siswa/menu');?>
<table border="1">
<tr>
	<th>No</th>
	<th>Nama</th>
	<th>Alamat</th>
	<th>Aksi</th>
</tr>
<?php
	if(!empty($data)){
		$no=1;
		foreach ($data as $data) {
			echo "
			<tr>
				<td>".$no."</td>
				<td>".$data->nama."</td>
				<td>".$data->alamat."</td>
				<td>
					<a href='".$this->uri->baseUri."index.php/siswa/lihat/".$data->id."'>Lihat</a> | 
					<a href='".$this->uri->baseUri."index.php/siswa/ubah/".$data->id."'>Ubah</a> | 
					<a href='".$this->uri->baseUri."index.php/siswa/hapus/".$data->id."'>Hapus</a>
				</td>
			</tr>	
			";
			$no++;
		}
	}else{
		echo "<tr>
			<td colspan='4'>Tidak ada data</td>
		</tr>";
	}
?>
</table>