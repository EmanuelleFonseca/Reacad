<?php
/* @var $this ProjetoController */
/* @var $model Projeto */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idprojeto'); ?>
		<?php echo $form->textField($model,'idprojeto'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tituloProjeto'); ?>
		<?php echo $form->textField($model,'tituloProjeto',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'disciplina'); ?>
		<?php echo $form->textField($model,'disciplina',array('size'=>60,'maxlength'=>90)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'palavrasChave'); ?>
		<?php echo $form->textField($model,'palavrasChave',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'projeto'); ?>
		<?php echo $form->textField($model,'projeto',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idAluno'); ?>
		<?php echo $form->textField($model,'idAluno'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->