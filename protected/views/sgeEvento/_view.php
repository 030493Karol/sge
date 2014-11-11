<?php
/* @var $this SgeEventoController */
/* @var $data SgeEvento */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idEvento')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idEvento), array('view', 'id'=>$data->idEvento)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Sigla')); ?>:</b>
	<?php echo CHtml::encode($data->Sigla); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Descrição')); ?>:</b>
	<?php echo CHtml::encode($data->Descrição); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('local')); ?>:</b>
	<?php echo CHtml::encode($data->local); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DataIni')); ?>:</b>
	<?php echo CHtml::encode($data->DataIni); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DataFim')); ?>:</b>
	<?php echo CHtml::encode($data->DataFim); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Vagas')); ?>:</b>
	<?php echo CHtml::encode($data->Vagas); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Tipo_idTipo')); ?>:</b>
	<?php echo CHtml::encode($data->Tipo_idTipo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Usuario_idUsuario')); ?>:</b>
	<?php echo CHtml::encode($data->Usuario_idUsuario); ?>
	<br />

	*/ ?>

</div>