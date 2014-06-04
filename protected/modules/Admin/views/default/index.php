<?php
/* @var $this DefaultController */


?>
<center><h1>Bem vindo, Administrador(a)!</h1> <br/></center>
  <div class = "container">
  	<ul class="thumbnails">
  	  <li class="span4">
    
  </li>
  <li class="span3">
    <div class="thumbnail">
     <center>
     	<img src="imagens/prof.png" alt="" width="100" height="100">
        <h3><?php echo CHtml::link(CHtml::encode('Cadastros'), array('/professor/create')); ?> </h3>
        <p>Cadastre professores/avaliadores aqui.</p>
     </center>
    </div>
  </li>
  
  
</ul>
 	
  </div>
		<hr>