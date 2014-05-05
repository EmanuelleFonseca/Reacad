<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
<br/><br/>


<?php $this->beginWidget('bootstrap.widgets.TbHeroUnit', array(
    //'heading'=>'Bem vindo ao REACAD!',
	'htmlOptions' => array('class' => 'hero-unit'),
)); ?>
  <br />
  <div class="row">
  <div class="thumbnail span6">
    <img src="imagens/img_index.jpg" alt="Sample Image">
  </div>
  <div class="span4">
  <h2>Bem vindo ao Reacad!</h2>
  <p> Este repositório foi criado com objetivo de preservar e difundir a produção científica do corpo discente do IFMA. 
      Se você é aluno do Campus Monte Castelo - São Luís, faça seu cadastro e mostre seus projetos a todos, através do Reacad.</p>
 
 
  <p><a class="btn btn-primary btn-large" href = "http://localhost/reacad/index.php?r=site/page&view=about">Conheça melhor</a></p>
   </div> 
</div>

<?php $this->endWidget(); ?>







