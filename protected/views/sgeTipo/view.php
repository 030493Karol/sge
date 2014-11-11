<?php
/* @var $this SgeTipoController */
/* @var $model SgeTipo */

$this->breadcrumbs=array(
	'Sge Tipos'=>array('index'),
	$model->idTipo,
);

$this->menu=array(
	array('label'=>'List SgeTipo', 'url'=>array('index')),
	array('label'=>'Create SgeTipo', 'url'=>array('create')),
	array('label'=>'Update SgeTipo', 'url'=>array('update', 'id'=>$model->idTipo)),
	array('label'=>'Delete SgeTipo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idTipo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SgeTipo', 'url'=>array('admin')),
);
?>

<h1>View SgeTipo #<?php echo $model->idTipo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idTipo',
		'descrição',
	),
)); ?>
