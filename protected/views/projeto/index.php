<?php
/* @var $this ProjetoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Projetos',
);

$this->menu=array(
	array('label'=>'Create Projeto', 'url'=>array('create')),
	array('label'=>'Manage Projeto', 'url'=>array('admin')),
);
?>

<section class="title">
        <div class="container">
            <div class="row-fluid">
                <div class="span6">
                   <h1>Projetos</h1>
                   <br/>
                   <?php $this->widget('bootstrap.widgets.TbMenu', array(
                      'type'=>'list',
                      'items'=>array(
		              array('label'=>'Buscar por projetos', 'icon'=>'search', 'url'=>array('/projeto/admin')),
		
                      ),
                   )); ?>
                </div>
                
                <div class="span6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="index.html">Início</a> <span class="divider">/</span></li>
                        <li><a href="#">Pesquisa</a> <span class="divider">/</span></li>
                        <li class="active">Projetos</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- / .title -->  
<hr/>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
