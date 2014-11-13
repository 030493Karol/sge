<?php
/* @var $this SgeInscreveController */
/* @var $model SgeInscreve */

$this->breadcrumbs=array(
	'Sge Inscreves'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List SgeInscreve', 'url'=>array('index')),
	array('label'=>'Create SgeInscreve', 'url'=>array('create')),
	array('label'=>'Update SgeInscreve', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete SgeInscreve', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SgeInscreve', 'url'=>array('admin')),
);
?>

<h1>View SgeInscreve #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'Usuario_idUsuario',
		'Evento_idEvento',
		'Comprovante',
	),
)); ?>
