<?php

class MeusProjetosWidget extends CWidget {

    public function run() {
        $criteria=new CDbCriteria;
        $criteria->select='tituloProjeto';  // seleciona apenas a coluna title
        $criteria->condition='disciplina=:disciplina';
        $criteria->params=array(':disciplina'=>'Edificações');
        $post=Projeto::model()->findAll($criteria);
		
		 $this->render('meusProjetos', array(
            'post'=>$post  
        ));
    }
}

?>