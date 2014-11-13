<?php
/* @var $this SgeUsuarioPossuiTipoController */
/* @var $model SgeUsuarioPossuiTipo */

$this->breadcrumbs=array(
	'Sge Usuario Possui Tipos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List SgeUsuarioPossuiTipo', 'url'=>array('index')),
	array('label'=>'Create SgeUsuarioPossuiTipo', 'url'=>array('create')),
	array('label'=>'Update SgeUsuarioPossuiTipo', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete SgeUsuarioPossuiTipo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SgeUsuarioPossuiTipo', 'url'=>array('admin')),
);
?>

<h1>View SgeUsuarioPossuiTipo #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'Usuario_idUsuario',
		'Tipo_Usuario_idTipo_Usuario',
	),
)); ?>
