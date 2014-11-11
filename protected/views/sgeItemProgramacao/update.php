<?php
/* @var $this SgeItemProgramacaoController */
/* @var $model SgeItemProgramacao */

$this->breadcrumbs=array(
	'Sge Item Programacaos'=>array('index'),
	$model->idItemProgramacao=>array('view','id'=>$model->idItemProgramacao),
	'Update',
);

$this->menu=array(
	array('label'=>'List SgeItemProgramacao', 'url'=>array('index')),
	array('label'=>'Create SgeItemProgramacao', 'url'=>array('create')),
	array('label'=>'View SgeItemProgramacao', 'url'=>array('view', 'id'=>$model->idItemProgramacao)),
	array('label'=>'Manage SgeItemProgramacao', 'url'=>array('admin')),
);
?>

<h1>Update SgeItemProgramacao <?php echo $model->idItemProgramacao; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>