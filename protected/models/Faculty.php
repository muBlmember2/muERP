<?php

/**
 * This is the model class for table "tbl_faculty".
 *
 * The followings are the available columns in table 'tbl_faculty':
 * @property string $fac_designation
 * @property string $fac_position
 * @property string $fac_joining
 * @property string $fac_leave
 * @property string $fac_loginName
 * @property string $fac_password
 * @property string $fac_accessLevel
 * @property integer $facultyID
 * @property integer $departmentID
 *
 * The followings are the available model relations:
 * @property TblBatch[] $tblBatches
 * @property TblDepartment[] $tblDepartments
 * @property TblPerson $faculty
 * @property TblDepartment $department
 * @property TblModuleregistration[] $tblModuleregistrations
 * @property TblOfferedmodule[] $tblOfferedmodules
 * @property TblSchool[] $tblSchools
 */
class Faculty extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Faculty the static model class
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
		return 'tbl_faculty';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fac_joining, facultyID', 'required'),
			array('facultyID, departmentID', 'numerical', 'integerOnly'=>true),
			array('fac_designation', 'length', 'max'=>19),
			array('fac_position', 'length', 'max'=>25),
			array('fac_loginName', 'length', 'max'=>50),
			array('fac_password', 'length', 'max'=>150),
			array('fac_accessLevel', 'length', 'max'=>1),
			array('fac_leave', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('fac_designation, fac_position, fac_joining, fac_leave, fac_loginName, fac_password, fac_accessLevel, facultyID, departmentID', 'safe', 'on'=>'search'),
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
			'tblBatches' => array(self::HAS_MANY, 'TblBatch', 'bat_advisor'),
			'tblDepartments' => array(self::HAS_MANY, 'TblDepartment', 'dpt_head'),
			'faculty' => array(self::BELONGS_TO, 'TblPerson', 'facultyID'),
			'department' => array(self::BELONGS_TO, 'TblDepartment', 'departmentID'),
			'tblModuleregistrations' => array(self::HAS_MANY, 'TblModuleregistration', 'facultyID'),
			'tblOfferedmodules' => array(self::HAS_MANY, 'TblOfferedmodule', 'facultyID'),
			'tblSchools' => array(self::HAS_MANY, 'TblSchool', 'sch_dean'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'fac_designation' => 'Fac Designation',
			'fac_position' => 'Fac Position',
			'fac_joining' => 'Fac Joining',
			'fac_leave' => 'Fac Leave',
			'fac_loginName' => 'Fac Login Name',
			'fac_password' => 'Fac Password',
			'fac_accessLevel' => 'Fac Access Level',
			'facultyID' => 'Faculty',
			'departmentID' => 'Department',
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

		$criteria->compare('fac_designation',$this->fac_designation,true);
		$criteria->compare('fac_position',$this->fac_position,true);
		$criteria->compare('fac_joining',$this->fac_joining,true);
		$criteria->compare('fac_leave',$this->fac_leave,true);
		$criteria->compare('fac_loginName',$this->fac_loginName,true);
		$criteria->compare('fac_password',$this->fac_password,true);
		$criteria->compare('fac_accessLevel',$this->fac_accessLevel,true);
		$criteria->compare('facultyID',$this->facultyID);
		$criteria->compare('departmentID',$this->departmentID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}