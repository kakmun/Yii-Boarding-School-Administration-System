<?php
use yii\helpers\Html;
//use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>

<h1>Pembayaran Syahriyah</h1>
	<p>
        <?= Html::a('Bayar Syahriyah', ['syahriyah/create_mod_sy'], ['class' => 'btn btn-success']) ?>
	</p>
		<?php
	//	echo Url::toRoute('site/index');



	echo "<table class='table table-bordered table-striped'>";
	echo "<tr>";

	echo "<th>Nama</th>";
	echo "<th>Tanggal</th>";
	echo "<th>Banyak</th>";
	echo "<th>Total</th>";

	echo "</tr>";
	foreach ($bayar as $bayar) {
		$total = ($bayar['banyak']*$bayar['tarif']);
		echo "<tr>";

		echo "<td>".$bayar['nama']."</td>";
		echo "<td>".$bayar['tgl']."</td>";
		echo "<td>".$bayar['banyak']."</td>";
		echo "<td>".$total."</td>";
		
		echo "<td>";
			echo Html::a('<i class="glyphicon glyphicon-pencil"></i>',['syahriyah/update','id'=>$bayar['no_syahriyah']]);
		echo "</td>";

		
		echo "</tr>";
	}
	echo "</table>";
?>	
