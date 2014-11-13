<?php
/* @var $this SgeInscreveController */
/* @var $model SgeInscreve */

$this->breadcrumbs=array(
	'Sge Inscreves'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SgeInscreve', 'url'=>array('index')),
	array('label'=>'Create SgeInscreve', 'url'=>array('create')),
	array('label'=>'View SgeInscreve', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage SgeInscreve', 'url'=>array('admin')),
);
?>

<h1>Update SgeInscreve <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>