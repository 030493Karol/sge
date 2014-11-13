<?php
/* @var $this SgeUsuarioPossuiTipoController */
/* @var $data SgeUsuarioPossuiTipo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Usuario_idUsuario')); ?>:</b>
	<?php echo CHtml::encode($data->Usuario_idUsuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Tipo_Usuario_idTipo_Usuario')); ?>:</b>
	<?php echo CHtml::encode($data->Tipo_Usuario_idTipo_Usuario); ?>
	<br />


</div>