<?php
/* @var $this SgeParticipaController */
/* @var $model SgeParticipa */

$this->breadcrumbs=array(
	'Sge Participas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SgeParticipa', 'url'=>array('index')),
	array('label'=>'Create SgeParticipa', 'url'=>array('create')),
	array('label'=>'View SgeParticipa', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage SgeParticipa', 'url'=>array('admin')),
);
?>

<h1>Update SgeParticipa <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>