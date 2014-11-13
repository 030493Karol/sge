<?php
/* @var $this SgeEVoluntarioController */
/* @var $model SgeEVoluntario */

$this->breadcrumbs=array(
	'Sge Evoluntarios'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SgeEVoluntario', 'url'=>array('index')),
	array('label'=>'Manage SgeEVoluntario', 'url'=>array('admin')),
);
?>

<h1>Create SgeEVoluntario</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>