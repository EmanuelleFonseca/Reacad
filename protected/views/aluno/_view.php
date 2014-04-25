<?php
/* @var $this AlunoController */
/* @var $data Aluno */
?>

<div class="view">
    
    <!--
	<b><?php echo CHtml::encode($data->getAttributeLabel('idAluno')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idAluno), array('view', 'id'=>$data->idAluno)); ?>
	<br />
	-->

	<b><?php echo CHtml::encode($data->getAttributeLabel('nomeAluno')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->nomeAluno), array('view', 'id'=>$data->idAluno)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emailAluno')); ?>:</b>
	<?php echo CHtml::encode($data->emailAluno); ?>
	<br />
    <!--
	<b><?php echo CHtml::encode($data->getAttributeLabel('codigoAluno')); ?>:</b>
	<?php echo CHtml::encode($data->codigoAluno); ?>
	<br />
	-->

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefoneAluno')); ?>:</b>
	<?php echo CHtml::encode($data->telefoneAluno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cursoAluno')); ?>:</b>
	<?php echo CHtml::encode($data->cursoAluno); ?>
	<br /><br />



</div>