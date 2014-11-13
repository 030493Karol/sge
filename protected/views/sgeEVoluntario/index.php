<?php
/* @var $this SgeEVoluntarioController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sge Evoluntarios',
);

$this->menu=array(
	array('label'=>'Create SgeEVoluntario', 'url'=>array('create')),
	array('label'=>'Manage SgeEVoluntario', 'url'=>array('admin')),
);
?>

<h1>Sge Evoluntarios</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
