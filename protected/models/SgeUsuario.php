<?php

/**
 * This is the model class for table "sge_usuario".
 *
 * The followings are the available columns in table 'sge_usuario':
 * @property integer $idUsuario
 * @property string $nome
 * @property string $cracha
 * @property string $email
 * @property string $senha
 * @property string $Instituicao
 *
 * The followings are the available model relations:
 * @property SgeEVoluntario[] $sgeEVoluntarios
 * @property SgeEvento[] $sgeEventos
 * @property SgeInscreve[] $sgeInscreves
 * @property SgeParticipa[] $sgeParticipas
 * @property SgeSecretario[] $sgeSecretarios
 * @property SgeUsuarioPossuiTipo[] $sgeUsuarioPossuiTipos
 */
class SgeUsuario extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'sge_usuario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nome, cracha, email, senha, Instituicao', 'required'),
			array('nome, cracha, email, senha, Instituicao', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idUsuario, nome, cracha, email, senha, Instituicao', 'safe', 'on'=>'search'),
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
			'sgeEVoluntarios' => array(self::HAS_MANY, 'SgeEVoluntario', 'Usuario_idUsuario'),
			'sgeEventos' => array(self::HAS_MANY, 'SgeEvento', 'Usuario_idUsuario'),
			'sgeInscreves' => array(self::HAS_MANY, 'SgeInscreve', 'Usuario_idUsuario'),
			'sgeParticipas' => array(self::HAS_MANY, 'SgeParticipa', 'Usuario_idUsuario'),
			'sgeSecretarios' => array(self::HAS_MANY, 'SgeSecretario', 'Usuario_idUsuario'),
			'sgeUsuarioPossuiTipos' => array(self::HAS_MANY, 'SgeUsuarioPossuiTipo', 'Usuario_idUsuario'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idUsuario' => 'Id Usuario',
			'nome' => 'Nome',
			'cracha' => 'Cracha',
			'email' => 'Email',
			'senha' => 'Senha',
			'Instituicao' => 'Instituicao',
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

		$criteria->compare('idUsuario',$this->idUsuario);
		$criteria->compare('nome',$this->nome,true);
		$criteria->compare('cracha',$this->cracha,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('senha',$this->senha,true);
		$criteria->compare('Instituicao',$this->Instituicao,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return SgeUsuario the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
