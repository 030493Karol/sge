<?php
/* @var $this SgeTipoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sge Tipos',
);

$this->menu=array(
	array('label'=>'Create SgeTipo', 'url'=>array('create')),
	array('label'=>'Manage SgeTipo', 'url'=>array('admin')),
);
?>

<h1>Sge Tipos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
