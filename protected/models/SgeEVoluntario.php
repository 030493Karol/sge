<?php

/**
 * This is the model class for table "sge_e_voluntario".
 *
 * The followings are the available columns in table 'sge_e_voluntario':
 * @property integer $Evento_idEvento
 * @property integer $Usuario_idUsuario
 */
class SgeEVoluntario extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'sge_e_voluntario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Evento_idEvento, Usuario_idUsuario', 'required'),
			array('Evento_idEvento, Usuario_idUsuario', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('Evento_idEvento, Usuario_idUsuario', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Evento_idEvento' => 'Evento Id Evento',
			'Usuario_idUsuario' => 'Usuario Id Usuario',
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

		$criteria->compare('Evento_idEvento',$this->Evento_idEvento);
		$criteria->compare('Usuario_idUsuario',$this->Usuario_idUsuario);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return SgeEVoluntario the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
