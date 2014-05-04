<?php

/**
 * This is the model class for table "aluno".
 *
 * The followings are the available columns in table 'aluno':
 * @property integer $idAluno
 * @property string $nomeAluno
 * @property string $emailAluno
 * @property integer $codigoAluno
 * @property integer $telefoneAluno
 * @property string $cursoAluno
 * @property string $senhaAluno
 *
 * The followings are the available model relations:
 * @property Projeto[] $projetos
 */
class Aluno extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	 
	public function tableName()
	{
		return 'aluno';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nomeAluno, emailAluno, codigoAluno, cursoAluno, senhaAluno', 'required'),
			array('codigoAluno, telefoneAluno', 'numerical', 'integerOnly'=>true),
			array('nomeAluno', 'length', 'max'=>100),
			array('emailAluno', 'length', 'max'=>50),
			array('cursoAluno', 'length', 'max'=>70),
			array('senhaAluno', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idAluno, nomeAluno, emailAluno, codigoAluno, telefoneAluno, cursoAluno, senhaAluno', 'safe', 'on'=>'search'),
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
			'projetos' => array(self::HAS_MANY, 'Projeto', 'idAluno'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idAluno' => 'Id:',
			'nomeAluno' => 'Nome:',
			'emailAluno' => 'Email:',
			'codigoAluno' => 'Código:',
			'telefoneAluno' => 'Telefone:',
			'cursoAluno' => 'Curso:',
			'senhaAluno' => 'Senha:',
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

		$criteria->compare('idAluno',$this->idAluno);
		$criteria->compare('nomeAluno',$this->nomeAluno,true);
		$criteria->compare('emailAluno',$this->emailAluno,true);
		$criteria->compare('codigoAluno',$this->codigoAluno);
		$criteria->compare('telefoneAluno',$this->telefoneAluno);
		$criteria->compare('cursoAluno',$this->cursoAluno,true);
		$criteria->compare('senhaAluno',$this->senhaAluno,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Aluno the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
