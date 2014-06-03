<?php
/* @var $this AvaliacaoController */
/* @var $model Avaliacao */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'avaliacao-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nota'); ?>
		<?php echo $form->dropDownList($model,'nota',array(
		  0 => 0,
		  1 => 1,
		  3 =>3,
		  4 =>4,
		  5 =>5,
		  6 =>6,
		  7 =>7,
		  8 =>8,
		  9 =>9,
		  10 =>10,)); ?>
		<?php echo $form->error($model,'nota'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->hiddenField($model,'idProjeto'); ?>
	</div>
	
	



	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->