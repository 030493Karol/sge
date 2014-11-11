<?php
/* @var $this SgeEventoController */
/* @var $model SgeEvento */

$this->breadcrumbs=array(
	'Sge Eventos'=>array('index'),
	$model->idEvento=>array('view','id'=>$model->idEvento),
	'Update',
);

$this->menu=array(
	array('label'=>'List SgeEvento', 'url'=>array('index')),
	array('label'=>'Create SgeEvento', 'url'=>array('create')),
	array('label'=>'View SgeEvento', 'url'=>array('view', 'id'=>$model->idEvento)),
	array('label'=>'Manage SgeEvento', 'url'=>array('admin')),
);
?>

<h1>Update SgeEvento <?php echo $model->idEvento; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>