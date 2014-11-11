<?php
/* @var $this SgeEventoController */
/* @var $model SgeEvento */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'sge-evento-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Sigla'); ?>
		<?php echo $form->textField($model,'Sigla',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Sigla'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Descrição'); ?>
		<?php echo $form->textField($model,'Descrição',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Descrição'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'local'); ?>
		<?php echo $form->textField($model,'local',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'local'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DataIni'); ?>
		<?php echo $form->textField($model,'DataIni'); ?>
		<?php echo $form->error($model,'DataIni'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DataFim'); ?>
		<?php echo $form->textField($model,'DataFim'); ?>
		<?php echo $form->error($model,'DataFim'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Vagas'); ?>
		<?php echo $form->textField($model,'Vagas',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Vagas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Tipo_idTipo'); ?>
		<?php echo $form->textField($model,'Tipo_idTipo'); ?>
		<?php echo $form->error($model,'Tipo_idTipo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Usuario_idUsuario'); ?>
		<?php echo $form->textField($model,'Usuario_idUsuario'); ?>
		<?php echo $form->error($model,'Usuario_idUsuario'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->