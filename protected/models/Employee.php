<?php

/**
 * This is the model class for table "tbl_employee".
 *
 * The followings are the available columns in table 'tbl_employee':
 * @property integer $id
 * @property string $CN_NAME
 * @property string $EN_NAME
 * @property integer $SEX
 * @property integer $AGE
 * @property string $ID_Num
 * @property string $ENTRY_TIME
 * @property string $Social_ID
 * @property string $address
 * @property string $account
 * @property string $field4
 * @property string $field5
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
			array('SEX, AGE, ID_Num, ENTRY_TIME', 'required'),
			array('SEX, AGE', 'numerical', 'integerOnly'=>true),
			array('CN_NAME, EN_NAME, Social_ID, address', 'length', 'max'=>128),
			array('ID_Num', 'length', 'max'=>30),
			array('account, field4, field5', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, CN_NAME, EN_NAME, SEX, AGE, ID_Num, ENTRY_TIME, Social_ID, address, account, field4, field5', 'safe', 'on'=>'search'),
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
			'CN_NAME' => '中文姓名',
			'EN_NAME' => '英文姓名',
			'SEX' => '性别',
			'AGE' => '年龄',
			'ID_Num' => '身份证号',
			'ENTRY_TIME' => '入职时间',
			'Social_ID' => '社保账号',
			'address' => '家庭住址',
			'account' => '员工编号',
			'field4' => 'Field4',
			'field5' => 'Field5',
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
		$criteria->compare('CN_NAME',$this->CN_NAME,true);
		$criteria->compare('EN_NAME',$this->EN_NAME,true);
		$criteria->compare('SEX',$this->SEX);
		$criteria->compare('AGE',$this->AGE);
		$criteria->compare('ID_Num',$this->ID_Num,true);
		$criteria->compare('ENTRY_TIME',$this->ENTRY_TIME,true);
		$criteria->compare('Social_ID',$this->Social_ID,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('account',$this->account,true);
		$criteria->compare('field4',$this->field4,true);
		$criteria->compare('field5',$this->field5,true);

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
