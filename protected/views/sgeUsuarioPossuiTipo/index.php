<?php
/* @var $this SgeUsuarioPossuiTipoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sge Usuario Possui Tipos',
);

$this->menu=array(
	array('label'=>'Create SgeUsuarioPossuiTipo', 'url'=>array('create')),
	array('label'=>'Manage SgeUsuarioPossuiTipo', 'url'=>array('admin')),
);
?>

<h1>Sge Usuario Possui Tipos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
