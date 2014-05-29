<?php
/* @var $this YiichatPostController */
/* @var $model YiichatPost */

$this->breadcrumbs=array(
	'Yiichat Posts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List YiichatPost', 'url'=>array('index')),
	array('label'=>'Manage YiichatPost', 'url'=>array('admin')),
);
?>


<section class="title">
        <div class="container">
            <div class="row-fluid">
                <div class="span6">
                	<h2>Chat - Fórum</h2>
                </div>
                <div class="span6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="index.html">Início</a> <span class="divider">/</span></li>
                        <li><a href="#">Chat</a> <span class="divider">/</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <h5>Converse com outros usuários, tire dúvidas e aprenda mais sobre o que desejar! =D</h5>
    <!-- / .title --> 
<div id='chat'></div>
<?php 
    $this->widget('YiiChatWidget',array(
        'chat_id'=>'123',                   
        'identity'=> Yii::app()->user->id,
        'selector'=>'#chat',               
        'minPostLen'=>2,                    
        'maxPostLen'=>100,                  
        'model'=>new ChatHandler(),   
        'data'=>'any data',                
   
        'onSuccess'=>new CJavaScriptExpression(
            "function(code, text, post_id){   }"),
        'onError'=>new CJavaScriptExpression(
            "function(errorcode, info){  }"),
    ));
?>

<hr />