<?php
/* @var $this SgeEventoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sge Eventos',
);

$this->menu=array(
	array('label'=>'Create SgeEvento', 'url'=>array('create')),
	array('label'=>'Manage SgeEvento', 'url'=>array('admin')),
);
?>

<h1>Sge Eventos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
