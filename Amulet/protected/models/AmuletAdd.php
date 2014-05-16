<?php

/**
 * This is the model class for table "amulet_add".
 *
 * The followings are the available columns in table 'amulet_add':
 * @property integer $id
 * @property string $Image1
 * @property string $Name
 * @property string $Division
 * @property string $Year
 * @property string $Group
 * @property string $Province
 * @property string $Type
 * @property string $Kind
 * @property string $Observe
 * @property string $Landmark1
 * @property string $Landmark2
 */
class AmuletAdd extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'amulet_add';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Image1, Name, Division, Year, Group, Province, Type, Kind, Observe, Landmark1, Landmark2', 'required'),
			array('Image1, Name, Division, Group, Landmark1, Landmark2', 'length', 'max'=>128),
			array('Year', 'length', 'max'=>4),
			array('Province, Type', 'length', 'max'=>30),
			array('Kind', 'length', 'max'=>50),
			array('Observe', 'length', 'max'=>200),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, Image1, Name, Division, Year, Group, Province, Type, Kind, Observe, Landmark1, Landmark2', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'Image1' => 'Image1',
			'Name' => 'Name',
			'Division' => 'Division',
			'Year' => 'Year',
			'Group' => 'Group',
			'Province' => 'Province',
			'Type' => 'Type',
			'Kind' => 'Kind',
			'Observe' => 'Observe',
			'Landmark1' => 'Landmark1',
			'Landmark2' => 'Landmark2',
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
		$criteria->compare('Image1',$this->Image1,true);
		$criteria->compare('Name',$this->Name,true);
		$criteria->compare('Division',$this->Division,true);
		$criteria->compare('Year',$this->Year,true);
		$criteria->compare('Group',$this->Group,true);
		$criteria->compare('Province',$this->Province,true);
		$criteria->compare('Type',$this->Type,true);
		$criteria->compare('Kind',$this->Kind,true);
		$criteria->compare('Observe',$this->Observe,true);
		$criteria->compare('Landmark1',$this->Landmark1,true);
		$criteria->compare('Landmark2',$this->Landmark2,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return AmuletAdd the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
