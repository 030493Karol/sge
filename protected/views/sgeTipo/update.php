<?php
/* @var $this SgeTipoController */
/* @var $model SgeTipo */

$this->breadcrumbs=array(
	'Sge Tipos'=>array('index'),
	$model->idTipo=>array('view','id'=>$model->idTipo),
	'Update',
);

$this->menu=array(
	array('label'=>'List SgeTipo', 'url'=>array('index')),
	array('label'=>'Create SgeTipo', 'url'=>array('create')),
	array('label'=>'View SgeTipo', 'url'=>array('view', 'id'=>$model->idTipo)),
	array('label'=>'Manage SgeTipo', 'url'=>array('admin')),
);
?>

<h1>Update SgeTipo <?php echo $model->idTipo; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>