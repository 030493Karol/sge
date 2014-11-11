<?php
/* @var $this SgeEventoController */
/* @var $model SgeEvento */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idEvento'); ?>
		<?php echo $form->textField($model,'idEvento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Sigla'); ?>
		<?php echo $form->textField($model,'Sigla',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Descrição'); ?>
		<?php echo $form->textField($model,'Descrição',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'local'); ?>
		<?php echo $form->textField($model,'local',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DataIni'); ?>
		<?php echo $form->textField($model,'DataIni'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DataFim'); ?>
		<?php echo $form->textField($model,'DataFim'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Vagas'); ?>
		<?php echo $form->textField($model,'Vagas',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Tipo_idTipo'); ?>
		<?php echo $form->textField($model,'Tipo_idTipo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Usuario_idUsuario'); ?>
		<?php echo $form->textField($model,'Usuario_idUsuario'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->