<?php
/* @var $this SgeInscreveController */
/* @var $data SgeInscreve */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Usuario_idUsuario')); ?>:</b>
	<?php echo CHtml::encode($data->Usuario_idUsuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Evento_idEvento')); ?>:</b>
	<?php echo CHtml::encode($data->Evento_idEvento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Comprovante')); ?>:</b>
	<?php echo CHtml::encode($data->Comprovante); ?>
	<br />


</div>