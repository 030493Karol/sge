<?php
/* @var $this SgeUsuarioController */
/* @var $model SgeUsuario */

$this->breadcrumbs=array(
	'Sge Usuarios'=>array('index'),
	$model->idUsuario=>array('view','id'=>$model->idUsuario),
	'Update',
);

$this->menu=array(
	array('label'=>'List SgeUsuario', 'url'=>array('index')),
	array('label'=>'Create SgeUsuario', 'url'=>array('create')),
	array('label'=>'View SgeUsuario', 'url'=>array('view', 'id'=>$model->idUsuario)),
	array('label'=>'Manage SgeUsuario', 'url'=>array('admin')),
);
?>

<h1>Update SgeUsuario <?php echo $model->idUsuario; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>