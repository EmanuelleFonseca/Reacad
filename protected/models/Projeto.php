<?php

/**
 * This is the model class for table "projeto".
 *
 * The followings are the available columns in table 'projeto':
 * @property integer $idprojeto
 * @property string $tituloProjeto
 * @property string $disciplina
 * @property string $palavrasChave
 * @property string $projeto
 * @property integer $idAluno
 * @property string $resumo
 *
 * The followings are the available model relations:
 * @property Avaliacao[] $avaliacaos
 * @property Aluno $idAluno0
 */
class Projeto extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'projeto';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tituloProjeto, disciplina, palavrasChave, projeto, idAluno, resumo', 'required'),
			array('idAluno', 'numerical', 'integerOnly'=>true),
			array('tituloProjeto, palavrasChave', 'length', 'max'=>100),
			array('disciplina', 'length', 'max'=>90),
			array('projeto', 'length', 'max'=>60),
			array('resumo', 'length', 'max'=>500),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idprojeto, tituloProjeto, disciplina, palavrasChave, projeto, idAluno, resumo', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'avaliacaos' => array(self::HAS_MANY, 'Avaliacao', 'idProjeto'),
			'idAluno0' => array(self::BELONGS_TO, 'Aluno', 'idAluno'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idprojeto' => 'Idprojeto',
			'tituloProjeto' => 'Titulo Projeto',
			'disciplina' => 'Disciplina',
			'palavrasChave' => 'Palavras Chave',
			'projeto' => 'Projeto',
			'idAluno' => 'Id Aluno',
			'resumo' => 'Resumo',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('idprojeto',$this->idprojeto);
		$criteria->compare('tituloProjeto',$this->tituloProjeto,true);
		$criteria->compare('disciplina',$this->disciplina,true);
		$criteria->compare('palavrasChave',$this->palavrasChave,true);
		$criteria->compare('projeto',$this->projeto,true);
		$criteria->compare('idAluno',$this->idAluno);
		$criteria->compare('resumo',$this->resumo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Projeto the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
