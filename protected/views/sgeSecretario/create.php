<?php
/* @var $this SgeSecretarioController */
/* @var $model SgeSecretario */

$this->breadcrumbs=array(
	'Sge Secretarios'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SgeSecretario', 'url'=>array('index')),
	array('label'=>'Manage SgeSecretario', 'url'=>array('admin')),
);
?>

<h1>Create SgeSecretario</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>