<?php

/**
 * This is the model class for table "sge_secretario".
 *
 * The followings are the available columns in table 'sge_secretario':
 * @property integer $id
 * @property integer $Usuario_idUsuario
 * @property integer $Evento_idEvento
 *
 * The followings are the available model relations:
 * @property SgeUsuario $usuarioIdUsuario
 * @property SgeEvento $eventoIdEvento
 */
class SgeSecretario extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'sge_secretario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Usuario_idUsuario, Evento_idEvento', 'required'),
			array('Usuario_idUsuario, Evento_idEvento', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, Usuario_idUsuario, Evento_idEvento', 'safe', 'on'=>'search'),
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
			'usuarioIdUsuario' => array(self::BELONGS_TO, 'SgeUsuario', 'Usuario_idUsuario'),
			'eventoIdEvento' => array(self::BELONGS_TO, 'SgeEvento', 'Evento_idEvento'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'Usuario_idUsuario' => 'Usuario Id Usuario',
			'Evento_idEvento' => 'Evento Id Evento',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('Usuario_idUsuario',$this->Usuario_idUsuario);
		$criteria->compare('Evento_idEvento',$this->Evento_idEvento);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return SgeSecretario the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
