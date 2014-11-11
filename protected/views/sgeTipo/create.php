<?php
/* @var $this SgeTipoController */
/* @var $model SgeTipo */

$this->breadcrumbs=array(
	'Sge Tipos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SgeTipo', 'url'=>array('index')),
	array('label'=>'Manage SgeTipo', 'url'=>array('admin')),
);
?>

<h1>Create SgeTipo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>