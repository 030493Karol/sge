<?php
/* @var $this SgeTipoController */
/* @var $data SgeTipo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idTipo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idTipo), array('view', 'id'=>$data->idTipo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descrição')); ?>:</b>
	<?php echo CHtml::encode($data->descrição); ?>
	<br />


</div>