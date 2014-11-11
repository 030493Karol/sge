<?php

/**
 * This is the model class for table "sge_participa".
 *
 * The followings are the available columns in table 'sge_participa':
 * @property integer $Usuario_idUsuario
 * @property integer $ItemProgramacao_idItemProgramacao
 */
class SgeParticipa extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'sge_participa';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Usuario_idUsuario, ItemProgramacao_idItemProgramacao', 'required'),
			array('Usuario_idUsuario, ItemProgramacao_idItemProgramacao', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('Usuario_idUsuario, ItemProgramacao_idItemProgramacao', 'safe', 'on'=>'search'),
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
			'ItemProgramacao_idItemProgramacao' => 'Item Programacao Id Item Programacao',
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
		$criteria->compare('ItemProgramacao_idItemProgramacao',$this->ItemProgramacao_idItemProgramacao);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return SgeParticipa the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}