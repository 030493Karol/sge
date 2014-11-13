<?php
/* @var $this SgeParticipaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sge Participas',
);

$this->menu=array(
	array('label'=>'Create SgeParticipa', 'url'=>array('create')),
	array('label'=>'Manage SgeParticipa', 'url'=>array('admin')),
);
?>

<h1>Sge Participas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
