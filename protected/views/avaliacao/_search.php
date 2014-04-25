<?php
/* @var $this AvaliacaoController */
/* @var $model Avaliacao */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idAvaliacao'); ?>
		<?php echo $form->textField($model,'idAvaliacao'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nota'); ?>
		<?php echo $form->textField($model,'nota'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idProfessor'); ?>
		<?php echo $form->textField($model,'idProfessor'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idProjeto'); ?>
		<?php echo $form->textField($model,'idProjeto'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->