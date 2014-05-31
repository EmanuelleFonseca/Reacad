<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';


?>


<section class="title">
        <div class="container">
            <div class="row-fluid">
                <div class="span6">
                    <h1>Login</h1>
                </div>
                <div class="span6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="index.html">Início</a> <span class="divider">/</span></li>
                        <li class="active">Login</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
<hr/>
<p>Por favor, preencha o formulário abaixo com suas credenciais de login:</p>

<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note">Os campos com <span class="required">*</span> são obrigatórios.</p>
      <div class="container">
	   <div class="container">
	   <div class="row">
		<?php echo $form->labelEx($model,'Usúario'); ?>
		<?php echo $form->textField($model,'username'); ?>
		<?php echo $form->error($model,'username', array("class" => "text-error")); ?>
	   </div>
 <br />   
	<div class="row">
		<?php echo $form->labelEx($model,'Senha'); ?>
		<?php echo $form->passwordField($model,'password'); ?>
		<?php echo $form->error($model,'password',  array("class" => "text-error")); ?>
		
	</div>
<br />
	<div class="row rememberMe">
		<?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->label($model,'rememberMe'); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
	</div>
<br />
	<div class="row buttons">
		<?php echo CHtml::submitButton('Login', array( 'class'=> 'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>
</div>
</div>

<!-- form -->

