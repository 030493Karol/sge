<?php
/* @var $this SgeEventoController */
/* @var $model SgeEvento */

$this->breadcrumbs=array(
	'Sge Eventos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SgeEvento', 'url'=>array('index')),
	array('label'=>'Manage SgeEvento', 'url'=>array('admin')),
);
?>

<h1>Create SgeEvento</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>