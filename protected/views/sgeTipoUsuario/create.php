<?php
/* @var $this SgeTipoUsuarioController */
/* @var $model SgeTipoUsuario */

$this->breadcrumbs=array(
	'Sge Tipo Usuarios'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SgeTipoUsuario', 'url'=>array('index')),
	array('label'=>'Manage SgeTipoUsuario', 'url'=>array('admin')),
);
?>

<h1>Create SgeTipoUsuario</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>