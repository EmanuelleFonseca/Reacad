<?php

/**
 * This is the model class for table "avaliacao".
 *
 * The followings are the available columns in table 'avaliacao':
 * @property integer $idAvaliacao
 * @property double $nota
 * @property integer $idProjeto
 * @property string $emailProfessor
 *
 * The followings are the available model relations:
 * @property Professor $emailProfessor0
 * @property Projeto $idProjeto0
 */
class Avaliacao extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'avaliacao';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nota, idProjeto, emailProfessor', 'required'),
			array('idProjeto', 'numerical', 'integerOnly'=>true),
			array('nota', 'numerical'),
			array('emailProfessor', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idAvaliacao, nota, idProjeto, emailProfessor', 'safe', 'on'=>'search'),
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
			'emailProfessor0' => array(self::BELONGS_TO, 'Professor', 'emailProfessor'),
			'idProjeto0' => array(self::BELONGS_TO, 'Projeto', 'idProjeto'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idAvaliacao' => 'Id Avaliacao',
			'nota' => 'Nota',
			'idProjeto' => 'Id Projeto',
			'emailProfessor' => 'Email Professor',
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

		$criteria->compare('idAvaliacao',$this->idAvaliacao);
		$criteria->compare('nota',$this->nota);
		$criteria->compare('idProjeto',$this->idProjeto);
		$criteria->compare('emailProfessor',$this->emailProfessor,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Avaliacao the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
