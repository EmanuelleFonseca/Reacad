<head>
<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div id="content">
	<?php echo $content; ?>
	

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/sl-slide.css">

    <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
	
	<!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
	
</ul>


<?php $this->endContent(); ?>
 
 
</head>
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
		   <div class = "nav-collapse collapse pull-right">
		      <?php $this->widget('zii.widgets.CMenu',array(
		          
			      'items'=>array(
				      array('label'=>'Início', 'url'=>array('/site/index')),
				      array('label'=>'Sobre', 'url'=>array('/site/page', 'view'=>'about')),
					  array('label'=>'F.A.Q.', 'url'=>array('/site/page', 'view'=>'faq')),
				      //array('label'=>'Contact', 'url'=>array('/site/contact')),
					  array('label'=>'Cadastre-se', 'url'=>array('/aluno/create'), 'visible'=>Yii::app()->user->isGuest),
					  array('label'=>'Autores', 'url'=>array('/aluno/index')),
					  array('label'=>'Projetos', 'url'=>array('/projeto/index')),
					  array('label'=>'Fórum', 'url'=>array('/yiichatPost/create'), 'visible'=>!Yii::app()->user->isGuest),
					  array('label'=>'Área do Professor', 'url'=>array('/site/areaProfessor'),'visible'=>Yii::app()->user->isGuest),
					  array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				      
				      ),
			      'htmlOptions' =>array(
			         'class' => "nav navbar-nav"
			        ),
			               
		        )); ?>
		          <?php $this->widget('bootstrap.widgets.TbButtonGroup', array(
        // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
        'buttons'=>array(
            array('icon'=> 'user','visible'=>!Yii::app()->user->isGuest,'items'=>array(
                array('label'=>'Perfil', 'icon'=> 'user','url'=>array('/aluno/view', 'id'=>Yii::app()->user->id)),
				array('label'=>'Mensagens','icon'=>'envelope', 'url'=>array('#')),
		        array('label'=>'Avaliações','icon'=>'pencil', 'url'=>array('#')),
                array('label'=>'Configurações','icon'=>'cog', 'url'=>array('/aluno/update', 'id'=>Yii::app()->user->id)),
                array('label'=>'Enviar Projeto','icon'=>'book', 'url'=>array('/projeto/create')),
			    array('label'=>'Logout ('.Yii::app()->user->id.')', 'icon'=>'off','url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			        
            )),
        ),
    )); ?>
          &nbsp;
          &nbsp;
          &nbsp;
          &nbsp;
          &nbsp;
          &nbsp;
          &nbsp;
          &nbsp;
          &nbsp;
          &nbsp;
          &nbsp;
          &nbsp;
          &nbsp;
          &nbsp;
          &nbsp;
          &nbsp;
          &nbsp;
          &nbsp;
		   </div>     
		   
   

                </div><!--/.nav-collapse -->
            </div>
        </div>
    </header>
    <!-- /mainmenu -->	

</html>


