<?php

/**
 * This is the model class for table "sge_evento".
 *
 * The followings are the available columns in table 'sge_evento':
 * @property integer $idEvento
 * @property string $Sigla
 * @property string $Descrição
 * @property string $local
 * @property string $DataIni
 * @property string $DataFim
 * @property string $Vagas
 * @property integer $Tipo_idTipo
 * @property integer $Usuario_idUsuario
 *
 * The followings are the available model relations:
 * @property SgeUsuario[] $sgeUsuarios
 * @property SgeTipo $tipoIdTipo
 * @property SgeUsuario $usuarioIdUsuario
 * @property SgeUsuario[] $sgeUsuarios1
 * @property SgeItemProgramacao[] $sgeItemProgramacaos
 * @property SgeUsuario[] $sgeUsuarios2
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
			array('Sigla, Descrição, local, DataIni, DataFim, Tipo_idTipo, Usuario_idUsuario', 'required'),
			array('Tipo_idTipo, Usuario_idUsuario', 'numerical', 'integerOnly'=>true),
			array('Sigla, Descrição, local, Vagas', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idEvento, Sigla, Descrição, local, DataIni, DataFim, Vagas, Tipo_idTipo, Usuario_idUsuario', 'safe', 'on'=>'search'),
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
			'sgeUsuarios' => array(self::MANY_MANY, 'SgeUsuario', 'sge_e_voluntario(Evento_idEvento, Usuario_idUsuario)'),
			'tipoIdTipo' => array(self::BELONGS_TO, 'SgeTipo', 'Tipo_idTipo'),
			'usuarioIdUsuario' => array(self::BELONGS_TO, 'SgeUsuario', 'Usuario_idUsuario'),
			'sgeUsuarios1' => array(self::MANY_MANY, 'SgeUsuario', 'sge_inscreve(Evento_idEvento, Usuario_idUsuario)'),
			'sgeItemProgramacaos' => array(self::HAS_MANY, 'SgeItemProgramacao', 'Evento_idEvento'),
			'sgeUsuarios2' => array(self::MANY_MANY, 'SgeUsuario', 'sge_secretario(Evento_idEvento, Usuario_idUsuario)'),
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
			'Descrição' => 'Descri��o',
			'local' => 'Local',
			'DataIni' => 'Data Ini',
			'DataFim' => 'Data Fim',
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
		$criteria->compare('Descrição',$this->Descrição,true);
		$criteria->compare('local',$this->local,true);
		$criteria->compare('DataIni',$this->DataIni,true);
		$criteria->compare('DataFim',$this->DataFim,true);
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
