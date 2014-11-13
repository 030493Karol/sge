<?php
/* @var $this SgeEventoController */
/* @var $model SgeEvento */

$this->breadcrumbs=array(
	'Sge Eventos'=>array('index'),
	$model->idEvento,
);

$this->menu=array(
	array('label'=>'List SgeEvento', 'url'=>array('index')),
	array('label'=>'Create SgeEvento', 'url'=>array('create')),
	array('label'=>'Update SgeEvento', 'url'=>array('update', 'id'=>$model->idEvento)),
	array('label'=>'Delete SgeEvento', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idEvento),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SgeEvento', 'url'=>array('admin')),
);
?>

<h1>View SgeEvento #<?php echo $model->idEvento; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idEvento',
		'Sigla',
		'Descricao',
		'local',
		'DataIni',
		'DataFim',
		'Hora',
		'Vagas',
		'Tipo_idTipo',
		'Usuario_idUsuario',
	),
)); ?>
