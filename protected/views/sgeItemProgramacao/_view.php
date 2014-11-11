<?php
/* @var $this SgeItemProgramacaoController */
/* @var $data SgeItemProgramacao */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idItemProgramacao')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idItemProgramacao), array('view', 'id'=>$data->idItemProgramacao)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data')); ?>:</b>
	<?php echo CHtml::encode($data->data); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hora')); ?>:</b>
	<?php echo CHtml::encode($data->hora); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descrição')); ?>:</b>
	<?php echo CHtml::encode($data->descrição); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('responsavel')); ?>:</b>
	<?php echo CHtml::encode($data->responsavel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vagas')); ?>:</b>
	<?php echo CHtml::encode($data->vagas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('local')); ?>:</b>
	<?php echo CHtml::encode($data->local); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Evento_idEvento')); ?>:</b>
	<?php echo CHtml::encode($data->Evento_idEvento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Tipo_idTipo')); ?>:</b>
	<?php echo CHtml::encode($data->Tipo_idTipo); ?>
	<br />

	*/ ?>

</div>