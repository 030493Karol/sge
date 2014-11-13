<?php
/* @var $this SgeEVoluntarioController */
/* @var $data SgeEVoluntario */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Evento_idEvento')); ?>:</b>
	<?php echo CHtml::encode($data->Evento_idEvento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Usuario_idUsuario')); ?>:</b>
	<?php echo CHtml::encode($data->Usuario_idUsuario); ?>
	<br />


</div>