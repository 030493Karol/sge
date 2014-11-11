<?php

/**
 * This is the model class for table "sge_usuario_possui_tipo".
 *
 * The followings are the available columns in table 'sge_usuario_possui_tipo':
 * @property integer $Usuario_idUsuario
 * @property integer $Tipo_Usuario_idTipo_Usuario
 */
class SgeUsuarioPossuiTipo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'sge_usuario_possui_tipo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Usuario_idUsuario, Tipo_Usuario_idTipo_Usuario', 'required'),
			array('Usuario_idUsuario, Tipo_Usuario_idTipo_Usuario', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('Usuario_idUsuario, Tipo_Usuario_idTipo_Usuario', 'safe', 'on'=>'search'),
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
			'Usuario_idUsuario' => 'Usuario Id Usuario',
			'Tipo_Usuario_idTipo_Usuario' => 'Tipo Usuario Id Tipo Usuario',
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

		$criteria->compare('Usuario_idUsuario',$this->Usuario_idUsuario);
		$criteria->compare('Tipo_Usuario_idTipo_Usuario',$this->Tipo_Usuario_idTipo_Usuario);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return SgeUsuarioPossuiTipo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
