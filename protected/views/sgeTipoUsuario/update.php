<?php
/* @var $this SgeTipoUsuarioController */
/* @var $model SgeTipoUsuario */

$this->breadcrumbs=array(
	'Sge Tipo Usuarios'=>array('index'),
	$model->idTipo_Usuario=>array('view','id'=>$model->idTipo_Usuario),
	'Update',
);

$this->menu=array(
	array('label'=>'List SgeTipoUsuario', 'url'=>array('index')),
	array('label'=>'Create SgeTipoUsuario', 'url'=>array('create')),
	array('label'=>'View SgeTipoUsuario', 'url'=>array('view', 'id'=>$model->idTipo_Usuario)),
	array('label'=>'Manage SgeTipoUsuario', 'url'=>array('admin')),
);
?>

<h1>Update SgeTipoUsuario <?php echo $model->idTipo_Usuario; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>