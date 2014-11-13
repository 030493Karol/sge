<?php
/* @var $this SgeUsuarioPossuiTipoController */
/* @var $model SgeUsuarioPossuiTipo */

$this->breadcrumbs=array(
	'Sge Usuario Possui Tipos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SgeUsuarioPossuiTipo', 'url'=>array('index')),
	array('label'=>'Create SgeUsuarioPossuiTipo', 'url'=>array('create')),
	array('label'=>'View SgeUsuarioPossuiTipo', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage SgeUsuarioPossuiTipo', 'url'=>array('admin')),
);
?>

<h1>Update SgeUsuarioPossuiTipo <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>