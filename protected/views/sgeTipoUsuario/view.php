<?php
/* @var $this SgeTipoUsuarioController */
/* @var $model SgeTipoUsuario */

$this->breadcrumbs=array(
	'Sge Tipo Usuarios'=>array('index'),
	$model->idTipo_Usuario,
);

$this->menu=array(
	array('label'=>'List SgeTipoUsuario', 'url'=>array('index')),
	array('label'=>'Create SgeTipoUsuario', 'url'=>array('create')),
	array('label'=>'Update SgeTipoUsuario', 'url'=>array('update', 'id'=>$model->idTipo_Usuario)),
	array('label'=>'Delete SgeTipoUsuario', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idTipo_Usuario),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SgeTipoUsuario', 'url'=>array('admin')),
);
?>

<h1>View SgeTipoUsuario #<?php echo $model->idTipo_Usuario; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idTipo_Usuario',
		'Descricao',
	),
)); ?>
