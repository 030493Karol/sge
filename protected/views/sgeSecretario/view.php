<?php
/* @var $this SgeSecretarioController */
/* @var $model SgeSecretario */

$this->breadcrumbs=array(
	'Sge Secretarios'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List SgeSecretario', 'url'=>array('index')),
	array('label'=>'Create SgeSecretario', 'url'=>array('create')),
	array('label'=>'Update SgeSecretario', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete SgeSecretario', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SgeSecretario', 'url'=>array('admin')),
);
?>

<h1>View SgeSecretario #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'Usuario_idUsuario',
		'Evento_idEvento',
	),
)); ?>
