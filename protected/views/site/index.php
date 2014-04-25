<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
<br/><br/>


<?php $this->beginWidget('bootstrap.widgets.TbHeroUnit', array(
    //'heading'=>'Bem vindo ao REACAD!',
	'htmlOptions' => array('class' => 'hero-unit'),
)); ?>
  <br />
  <div class="row">
  <div class="thumbnail span6">
    <img src="http://usi.ie/wp-content/uploads/2013/08/college_students.jpg" alt="Sample Image">
  </div>
  <div class="span4">
  <h2>Bem vindo ao Reacad!</h2>
  <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
 
  <p>This paragraph contains important ... </p>
  <p><a class="btn btn-primary btn-large">Learn more &raquo;</a></p>
   </div> 
</div>

<?php $this->endWidget(); ?>







