<?php
use yii\helpers\Html;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>

<h1>Data Santri</h1>
<?php



	echo "<table class='table table-bordered table-striped'>";
	echo "<tr>";
	echo "<th>No Induk</th>";
	echo "<th>Nama</th>";
	echo "<th>Alamat</th>";
	echo "<th>Tempat tanggal lahir</th>";
	echo "<th>Wali</th>";
	echo "<th>Tanggal Masuk</th>";
	echo "<th>Edit</th>";
	echo "</tr>";
	foreach ($santri2 as $santri) {
		echo "<tr>";
		echo "<td>".$santri->no_induk."</td>";
		echo "<td>".$santri->nama."</td>";
		echo "<td>".$santri->alamat."</td>";
		echo "<td>".$santri->tmp_lahir.", ".$santri->tgl_lahir."</td>";
		echo "<td>".$santri->wali."</td>";
		echo "<td>".$santri->masuk."</td>";
		
		echo "<td>";
			echo Html::a('<i class="glyphicon glyphicon-pencil"></i>',['santri/update','id'=>$santri->no_induk]);
		echo "</td>";

		
		echo "</tr>";
	}
	echo "</table>";
?>	
