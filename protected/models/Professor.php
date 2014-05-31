<?php

/**
 * This is the model class for table "professor".
 *
 * The followings are the available columns in table 'professor':
 * @property string $nomeProfessor
 * @property string $emailProfessor
 * @property integer $telefoneProfessor
 * @property integer $senhaProfessor
 * @property string $areaEnsino
 * @property integer $siape
 *
 * The followings are the available model relations:
 * @property Avaliacao[] $avaliacaos
 */
class Professor extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'professor';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nomeProfessor, emailProfessor, senhaProfessor, areaEnsino, siape', 'required'),
			array('telefoneProfessor, senhaProfessor, siape', 'numerical', 'integerOnly'=>true),
			array('nomeProfessor', 'length', 'max'=>100),
			array('emailProfessor', 'length', 'max'=>50),
			array('areaEnsino', 'length', 'max'=>90),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('nomeProfessor, emailProfessor, telefoneProfessor, senhaProfessor, areaEnsino, siape', 'safe', 'on'=>'search'),
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
			'avaliacaos' => array(self::HAS_MANY, 'Avaliacao', 'emailProfessor'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'nomeProfessor' => 'Nome Professor',
			'emailProfessor' => 'Email Professor',
			'telefoneProfessor' => 'Telefone Professor',
			'senhaProfessor' => 'Senha Professor',
			'areaEnsino' => 'Area Ensino',
			'siape' => 'Siape',
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

		$criteria->compare('nomeProfessor',$this->nomeProfessor,true);
		$criteria->compare('emailProfessor',$this->emailProfessor,true);
		$criteria->compare('telefoneProfessor',$this->telefoneProfessor);
		$criteria->compare('senhaProfessor',$this->senhaProfessor);
		$criteria->compare('areaEnsino',$this->areaEnsino,true);
		$criteria->compare('siape',$this->siape);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Professor the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
