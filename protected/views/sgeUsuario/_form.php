<?php
/* @var $this SgeUsuarioController */
/* @var $model SgeUsuario */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'sge-usuario-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'idUsuario'); ?>
		<?php echo $form->textField($model,'idUsuario'); ?>
		<?php echo $form->error($model,'idUsuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nome'); ?>
		<?php echo $form->textField($model,'nome',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nome'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cracha'); ?>
		<?php echo $form->textField($model,'cracha',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'cracha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'senha'); ?>
		<?php echo $form->textField($model,'senha',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'senha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Instituicao'); ?>
		<?php echo $form->textField($model,'Instituicao',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Instituicao'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->