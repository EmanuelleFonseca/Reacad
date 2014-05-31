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
