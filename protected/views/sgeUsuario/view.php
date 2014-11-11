<?php
/* @var $this SgeUsuarioController */
/* @var $model SgeUsuario */

$this->breadcrumbs=array(
	'Sge Usuarios'=>array('index'),
	$model->idUsuario,
);

$this->menu=array(
	array('label'=>'List SgeUsuario', 'url'=>array('index')),
	array('label'=>'Create SgeUsuario', 'url'=>array('create')),
	array('label'=>'Update SgeUsuario', 'url'=>array('update', 'id'=>$model->idUsuario)),
	array('label'=>'Delete SgeUsuario', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idUsuario),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SgeUsuario', 'url'=>array('admin')),
);
?>

<h1>View SgeUsuario #<?php echo $model->idUsuario; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idUsuario',
		'nome',
		'cracha',
		'email',
		'senha',
		'Instituicao',
	),
)); ?>
