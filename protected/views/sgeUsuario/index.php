<?php
/* @var $this SgeUsuarioController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sge Usuarios',
);

$this->menu=array(
	array('label'=>'Create SgeUsuario', 'url'=>array('create')),
	array('label'=>'Manage SgeUsuario', 'url'=>array('admin')),
);
?>

<h1>Sge Usuarios</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
