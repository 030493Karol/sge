<?php
/* @var $this SgeParticipaController */
/* @var $model SgeParticipa */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'sge-participa-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Usuario_idUsuario'); ?>
		<?php echo $form->textField($model,'Usuario_idUsuario'); ?>
		<?php echo $form->error($model,'Usuario_idUsuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ItemProgramacao_idItemProgramacao'); ?>
		<?php echo $form->textField($model,'ItemProgramacao_idItemProgramacao'); ?>
		<?php echo $form->error($model,'ItemProgramacao_idItemProgramacao'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->