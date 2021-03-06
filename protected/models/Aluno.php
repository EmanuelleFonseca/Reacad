<?php

/**
 * This is the model class for table "aluno".
 *
 * The followings are the available columns in table 'aluno':
 * @property string $nomeAluno
 * @property string $emailAluno
 * @property integer $codigoAluno
 * @property integer $telefoneAluno
 * @property string $cursoAluno
 * @property string $senhaAluno
 * @property string $curriculo
 * @property string $imgPerfil
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
			array('nomeAluno, emailAluno, codigoAluno, cursoAluno, senhaAluno, imgPerfil, , telefoneAluno', 'required'),
			array('codigoAluno', 'numerical', 'integerOnly'=>true),
			array('nomeAluno, imgPerfil', 'length', 'max'=>100),
			array('emailAluno', 'length', 'max'=>50),
			array('cursoAluno', 'length', 'max'=>70),
			array('senhaAluno', 'length', 'max'=>10),
			array('curriculo', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('nomeAluno, emailAluno, codigoAluno, telefoneAluno, cursoAluno, senhaAluno, curriculo, imgPerfil', 'safe', 'on'=>'search'),
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
			'projetos' => array(self::HAS_MANY, 'Projeto', 'emailAluno'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'nomeAluno' => 'Nome: ',
			'emailAluno' => 'Email: ',
			'codigoAluno' => 'Código: ',
			'telefoneAluno' => 'Telefone: ',
			'cursoAluno' => 'Curso: ',
			'senhaAluno' => 'Senha: ',
			'curriculo' => 'Link de Curriculo: ',
			'imgPerfil' => 'Img Perfil',
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

		$criteria->compare('nomeAluno',$this->nomeAluno,true);
		$criteria->compare('emailAluno',$this->emailAluno,true);
		$criteria->compare('codigoAluno',$this->codigoAluno);
		$criteria->compare('telefoneAluno',$this->telefoneAluno);
		$criteria->compare('cursoAluno',$this->cursoAluno,true);
		$criteria->compare('senhaAluno',$this->senhaAluno,true);
		$criteria->compare('curriculo',$this->curriculo,true);
		$criteria->compare('imgPerfil',$this->imgPerfil,true);

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
