<?php
	$json = file_get_contents("kamar.json");
	$kamar = json_decode($json);
	$x=1;
?>
	<table border=1 cellpadding=10 cellspacing=0;>
	<tr>
		<th>No</th>
		<th>Nama Kamar</th>
		<th>Jumlah Pasien</th>
		<th>Fasilitas</th>
	</tr>
<?php
	foreach($kamar->kamar as $p){
		echo "<tr>";
		echo "<td>$x</td>";
		echo "<td>$p->nama_kamar</td>";
		echo "<td>$p->jumlah_pasien</td>";
		echo "<td>";
		foreach($p->fasilitas as $b){
			echo "TV : ".$b->tv;
			echo "<br>";
			echo "Ukuran : " . $b->ukuran;
			echo "<br>";
			echo "AC : ".$b->AC;
			echo "<br>";
			echo "Kamar Mandi : ".$b->kamar_mandi;
			echo "<br>";
		}
		echo "</td>";
		echo "</tr>";
		$x++;
		
	}
?>
</table>