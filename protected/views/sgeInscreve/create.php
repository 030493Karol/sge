<?php
/* @var $this SgeInscreveController */
/* @var $model SgeInscreve */

$this->breadcrumbs=array(
	'Sge Inscreves'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SgeInscreve', 'url'=>array('index')),
	array('label'=>'Manage SgeInscreve', 'url'=>array('admin')),
);
?>

<h1>Create SgeInscreve</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>