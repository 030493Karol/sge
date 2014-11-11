<?php
/* @var $this SgeItemProgramacaoController */
/* @var $model SgeItemProgramacao */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idItemProgramacao'); ?>
		<?php echo $form->textField($model,'idItemProgramacao'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'data'); ?>
		<?php echo $form->textField($model,'data'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hora'); ?>
		<?php echo $form->textField($model,'hora'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descrição'); ?>
		<?php echo $form->textField($model,'descrição',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'responsavel'); ?>
		<?php echo $form->textField($model,'responsavel',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'vagas'); ?>
		<?php echo $form->textField($model,'vagas'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'local'); ?>
		<?php echo $form->textField($model,'local',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Evento_idEvento'); ?>
		<?php echo $form->textField($model,'Evento_idEvento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Tipo_idTipo'); ?>
		<?php echo $form->textField($model,'Tipo_idTipo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->