<?php
/* @var $this SgeTipoUsuarioController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sge Tipo Usuarios',
);

$this->menu=array(
	array('label'=>'Create SgeTipoUsuario', 'url'=>array('create')),
	array('label'=>'Manage SgeTipoUsuario', 'url'=>array('admin')),
);
?>

<h1>Sge Tipo Usuarios</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
