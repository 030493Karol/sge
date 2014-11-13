<?php
/* @var $this SgeSecretarioController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sge Secretarios',
);

$this->menu=array(
	array('label'=>'Create SgeSecretario', 'url'=>array('create')),
	array('label'=>'Manage SgeSecretario', 'url'=>array('admin')),
);
?>

<h1>Sge Secretarios</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
