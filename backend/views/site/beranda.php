<?php
use yii\helpers\Html;
use yii\grid\GridView;
/* @var $this yii\web\View */


$this->title = 'My Yii Application';

?>

<?php 
	echo $kas['nama'];
?>


	
<!--<table border="1">
	<?php// foreach ($kass as $kasx): ?>
	<tr>
		<td><?//= $kasx->debet ?></td>
		<td><?//= $kasx->kredit ?></td>
		<td><?//= $kasx->saldo ?></td>
	</tr>
		<?php// endforeach; ?>
	</table>