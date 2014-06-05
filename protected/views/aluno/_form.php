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
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

	<p class="note">Campos com <span class="required">*</span> são obrigatórios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nomeAluno'); ?>
		<?php echo $form->textField($model,'nomeAluno',array('size'=>200,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'nomeAluno', array('class'=>'text-error')); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'emailAluno' ); ?>
		<?php echo $form->emailField($model,'emailAluno',array('size'=>50,'maxlength'=>50,'placeholder' => 'nome@exemplo.com')); ?>
		<?php echo $form->error($model,'emailAluno', array('class'=>'text-error')); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'codigoAluno'); ?>
		<?php echo $form->textField($model,'codigoAluno', array('placeholder' => 'Apenas números')); ?>
		<?php echo $form->error($model,'codigoAluno', array('class'=>'text-error')); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefoneAluno'); ?>
		<?php echo $form->textField($model,'telefoneAluno', array('placeholder' => '(XX) XXXX-XXXX')); ?>
		<?php echo $form->error($model,'telefoneAluno', array('class'=>'text-error')); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cursoAluno'); ?>
		<?php echo $form->dropDownList($model,'cursoAluno',array(
          'Design Gráfico'=>'Design Gráfico',
          'Edificações'=>'Edificações',
          'Eletromecânica'=>'Eletromecânica',
          'Eletrônica'=>'Eletrônica',
          'Eletrotécnica'=>'Eletrotécnica',
          'Eletrotécnica'=>'Eletrotécnica',
          'Informática'=>'Informática',
          'Mecânica'=>'Mecânica',
          'Metalurgia e Materiais'=>'Metalurgia e Materiais',
          'Portos'=>'Portos',
          'Química'=>'Química',
          'Segurança do Trabalho'=>'Segurança do Trabalho',
          'Telecomunicações'=>'Telecomunicações'
		  )); ?>
		<?php echo $form->error($model,'cursoAluno'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'curriculo'); ?>
		<?php echo $form->urlField($model,'curriculo',array('size'=>60,'maxlength'=>70, 'placeholder' => 'Ex: http://www.lattes.com')); ?>
		<?php echo $form->error($model,'curriculo'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'Foto de Perfil'. ' <span class="required">*</span>'); ?>
		<?php echo $form->fileField($model,'imgPerfil',array('size'=>60,'maxlength'=>70)); ?>
		<?php echo $form->error($model,'imgPerfil'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'senhaAluno'); ?>
		<?php echo $form->passwordField($model,'senhaAluno',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'senhaAluno', array('class'=>'text-error')); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>



</div><!-- form -->