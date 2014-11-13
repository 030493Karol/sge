<?php
/* @var $this SgeUsuarioPossuiTipoController */
/* @var $model SgeUsuarioPossuiTipo */

$this->breadcrumbs=array(
	'Sge Usuario Possui Tipos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SgeUsuarioPossuiTipo', 'url'=>array('index')),
	array('label'=>'Manage SgeUsuarioPossuiTipo', 'url'=>array('admin')),
);
?>

<h1>Create SgeUsuarioPossuiTipo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>