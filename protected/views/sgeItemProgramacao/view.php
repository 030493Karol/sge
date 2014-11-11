<?php
/* @var $this SgeItemProgramacaoController */
/* @var $model SgeItemProgramacao */

$this->breadcrumbs=array(
	'Sge Item Programacaos'=>array('index'),
	$model->idItemProgramacao,
);

$this->menu=array(
	array('label'=>'List SgeItemProgramacao', 'url'=>array('index')),
	array('label'=>'Create SgeItemProgramacao', 'url'=>array('create')),
	array('label'=>'Update SgeItemProgramacao', 'url'=>array('update', 'id'=>$model->idItemProgramacao)),
	array('label'=>'Delete SgeItemProgramacao', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idItemProgramacao),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SgeItemProgramacao', 'url'=>array('admin')),
);
?>

<h1>View SgeItemProgramacao #<?php echo $model->idItemProgramacao; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idItemProgramacao',
		'data',
		'hora',
		'descrição',
		'responsavel',
		'vagas',
		'local',
		'Evento_idEvento',
		'Tipo_idTipo',
	),
)); ?>
