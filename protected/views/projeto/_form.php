<?php
/* @var $this ProjetoController */
/* @var $model Projeto */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'projeto-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

<?php
    Yii::app()->clientScript->registerScript('search', "
        $('.search-button').click(function(){
                $('.doc-form').toggle();
                return false;
        });
        $('.doc-form form').submit(function(){
                $.fn.yiiGridView.update('document-grid', {
                        data: $(this).serialize()
                });
                return false;
        });
        ");
?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'tituloProjeto'); ?>
		<?php echo $form->textField($model,'tituloProjeto',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'tituloProjeto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'disciplina'); ?>
		<?php echo $form->textField($model,'disciplina',array('size'=>60,'maxlength'=>90)); ?>
		<?php echo $form->error($model,'disciplina'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'palavrasChave'); ?>
		<?php echo $form->textField($model,'palavrasChave',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'palavrasChave'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'projeto'); ?>
	    <?php echo $form->fileField($model,'projeto',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'projeto'); ?>
		

	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idAluno'); ?>
		<?php echo $form->textField($model,'idAluno'); ?>
		<?php echo $form->error($model,'idAluno'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

</body>
</html>
