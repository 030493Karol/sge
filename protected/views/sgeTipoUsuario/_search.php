<?php
/* @var $this SgeTipoUsuarioController */
/* @var $model SgeTipoUsuario */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idTipo_Usuario'); ?>
		<?php echo $form->textField($model,'idTipo_Usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Descricao'); ?>
		<?php echo $form->textField($model,'Descricao',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->