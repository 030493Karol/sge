<?php
/* @var $this SgeParticipaController */
/* @var $model SgeParticipa */

$this->breadcrumbs=array(
	'Sge Participas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List SgeParticipa', 'url'=>array('index')),
	array('label'=>'Create SgeParticipa', 'url'=>array('create')),
	array('label'=>'Update SgeParticipa', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete SgeParticipa', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SgeParticipa', 'url'=>array('admin')),
);
?>

<h1>View SgeParticipa #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'Usuario_idUsuario',
		'ItemProgramacao_idItemProgramacao',
	),
)); ?>
