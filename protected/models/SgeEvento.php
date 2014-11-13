<?php

/**
 * This is the model class for table "sge_evento".
 *
 * The followings are the available columns in table 'sge_evento':
 * @property integer $idEvento
 * @property string $Sigla
 * @property string $Descricao
 * @property string $local
 * @property string $DataIni
 * @property string $DataFim
 * @property string $Hora
 * @property string $Vagas
 * @property integer $Tipo_idTipo
 * @property integer $Usuario_idUsuario
 *
 * The followings are the available model relations:
 * @property SgeEVoluntario[] $sgeEVoluntarios
 * @property SgeTipo $tipoIdTipo
 * @property SgeUsuario $usuarioIdUsuario
 * @property SgeInscreve[] $sgeInscreves
 * @property SgeItemProgramacao[] $sgeItemProgramacaos
 * @property SgeSecretario[] $sgeSecretarios
 */
class SgeEvento extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'sge_evento';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Sigla, Descricao, local, DataIni, DataFim, Tipo_idTipo, Usuario_idUsuario', 'required'),
			array('Tipo_idTipo, Usuario_idUsuario', 'numerical', 'integerOnly'=>true),
			array('Sigla, Descricao, local, Hora, Vagas', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idEvento, Sigla, Descricao, local, DataIni, DataFim, Hora, Vagas, Tipo_idTipo, Usuario_idUsuario', 'safe', 'on'=>'search'),
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
			'sgeEVoluntarios' => array(self::HAS_MANY, 'SgeEVoluntario', 'Evento_idEvento'),
			'tipoIdTipo' => array(self::BELONGS_TO, 'SgeTipo', 'Tipo_idTipo'),
			'usuarioIdUsuario' => array(self::BELONGS_TO, 'SgeUsuario', 'Usuario_idUsuario'),
			'sgeInscreves' => array(self::HAS_MANY, 'SgeInscreve', 'Evento_idEvento'),
			'sgeItemProgramacaos' => array(self::HAS_MANY, 'SgeItemProgramacao', 'Evento_idEvento'),
			'sgeSecretarios' => array(self::HAS_MANY, 'SgeSecretario', 'Evento_idEvento'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idEvento' => 'Id Evento',
			'Sigla' => 'Sigla',
			'Descricao' => 'Descricao',
			'local' => 'Local',
			'DataIni' => 'Data Ini',
			'DataFim' => 'Data Fim',
			'Hora' => 'Hora',
			'Vagas' => 'Vagas',
			'Tipo_idTipo' => 'Tipo Id Tipo',
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

		$criteria->compare('idEvento',$this->idEvento);
		$criteria->compare('Sigla',$this->Sigla,true);
		$criteria->compare('Descricao',$this->Descricao,true);
		$criteria->compare('local',$this->local,true);
		$criteria->compare('DataIni',$this->DataIni,true);
		$criteria->compare('DataFim',$this->DataFim,true);
		$criteria->compare('Hora',$this->Hora,true);
		$criteria->compare('Vagas',$this->Vagas,true);
		$criteria->compare('Tipo_idTipo',$this->Tipo_idTipo);
		$criteria->compare('Usuario_idUsuario',$this->Usuario_idUsuario);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return SgeEvento the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
