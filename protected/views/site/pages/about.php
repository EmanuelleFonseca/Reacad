<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - Sobre';
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
               <li class="active">Sobre</li>
            </ul>
         </div>
      </div>
   </div>
</section>
 
<div class="row-fluid">
   <li class = "span1">
   	
   </li>
   <li class = "span10">
   <h2>O que é o Reacad:</h2>
   <hr>
   <p align="justify">
   	   O REACAD é o Repositório Acadêmico feito para alunos da modalidade de ensino Técnico Integrado do Instituto Federal de Educação, 
   	   Ciência e Tecnologia do Maranhão - Campus Monte Castelo/ São Luís -MA. Aqui, estes alunos (devidamente já cadastrados) poderão mostrar 
   	   sua produção científica criada ao longo de sua vida letiva no IFMA. 
   	   Os projetos enviados serão avaliados por uma bancada de professores do próprio IFMA e terão notas de 0 a 10 estrelas; todos os direitos das produções
   	   são reservados aos autores, porém estas poderão ser acessadas por empresas filiadas aos programas de estágio do IFMA, por professores em busca de orientandos 
   	   para projetos - como o PIBIC - EM e o PIBIC - Jr - e também pela comunidade externa ao IFMA que deseja conhecer a produção científica nascida no
   	   Instituto Federal. 
   	   
   	   Para mais informações acesso nossa <?php echo CHtml::link(CHtml::encode('F.A.Q.'), array('/site/page', 'view'=>'faq')); ?>
   	   </p>
   </li>
   <li class = "span2">
   	
   </li>       
     
</div>



<div class="row-fluid">
  <li class = "span8">
  	
  </li>
  <li class = "span4">
  <h5 class="center">Desenvolvedora: Emanuelle de A. Fonseca</h5>

   
  
  </li>

</div>
<hr>
<br/>        