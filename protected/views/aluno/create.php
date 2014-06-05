<?php
/* @var $this AlunoController */
/* @var $model Aluno */
$this->pageTitle=Yii::app()->name . ' - Cadastro de Alunos';
?>


<section class="title">
   <div class="container">
      <div class="row-fluid">
         <div class="span6">
            <h1>Cadastre-se</h1>
         </div>
         <div class="span5">
            <ul class="breadcrumb pull-right">
               <li>
            	   <?php echo CHtml::link(CHtml::encode('Início'), array('/site/index')); ?>
                   <span class="divider">/</span>
               </li>
               <li class="active">Cadastro</li>
            </ul>
         </div>
      </div>
   </div>
</section>


<?php $this->renderPartial('_form', array('model'=>$model)); ?>