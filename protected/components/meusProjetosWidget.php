<?php

class MeusProjetosWidget extends CWidget {

    public function run() {
        $criteria=new CDbCriteria;
        $criteria->select='tituloProjeto';  // seleciona apenas a coluna title
        $criteria->condition='emailAluno=:emailAluno';
        $criteria->params=array(':emailAluno'=>'emanuelleafonseca@hotmail.com');
        $post=Projeto::model()->findAll($criteria);
		
		 $this->render('meusProjetos', array(
            'post'=>$post  
        ));
    }
}

?>