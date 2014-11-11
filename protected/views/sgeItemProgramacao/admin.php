<?php
/* @var $this SgeItemProgramacaoController */
/* @var $model SgeItemProgramacao */

$this->breadcrumbs=array(
	'Sge Item Programacaos'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List SgeItemProgramacao', 'url'=>array('index')),
	array('label'=>'Create SgeItemProgramacao', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#sge-item-programacao-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Sge Item Programacaos</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'sge-item-programacao-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idItemProgramacao',
		'data',
		'hora',
		'descrição',
		'responsavel',
		'vagas',
		/*
		'local',
		'Evento_idEvento',
		'Tipo_idTipo',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
