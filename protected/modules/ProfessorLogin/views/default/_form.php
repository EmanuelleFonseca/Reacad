<?php
/* @var $this ProfessorController */
/* @var $model Professor */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'professor-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nomeProfessor'); ?>
		<?php echo $form->textField($model,'nomeProfessor',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'nomeProfessor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'emailProfessor'); ?>
		<?php echo $form->textField($model,'emailProfessor',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'emailProfessor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefoneProfessor'); ?>
		<?php echo $form->textField($model,'telefoneProfessor'); ?>
		<?php echo $form->error($model,'telefoneProfessor'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'areaEnsino'); ?>
		<?php echo $form->textField($model,'areaEnsino',array('size'=>60,'maxlength'=>90)); ?>
		<?php echo $form->error($model,'areaEnsino'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'siape'); ?>
		<?php echo $form->textField($model,'siape'); ?>
		<?php echo $form->error($model,'siape'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'Foto de Perfil'); ?>
		<?php echo $form->fileField($model,'imgPerfil',array('size'=>60,'maxlength'=>70)); ?>
		<?php echo $form->error($model,'imgPerfil'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'senhaProfessor'); ?>
		<?php echo $form->textField($model,'senhaProfessor'); ?>
		<?php echo $form->error($model,'senhaProfessor'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->