<?php

/**
 * This is the model class for table "tbl_employee".
 *
 * The followings are the available columns in table 'tbl_employee':
 * @property string $emp_designations
 * @property string $emp_suppervisoryRole
 * @property string $emp_joining
 * @property string $emp_leave
 * @property string $emp_loginName
 * @property string $emp_password
 * @property string $emp_accessLevel
 * @property integer $employeeID
 * @property string $administrationCode
 *
 * The followings are the available model relations:
 * @property TblAdmission[] $tblAdmissions
 * @property TblAdministration $administrationCode0
 * @property TblPerson $employee
 * @property TblStudent[] $tblStudents
 * @property TblTermadmission[] $tblTermadmissions
 */
class Employee extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Employee the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

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
			array('emp_designations, emp_joining, employeeID, administrationCode', 'required'),
			array('employeeID', 'numerical', 'integerOnly'=>true),
			array('emp_designations, emp_suppervisoryRole', 'length', 'max'=>25),
			array('emp_loginName', 'length', 'max'=>50),
			array('emp_password', 'length', 'max'=>150),
			array('emp_accessLevel', 'length', 'max'=>1),
			array('administrationCode', 'length', 'max'=>10),
			array('emp_leave', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('emp_designations, emp_suppervisoryRole, emp_joining, emp_leave, emp_loginName, emp_password, emp_accessLevel, employeeID, administrationCode', 'safe', 'on'=>'search'),
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
			'tblAdmissions' => array(self::HAS_MANY, 'TblAdmission', 'employeeID'),
			'administrationCode0' => array(self::BELONGS_TO, 'TblAdministration', 'administrationCode'),
			'employee' => array(self::BELONGS_TO, 'TblPerson', 'employeeID'),
			'tblStudents' => array(self::HAS_MANY, 'TblStudent', 'employeeID'),
			'tblTermadmissions' => array(self::HAS_MANY, 'TblTermadmission', 'employeeID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'emp_designations' => 'Emp Designations',
			'emp_suppervisoryRole' => 'Emp Suppervisory Role',
			'emp_joining' => 'Emp Joining',
			'emp_leave' => 'Emp Leave',
			'emp_loginName' => 'Emp Login Name',
			'emp_password' => 'Emp Password',
			'emp_accessLevel' => 'Emp Access Level',
			'employeeID' => 'Employee',
			'administrationCode' => 'Administration Code',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('emp_designations',$this->emp_designations,true);
		$criteria->compare('emp_suppervisoryRole',$this->emp_suppervisoryRole,true);
		$criteria->compare('emp_joining',$this->emp_joining,true);
		$criteria->compare('emp_leave',$this->emp_leave,true);
		$criteria->compare('emp_loginName',$this->emp_loginName,true);
		$criteria->compare('emp_password',$this->emp_password,true);
		$criteria->compare('emp_accessLevel',$this->emp_accessLevel,true);
		$criteria->compare('employeeID',$this->employeeID);
		$criteria->compare('administrationCode',$this->administrationCode,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}