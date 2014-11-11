<?php
/* @var $this SgeItemProgramacaoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sge Item Programacaos',
);

$this->menu=array(
	array('label'=>'Create SgeItemProgramacao', 'url'=>array('create')),
	array('label'=>'Manage SgeItemProgramacao', 'url'=>array('admin')),
);
?>

<h1>Sge Item Programacaos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
