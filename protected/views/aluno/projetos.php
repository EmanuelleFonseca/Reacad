<?php
/* @var $this AlunoController */
/* @var $model Aluno */

$this->breadcrumbs=array(
	'Alunos'=>array('index'),
	$model->emailAluno,
);

$this->menu=array(
	//array('label'=>'List Aluno', 'url'=>array('index')),
	//array('label'=>'Create Aluno', 'url'=>array('create')),
	array('label'=>'Update Aluno', 'url'=>array('update', 'id'=>$model->emailAluno)),
	//array('label'=>'Delete Aluno', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idAluno),'confirm'=>'Are you sure you want to delete this item?')),
	//array('label'=>'Manage Aluno', 'url'=>array('admin')),
);
?>
<section class="title">
        <div class="container">
            <div class="row-fluid">
                <div class="span6">
                	<h2> Lista de projetos de <?php echo $model->nomeAluno ?></h2>
                </div>
                <div class="span6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="index.html">Início</a> <span class="divider">/</span></li>
                        <li><a href="#">Aluno</a> <span class="divider">/</span></li>
                        <li class="active"><?php echo $model->nomeAluno; ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- / .title -->  




	<?php
        $criteria=new CDbCriteria;
        $criteria->select='tituloProjeto, disciplina, palavrasChave, idprojeto';  
        $criteria->condition='emailAluno=:emailAluno';
        $criteria->params=array(':emailAluno'=>$model->emailAluno);
        $post=Projeto::model()->findAll($criteria);
		
		if($post != null): ?>
          <ul>
             <?php foreach($post as $post): ?>
             <div class="view">
                <ul class="thumbnails">   
                    <li class="span2">  
                       <a href="#" class="thumbnail">  
                          <img src="imagens/file.png"/ width="100px" height="80px">  
                       </a>
                    </li>
                    <li class="span9"> 
               <ul>
               	   <div class ="container">
                     <h5>Título: <?php echo $post->tituloProjeto ?></h5>
                     <h5>Disciplina: <?php echo $post->disciplina ?> </h5>
                     <h5>Palavras Chave: <?php echo $post->palavrasChave ?></h5>
                     <?php $this->widget('bootstrap.widgets.TbButton', array(
                            'type'=>'primary',// '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
                            'label'=>'Veja mais', 
                            'url'=>array('/projeto/view', 'id'=>$post->idprojeto)
				     )); ?>
	               </div>
	           </ul>
	           </li>
	        </ul>
           
             </div>
             <?php endforeach; ?>
          </ul>
        <?php endif; ?>
        


 </li>      
</ul>  
<hr> 
</div>

