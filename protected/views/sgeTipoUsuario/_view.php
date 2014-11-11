<?php
/* @var $this SgeTipoUsuarioController */
/* @var $data SgeTipoUsuario */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idTipo_Usuario')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idTipo_Usuario), array('view', 'id'=>$data->idTipo_Usuario)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Descricao')); ?>:</b>
	<?php echo CHtml::encode($data->Descricao); ?>
	<br />


</div>