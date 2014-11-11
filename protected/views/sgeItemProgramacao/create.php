<?php
/* @var $this SgeItemProgramacaoController */
/* @var $model SgeItemProgramacao */

$this->breadcrumbs=array(
	'Sge Item Programacaos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SgeItemProgramacao', 'url'=>array('index')),
	array('label'=>'Manage SgeItemProgramacao', 'url'=>array('admin')),
);
?>

<h1>Create SgeItemProgramacao</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>