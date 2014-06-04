<?php
/* @var $this AvaliacaoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Avaliacaos',
);

$this->menu=array(
	array('label'=>'Create Avaliacao', 'url'=>array('create')),
	array('label'=>'Manage Avaliacao', 'url'=>array('admin')),
);
?>

<div class="row-fluid">
              <center>
                <h3>Avaliação realizada com sucesso.</h3>
				
                <h5> 
                	<?php echo CHtml::link(CHtml::encode('Clique aqui para retornar aos projetos. '), array('/projeto/index')); ?> 
                	<br/>
                	<?php echo CHtml::link(CHtml::encode('Clique aqui para retornar a página inicial de professores.'), array('default/index')); ?> 
          
                </h5>
             </center>
  </div>
  <br/><br/><br/><br/>
  <hr>

