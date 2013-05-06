<?php

/**
 * This is the model class for table "tbl_department".
 *
 * The followings are the available columns in table 'tbl_department':
 * @property string $dpt_code
 * @property string $dpt_name
 * @property string $dpt_location
 * @property string $dpt_contactNo
 * @property string $dpt_email
 * @property string $dpt_remarks
 * @property integer $dpt_head
 * @property string $dpt_headStatus
 * @property integer $departmentID
 * @property integer $schoolID
 *
 * The followings are the available model relations:
 * @property TblFaculty $dptHead
 * @property TblSchool $school
 * @property TblFaculty[] $tblFaculties
 * @property TblProgramme[] $tblProgrammes
 */
class Department extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Department the static model class
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
		return 'tbl_department';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('dpt_code, dpt_name, schoolID', 'required'),
			array('dpt_head, schoolID', 'numerical', 'integerOnly'=>true),
			array('dpt_code', 'length', 'max'=>10),
			array('dpt_name, dpt_email', 'length', 'max'=>100),
			array('dpt_location', 'length', 'max'=>350),
			array('dpt_contactNo', 'length', 'max'=>15),
			array('dpt_headStatus', 'length', 'max'=>14),
			array('dpt_remarks', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('dpt_code, dpt_name, dpt_location, dpt_contactNo, dpt_email, dpt_remarks, dpt_head, dpt_headStatus, departmentID, schoolID', 'safe', 'on'=>'search'),
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
			'dptHead' => array(self::BELONGS_TO, 'TblFaculty', 'dpt_head'),
			'school' => array(self::BELONGS_TO, 'TblSchool', 'schoolID'),
			'tblFaculties' => array(self::HAS_MANY, 'TblFaculty', 'departmentID'),
			'tblProgrammes' => array(self::HAS_MANY, 'TblProgramme', 'departmentID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'dpt_code' => 'Dpt Code',
			'dpt_name' => 'Dpt Name',
			'dpt_location' => 'Dpt Location',
			'dpt_contactNo' => 'Dpt Contact No',
			'dpt_email' => 'Dpt Email',
			'dpt_remarks' => 'Dpt Remarks',
			'dpt_head' => 'Dpt Head',
			'dpt_headStatus' => 'Dpt Head Status',
			'departmentID' => 'Department',
			'schoolID' => 'School',
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

		$criteria->compare('dpt_code',$this->dpt_code,true);
		$criteria->compare('dpt_name',$this->dpt_name,true);
		$criteria->compare('dpt_location',$this->dpt_location,true);
		$criteria->compare('dpt_contactNo',$this->dpt_contactNo,true);
		$criteria->compare('dpt_email',$this->dpt_email,true);
		$criteria->compare('dpt_remarks',$this->dpt_remarks,true);
		$criteria->compare('dpt_head',$this->dpt_head);
		$criteria->compare('dpt_headStatus',$this->dpt_headStatus,true);
		$criteria->compare('departmentID',$this->departmentID);
		$criteria->compare('schoolID',$this->schoolID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}