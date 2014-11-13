<?php
/* @var $this SgeEVoluntarioController */
/* @var $model SgeEVoluntario */

$this->breadcrumbs=array(
	'Sge Evoluntarios'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SgeEVoluntario', 'url'=>array('index')),
	array('label'=>'Create SgeEVoluntario', 'url'=>array('create')),
	array('label'=>'View SgeEVoluntario', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage SgeEVoluntario', 'url'=>array('admin')),
);
?>

<h1>Update SgeEVoluntario <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>