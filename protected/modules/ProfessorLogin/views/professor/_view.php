<?php
/* @var $this ProfessorController */
/* @var $data Professor */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idProfessor')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idProfessor), array('view', 'id'=>$data->idProfessor)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nomeProfessor')); ?>:</b>
	<?php echo CHtml::encode($data->nomeProfessor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emailProfessor')); ?>:</b>
	<?php echo CHtml::encode($data->emailProfessor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefoneProfessor')); ?>:</b>
	<?php echo CHtml::encode($data->telefoneProfessor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('senhaProfessor')); ?>:</b>
	<?php echo CHtml::encode($data->senhaProfessor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('areaEnsino')); ?>:</b>
	<?php echo CHtml::encode($data->areaEnsino); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('siape')); ?>:</b>
	<?php echo CHtml::encode($data->siape); ?>
	<br />


</div>