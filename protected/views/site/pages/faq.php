<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . " - F.A.Q.";

?>
<section class="title">
   <div class="container">
      <div class="row-fluid">
         <div class="span6">
           
         </div>
         <div class="span5">
            <ul class="breadcrumb pull-right">
               <li>
            	   <?php echo CHtml::link(CHtml::encode('Início'), array('/site/index')); ?>
                   <span class="divider">/</span>
               </li>
               <li>
            	           <?php echo CHtml::link(CHtml::encode('Sobre'), array('/site/page', 'view'=>'about')); ?>
                           <span class="divider">/</span>
                        </li>
               <li class="active">F.A.Q.</li>
            </ul>
         </div>
      </div>
   </div>
</section>
  	
<br/>
<div class="row-fluid">
   <li class = "span1">
   	
   </li>
   <li class = "span10">
   <h2>Dúvidas Frequentes:</h2>
   <hr>
   <ul class="faq">
         <li>
            <div> 
                <h4>01. Quem pode acessar o Reacad?</h4>
                <p align="justify"> 
                	Alunos, professores, empresas filiadas aos programas de estágios do IFMA e a comunidade externa ao Instituto
                	Federal poderão acessar o reacad, tendo acesso a produção científica do Instituto e as capacidades de seus alunos.
                </p>
            </div>
        </li>
        <hr/>
        <li>
            <div>
                <h4>02. Quem pode fazer upload de projetos para o Reacad?</h4>
                <p align="justify">
                	Este repositório é de uso exclusivo dos alunos pertecentes ao Campus Monte Castelo/ São Luís-Ma 
                	do Instituto Federal de Educação, Ciência e Tecnologia,somente estes podem expor seus trabalhos 
                	nesta plataforma.
                </p>
			</div>
			
        </li>
<hr/>
<li>
            <div>
                <h4>03. Como é feita a avaliação do meu projeto?</h4>
                <p align="justify">
                	Depois que você faz o upload de seu projeto, ele é analisado por uma bancada de professores 
                	do próprio IFMA,estes por sua vez dão suas notas em critérios determinados de acordo com a área 
                	especifica de seu projeto, é feita a média das notas dadas e esta é mostrada juntamente com os 
                	outros dados de seu trabalho.</p>   
			</div>
        </li>
    </ul>
   </li>
   <li class = "span2">
   </li>       
     
</div>






