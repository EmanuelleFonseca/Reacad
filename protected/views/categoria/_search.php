<?php
/* @var $this CategoriaController */
/* @var $model Categoria */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idCategoria'); ?>
		<?php echo $form->textField($model,'idCategoria'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NomeCategoria'); ?>
		<?php echo $form->textField($model,'NomeCategoria',array('size'=>60,'maxlength'=>90)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->