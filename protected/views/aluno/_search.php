<?php
/* @var $this AlunoController */
/* @var $model Aluno */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>
    <!--
	<div class="row">
		<?php echo $form->label($model,'idAluno'); ?>
		<?php echo $form->textField($model,'idAluno'); ?>
	</div>
    -->
	<div class="row">
		<?php echo $form->label($model,'nomeAluno'); ?>
		<?php echo $form->textField($model,'nomeAluno',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'emailAluno'); ?>
		<?php echo $form->textField($model,'emailAluno',array('size'=>50,'maxlength'=>50)); ?>
	</div>
    <!--
	<div class="row">
		<?php echo $form->label($model,'codigoAluno'); ?>
		<?php echo $form->textField($model,'codigoAluno'); ?>
	</div>
    -->
	<div class="row">
		<?php echo $form->label($model,'telefoneAluno'); ?>
		<?php echo $form->textField($model,'telefoneAluno'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cursoAluno'); ?>
		<?php echo $form->textField($model,'cursoAluno',array('size'=>60,'maxlength'=>70)); ?>
	</div>
    <!--
	<div class="row">
		<?php echo $form->label($model,'senhaAluno'); ?>
		<?php echo $form->textField($model,'senhaAluno',array('size'=>10,'maxlength'=>10)); ?>
	</div>
    -->
	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->