<?php
/* @var $this SgeSecretarioController */
/* @var $model SgeSecretario */

$this->breadcrumbs=array(
	'Sge Secretarios'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SgeSecretario', 'url'=>array('index')),
	array('label'=>'Create SgeSecretario', 'url'=>array('create')),
	array('label'=>'View SgeSecretario', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage SgeSecretario', 'url'=>array('admin')),
);
?>

<h1>Update SgeSecretario <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>