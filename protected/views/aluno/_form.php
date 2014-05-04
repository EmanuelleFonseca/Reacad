<?php
/* @var $this AlunoController */
/* @var $model Aluno */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'aluno-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nomeAluno'); ?>
		<?php echo $form->textField($model,'nomeAluno',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'nomeAluno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'emailAluno'); ?>
		<?php echo $form->textField($model,'emailAluno',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'emailAluno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'codigoAluno'); ?>
		<?php echo $form->textField($model,'codigoAluno'); ?>
		<?php echo $form->error($model,'codigoAluno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefoneAluno'); ?>
		<?php echo $form->textField($model,'telefoneAluno'); ?>
		<?php echo $form->error($model,'telefoneAluno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cursoAluno'); ?>
		<?php echo $form->textField($model,'cursoAluno',array('size'=>60,'maxlength'=>70)); ?>
		<?php echo $form->error($model,'cursoAluno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'senhaAluno'); ?>
		<?php echo $form->passwordField($model,'senhaAluno',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'senhaAluno'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>



</div><!-- form -->