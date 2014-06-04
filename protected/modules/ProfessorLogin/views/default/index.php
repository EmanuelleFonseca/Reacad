<?php
/* @var $this DefaultController */


?>
<center><h1>Bem vindo, Professor(a)!</h1> <br/></center>
  <div class = "container">
  	<ul class="thumbnails">
  	  <li class="span1">
    
  </li>
  <li class="span3">
    <div class="thumbnail">
     <center>
     	<img src="imagens/prof.png" alt="" width="100" height="100">
        <h3><?php echo CHtml::link(CHtml::encode('Perfil'), array('viewProfessor', 'id'=>Yii::app()->user->id)); ?> </h3>
        <p>Acesse sua página de perfil aqui.</p>
     </center>
    </div>
  </li>
  <li class="span3">
    <div class="thumbnail">
      <center><img src="imagens/config.png" alt="" width="100" height="100">
      <h3><?php echo CHtml::link(CHtml::encode('Configurações'), array('update', 'id'=>Yii::app()->user->id)); ?> 
 </h3>
      <p>Modifique seus dados aqui.</p></center>
    </div>
  </li>
  <li class="span3">
    <div class="thumbnail">
      <center><img src="imagens/proj.png" alt="" width="100" height="100">
      <h3><?php echo CHtml::link(CHtml::encode('Avaliar'), array('/projeto/index')); ?> 
 </h3>
      <p>Encontre projetos para avaliar aqui.</p></center>
    </div>
  </li>
  
  
</ul>
 	
  </div>
		<hr>