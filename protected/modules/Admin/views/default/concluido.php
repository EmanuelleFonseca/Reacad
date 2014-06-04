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
                <h3> Cadastro do(a) professor(a) realizado com sucesso.</h3>
				
                <h5> 
                	<?php echo CHtml::link(CHtml::encode('Clique aqui para retornar à página de cadastros '), array('/professor/create')); ?> 
                	
                </h5>
             </center>
  </div>
  <br/><br/><br/><br/>
  <hr>

