<?php
/* @var $this SgeParticipaController */
/* @var $model SgeParticipa */

$this->breadcrumbs=array(
	'Sge Participas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SgeParticipa', 'url'=>array('index')),
	array('label'=>'Manage SgeParticipa', 'url'=>array('admin')),
);
?>

<h1>Create SgeParticipa</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>