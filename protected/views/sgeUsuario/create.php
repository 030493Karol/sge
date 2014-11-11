<?php
/* @var $this SgeUsuarioController */
/* @var $model SgeUsuario */

$this->breadcrumbs=array(
	'Sge Usuarios'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SgeUsuario', 'url'=>array('index')),
	array('label'=>'Manage SgeUsuario', 'url'=>array('admin')),
);
?>

<h1>Create SgeUsuario</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>