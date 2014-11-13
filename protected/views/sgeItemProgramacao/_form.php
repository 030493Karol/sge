<?php
/* @var $this SgeItemProgramacaoController */
/* @var $model SgeItemProgramacao */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'sge-item-programacao-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'data'); ?>
		<?php echo $form->textField($model,'data'); ?>
		<?php echo $form->error($model,'data'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hora'); ?>
		<?php echo $form->textField($model,'hora'); ?>
		<?php echo $form->error($model,'hora'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descrição'); ?>
		<?php echo $form->textField($model,'descrição',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'descrição'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'responsavel'); ?>
		<?php echo $form->textField($model,'responsavel',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'responsavel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'vagas'); ?>
		<?php echo $form->textField($model,'vagas'); ?>
		<?php echo $form->error($model,'vagas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'local'); ?>
		<?php echo $form->textField($model,'local',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'local'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Evento_idEvento'); ?>
		<?php echo $form->textField($model,'Evento_idEvento'); ?>
		<?php echo $form->error($model,'Evento_idEvento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Tipo_idTipo'); ?>
		<?php echo $form->textField($model,'Tipo_idTipo'); ?>
		<?php echo $form->error($model,'Tipo_idTipo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->