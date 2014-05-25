<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
    <link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/imagens/icone.png">
   
	<?php
	echo Yii::app()->bootstrap->registerAllCss();
	echo Yii::app()->bootstrap->registerCoreScripts();
	?>
    <link rel="shortcut icon" href="imagens/icone.png"/>
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
<!-- page -->
<!-- menu -->
<header class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
			
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
				<a class = "brand""href"="<?php echo Yii::app()->homeUrl ; ?>">
				<img src = "imagens/icone.png" width = 30px height = 15px>
		      <?php echo CHtml::encode(Yii::app()->name); ?>
		   </a>
		   <div class = "nav-collapse collapse">
		      <?php $this->widget('zii.widgets.CMenu',array(
			      'items'=>array(
				      array('label'=>'Início', 'url'=>array('/site/index')),
				      array('label'=>'Sobre', 'url'=>array('/site/page', 'view'=>'about')),
					  array('label'=>'F.A.Q.', 'url'=>array('/site/page', 'view'=>'faq')),
				      //array('label'=>'Contact', 'url'=>array('/site/contact')),
					  array('label'=>'Cadastre-se', 'url'=>array('/aluno/create'), 'visible'=>Yii::app()->user->isGuest),
					  array('label'=>'Enviar Projeto', 'url'=>array('/projeto/create'), 'visible'=>!Yii::app()->user->isGuest),
					  array('label'=>'Pesquisar', 'url'=>array('/site/pesquisa')),
					  array('label'=>'Perfil', 'url'=>array('/aluno/view', 'id'=>'idAluno'), 'visible'=>!Yii::app()->user->isGuest),
				      array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
					  
				      
				      array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			        ),
			      'htmlOptions' =>array(
			         'class' => "nav navbar-nav"
			        ),
		        )); ?>
		   </div>     
                </div><!--/.nav-collapse -->
            </div>
        </div>
    </header>
    <!-- /mainmenu -->	
 
	<br/><br/><br/><br/>
	<div class="container">
	
	<?php echo $content; ?>
	
	
	

<!-- footer -->
	<div class="footer text-center">
		Copyright &copy; <?php echo date('Y'); ?> by REACAD.<br/>
		Todos os direitos reservados.<br/>
		<?php echo Yii::powered(); ?>
	</div>
 <!-- footer -->

  </div>
<!-- page -->

</body>
</html>
