<?php
/* @var $this SgeParticipaController */
/* @var $data SgeParticipa */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Usuario_idUsuario')); ?>:</b>
	<?php echo CHtml::encode($data->Usuario_idUsuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ItemProgramacao_idItemProgramacao')); ?>:</b>
	<?php echo CHtml::encode($data->ItemProgramacao_idItemProgramacao); ?>
	<br />


</div>