<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<h1>Tunggakan</h1>
<?php


	// foreach ($saldo2 as $saldo) {
		// echo ($saldo->tgl."<br>");
	// }

	//echo $date."<br>";
	//echo $date-2;
	$i=0;
	$saldo_awal=5000;

		
	echo "<table class='table table-bordered table-striped'>";
	echo "<tr>";
	echo "<th>No</th>";
	echo "<th>Tanggal</th>";
	echo "<th>Debet</th>";
	echo "<th>Kredit</th>";
	echo "<th>Saldo</th>";
	echo "<th>Keterangan</th>";
	echo "</tr>";		
	
	foreach ($kas2 as $transaksi) {

		if($i<1){
			$saldo = $transaksi->debet-$transaksi->kredit;
		}
		else{
			$saldo +=  $transaksi->debet-$transaksi->kredit;
		}
		echo "<tr>";
			echo "<td>".$i."</td>";
			echo "<td>".$transaksi->tgl."</td>";
			echo "<td>".$transaksi->debet."</td>";
			echo "<td>".$transaksi->kredit."</td>";
			echo "<td>".$saldo."</td>";
			echo "<td>".$transaksi->ket."</td>";
			
			$i+=1;
		echo "</tr>";

	}
	echo "</table>";
?>	


