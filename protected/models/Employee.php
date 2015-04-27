<?php

/**
 * This is the model class for table "tbl_employee".
 *
 * The followings are the available columns in table 'tbl_employee':
 * @property integer $id
 * @property string $Account
 * @property string $Name
 * @property string $Id_Num
 * @property string $Sex
 * @property string $Age
 * @property string $Team
 * @property string $Position
 * @property string $Manager
 * @property string $Tel
 * @property string $E_mail
 * @property string $Entry_Time
 * @property string $Contact_STime
 * @property string $Contact_ETime
 */
class Employee extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_employee';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Account, Name, Id_Num, Sex, Age, Team, Position, Manager, Tel, E_mail, Entry_Time, Contact_STime, Contact_ETime', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, Account, Name, Id_Num, Sex, Age, Team, Position, Manager, Tel, E_mail, Entry_Time, Contact_STime, Contact_ETime', 'safe', 'on'=>'search'),
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
			'Account' => 'Account',
			'Name' => 'Name',
			'Id_Num' => 'Id Num',
			'Sex' => 'Sex',
			'Age' => 'Age',
			'Team' => 'Team',
			'Position' => 'Position',
			'Manager' => 'Manager',
			'Tel' => 'Tel',
			'E_mail' => 'E Mail',
			'Entry_Time' => 'Entry Time',
			'Contact_STime' => 'Contact Stime',
			'Contact_ETime' => 'Contact Etime',
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
		$criteria->compare('Account',$this->Account,true);
		$criteria->compare('Name',$this->Name,true);
		$criteria->compare('Id_Num',$this->Id_Num,true);
		$criteria->compare('Sex',$this->Sex,true);
		$criteria->compare('Age',$this->Age,true);
		$criteria->compare('Team',$this->Team,true);
		$criteria->compare('Position',$this->Position,true);
		$criteria->compare('Manager',$this->Manager,true);
		$criteria->compare('Tel',$this->Tel,true);
		$criteria->compare('E_mail',$this->E_mail,true);
		$criteria->compare('Entry_Time',$this->Entry_Time,true);
		$criteria->compare('Contact_STime',$this->Contact_STime,true);
		$criteria->compare('Contact_ETime',$this->Contact_ETime,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Employee the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
