<?php

/**
 * This is the model class for table "address".
 *
 * The followings are the available columns in table 'address':
 * @property string $HOSPCODE
 * @property string $PID
 * @property string $ADDRESSTYPE
 * @property string $HOUSE_ID
 * @property string $HOUSETYPE
 * @property string $ROOMNO
 * @property string $CONDO
 * @property string $HOUSENO
 * @property string $SOISUB
 * @property string $SOIMAIN
 * @property string $ROAD
 * @property string $VILLANAME
 * @property string $VILLAGE
 * @property string $TAMBON
 * @property string $AMPUR
 * @property string $CHANGWAT
 * @property string $TELEPHONE
 * @property string $MOBILE
 * @property string $D_UPDATE
 */
class Address extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'address';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('HOUSETYPE, VILLAGE, TAMBON, AMPUR, D_UPDATE', 'required'),
			array('HOSPCODE', 'length', 'max'=>5),
			array('PID, TELEPHONE, MOBILE', 'length', 'max'=>15),
			array('ADDRESSTYPE, HOUSETYPE', 'length', 'max'=>1),
			array('HOUSE_ID', 'length', 'max'=>11),
			array('ROOMNO', 'length', 'max'=>10),
			array('CONDO, HOUSENO', 'length', 'max'=>75),
			array('SOISUB, SOIMAIN, ROAD, VILLANAME', 'length', 'max'=>255),
			array('VILLAGE, TAMBON, AMPUR, CHANGWAT', 'length', 'max'=>2),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('HOSPCODE, PID, ADDRESSTYPE, HOUSE_ID, HOUSETYPE, ROOMNO, CONDO, HOUSENO, SOISUB, SOIMAIN, ROAD, VILLANAME, VILLAGE, TAMBON, AMPUR, CHANGWAT, TELEPHONE, MOBILE, D_UPDATE', 'safe', 'on'=>'search'),
		);
	}

	/**
         * 
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
			'HOSPCODE' => 'Hospcode',
			'PID' => 'Pid',
			'ADDRESSTYPE' => 'Addresstype',
			'HOUSE_ID' => 'House',
			'HOUSETYPE' => 'Housetype',
			'ROOMNO' => 'Roomno',
			'CONDO' => 'Condo',
			'HOUSENO' => 'Houseno',
			'SOISUB' => 'Soisub',
			'SOIMAIN' => 'Soimain',
			'ROAD' => 'Road',
			'VILLANAME' => 'Villaname',
			'VILLAGE' => 'Village',
			'TAMBON' => 'Tambon',
			'AMPUR' => 'Ampur',
			'CHANGWAT' => 'Changwat',
			'TELEPHONE' => 'Telephone',
			'MOBILE' => 'Mobile',
			'D_UPDATE' => 'D Update',
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

		$criteria->compare('HOSPCODE',$this->HOSPCODE,true);
		$criteria->compare('PID',$this->PID,true);
		$criteria->compare('ADDRESSTYPE',$this->ADDRESSTYPE,true);
		$criteria->compare('HOUSE_ID',$this->HOUSE_ID,true);
		$criteria->compare('HOUSETYPE',$this->HOUSETYPE,true);
		$criteria->compare('ROOMNO',$this->ROOMNO,true);
		$criteria->compare('CONDO',$this->CONDO,true);
		$criteria->compare('HOUSENO',$this->HOUSENO,true);
		$criteria->compare('SOISUB',$this->SOISUB,true);
		$criteria->compare('SOIMAIN',$this->SOIMAIN,true);
		$criteria->compare('ROAD',$this->ROAD,true);
		$criteria->compare('VILLANAME',$this->VILLANAME,true);
		$criteria->compare('VILLAGE',$this->VILLAGE,true);
		$criteria->compare('TAMBON',$this->TAMBON,true);
		$criteria->compare('AMPUR',$this->AMPUR,true);
		$criteria->compare('CHANGWAT',$this->CHANGWAT,true);
		$criteria->compare('TELEPHONE',$this->TELEPHONE,true);
		$criteria->compare('MOBILE',$this->MOBILE,true);
		$criteria->compare('D_UPDATE',$this->D_UPDATE,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Address the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
