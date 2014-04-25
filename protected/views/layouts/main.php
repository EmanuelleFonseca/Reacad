<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
   
   
	<?php
	echo Yii::app()->bootstrap->registerAllCss();
	echo Yii::app()->bootstrap->registerCoreScripts();
	?>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
<!-- page -->

 <!--menu-->
	<div class="navbar navbar-inner navbar-fixed-top">
	  <div class="navbar-inverse">
	    <div class ="container">
		
		   <a class = "brand""href"="<?php echo Yii::app()->homeUrl ; ?>">
		      <?php echo CHtml::encode(Yii::app()->name); ?>
		   </a>
		   <div class = "nav-collapse collapse">
		      <?php $this->widget('zii.widgets.CMenu',array(
			      'items'=>array(
				      array('label'=>'Início', 'url'=>array('/site/index')),
				      array('label'=>'Sobre', 'url'=>array('/site/page', 'view'=>'about')),
				      //array('label'=>'Contact', 'url'=>array('/site/contact')),
					  array('label'=>'Cadastre-se', 'url'=>array('/aluno/create')),
					  array('label'=>'Enviar Projeto', 'url'=>array('/projeto/create'), 'visible'=>!Yii::app()->user->isGuest),
					  array('label'=>'Pesquisar', 'url'=>array('/site/pesquisa')),
					  array('label'=>'Perfil', 'url'=>array('/site/painel'), 'visible'=>!Yii::app()->user->isGuest),
				      array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
					  
				      
				      array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			        ),
			      'htmlOptions' =>array(
			         'class' => "nav navbar-nav"
			        ),
		        )); ?>
		   </div>
		</div>
	  </div>
	</div>
 <!-- mainmenu -->
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
