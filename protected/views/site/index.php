<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<?php $this->beginWidget('bootstrap.widgets.TbHeroUnit', array(
    'htmlOptions' => array('class' => 'hero-unit'),
     )); 
?>

   <div class="row">
     <div class="thumbnail span6">
       <img src="imagens/img_index.jpg" alt="Sample Image">
     </div>
     <div class="span4">
        <h2>Bem vindo ao Reacad!</h2>
        
        <p align="justify"> 
        	Este repositório foi criado com objetivo de preservar e difundir a produção científica do corpo discente do IFMA. 
            Se você é aluno do Campus Monte Castelo - São Luís, faça seu cadastro e mostre seus projetos a todos, através do Reacad.
        </p>
        <p align="right">
        	<?php $this->widget('bootstrap.widgets.TbButton', array(
               'type'=>'primary',
               'label'=>'Conheça mais', 
               'url'=>array('/site/page', 'view'=>'about'),
			)); ?>
	    </p>
    </div> 
   </div>

<?php $this->endWidget(); ?>







