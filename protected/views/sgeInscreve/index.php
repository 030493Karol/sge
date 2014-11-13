<?php
/* @var $this SgeInscreveController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sge Inscreves',
);

$this->menu=array(
	array('label'=>'Create SgeInscreve', 'url'=>array('create')),
	array('label'=>'Manage SgeInscreve', 'url'=>array('admin')),
);
?>

<h1>Sge Inscreves</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
