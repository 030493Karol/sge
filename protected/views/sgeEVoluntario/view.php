<?php
/* @var $this SgeEVoluntarioController */
/* @var $model SgeEVoluntario */

$this->breadcrumbs=array(
	'Sge Evoluntarios'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List SgeEVoluntario', 'url'=>array('index')),
	array('label'=>'Create SgeEVoluntario', 'url'=>array('create')),
	array('label'=>'Update SgeEVoluntario', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete SgeEVoluntario', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SgeEVoluntario', 'url'=>array('admin')),
);
?>

<h1>View SgeEVoluntario #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'Evento_idEvento',
		'Usuario_idUsuario',
	),
)); ?>
