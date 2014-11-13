<?php

/**
 * This is the model class for table "sge_item_programacao".
 *
 * The followings are the available columns in table 'sge_item_programacao':
 * @property integer $idItemProgramacao
 * @property string $data
 * @property string $hora
 * @property string $Descricao
 * @property string $responsavel
 * @property integer $vagas
 * @property string $local
 * @property integer $Evento_idEvento
 * @property integer $Tipo_idTipo
 *
 * The followings are the available model relations:
 * @property SgeEvento $eventoIdEvento
 * @property SgeTipo $tipoIdTipo
 * @property SgeParticipa[] $sgeParticipas
 */
class SgeItemProgramacao extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'sge_item_programacao';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('data, hora, Descricao, local, Evento_idEvento, Tipo_idTipo', 'required'),
			array('vagas, Evento_idEvento, Tipo_idTipo', 'numerical', 'integerOnly'=>true),
			array('Descricao, responsavel, local', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idItemProgramacao, data, hora, Descricao, responsavel, vagas, local, Evento_idEvento, Tipo_idTipo', 'safe', 'on'=>'search'),
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
			'eventoIdEvento' => array(self::BELONGS_TO, 'SgeEvento', 'Evento_idEvento'),
			'tipoIdTipo' => array(self::BELONGS_TO, 'SgeTipo', 'Tipo_idTipo'),
			'sgeParticipas' => array(self::HAS_MANY, 'SgeParticipa', 'ItemProgramacao_idItemProgramacao'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idItemProgramacao' => 'Id Item Programacao',
			'data' => 'Data',
			'hora' => 'Hora',
			'Descricao' => 'Descriã§ã£o',
			'responsavel' => 'Responsavel',
			'vagas' => 'Vagas',
			'local' => 'Local',
			'Evento_idEvento' => 'Evento Id Evento',
			'Tipo_idTipo' => 'Tipo Id Tipo',
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

		$criteria->compare('idItemProgramacao',$this->idItemProgramacao);
		$criteria->compare('data',$this->data,true);
		$criteria->compare('hora',$this->hora,true);
		$criteria->compare('Descricao',$this->Descricao,true);
		$criteria->compare('responsavel',$this->responsavel,true);
		$criteria->compare('vagas',$this->vagas);
		$criteria->compare('local',$this->local,true);
		$criteria->compare('Evento_idEvento',$this->Evento_idEvento);
		$criteria->compare('Tipo_idTipo',$this->Tipo_idTipo);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return SgeItemProgramacao the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
