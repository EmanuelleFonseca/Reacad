<?php
/* @var $this ProfessorController */
/* @var $model Professor */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idProfessor'); ?>
		<?php echo $form->textField($model,'idProfessor'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nomeProfessor'); ?>
		<?php echo $form->textField($model,'nomeProfessor',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'emailProfessor'); ?>
		<?php echo $form->textField($model,'emailProfessor',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telefoneProfessor'); ?>
		<?php echo $form->textField($model,'telefoneProfessor'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'senhaProfessor'); ?>
		<?php echo $form->textField($model,'senhaProfessor'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'areaEnsino'); ?>
		<?php echo $form->textField($model,'areaEnsino',array('size'=>60,'maxlength'=>90)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'siape'); ?>
		<?php echo $form->textField($model,'siape'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->