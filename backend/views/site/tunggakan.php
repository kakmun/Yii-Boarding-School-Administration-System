<?php
use yii\db\ActiveRecord;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<h1>Tunggakan</h1>
<?php



	echo "<table class='table table-bordered table-striped'>";
	echo "<tr>";
	echo "<th>Nama</th>";
	echo "<th>Banyak Bulan</th>";
	echo "<th>Total</th>";
	echo "</tr>";
	foreach ($tunggakan2 as $tunggakan) {
		echo "<tr>";
		echo "<td>".$tunggakan->nama."</td>";
		if($tunggakan->posisi >= 0){
			echo "<td>"."Tidak ada"."</td>";
		} else {
			echo "<td>".abs($tunggakan->posisi)."</td>";
		}

		if($tunggakan->posisi >= 0){
			echo "<td>"."Tidak ada"."</td>";
		} else {
			echo "<td>".(abs($tunggakan->posisi)*$tunggakan->tarif)."</td>";
		}	
		
		echo "</tr>";
	}
	echo "</table>";
?>	

