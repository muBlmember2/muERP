<?php

/**
 * This is the model class for table "tbl_school".
 *
 * The followings are the available columns in table 'tbl_school':
 * @property string $sch_code
 * @property string $sch_name
 * @property string $sch_remarks
 * @property integer $sch_dean
 * @property string $sch_deanStatus
 * @property integer $schoolID
 *
 * The followings are the available model relations:
 * @property TblDepartment[] $tblDepartments
 * @property TblFaculty $schDean
 */
class School extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return School the static model class
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
		return 'tbl_school';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('sch_code, sch_name', 'required'),
			array('sch_dean', 'numerical', 'integerOnly'=>true),
			array('sch_code', 'length', 'max'=>10),
			array('sch_name', 'length', 'max'=>100),
			array('sch_deanStatus', 'length', 'max'=>14),
			array('sch_remarks', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('sch_code, sch_name, sch_remarks, sch_dean, sch_deanStatus, schoolID', 'safe', 'on'=>'search'),
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
			'tblDepartments' => array(self::HAS_MANY, 'TblDepartment', 'schoolID'),
			'schDean' => array(self::BELONGS_TO, 'TblFaculty', 'sch_dean'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'sch_code' => 'Sch Code',
			'sch_name' => 'Sch Name',
			'sch_remarks' => 'Sch Remarks',
			'sch_dean' => 'Sch Dean',
			'sch_deanStatus' => 'Sch Dean Status',
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

		$criteria->compare('sch_code',$this->sch_code,true);
		$criteria->compare('sch_name',$this->sch_name,true);
		$criteria->compare('sch_remarks',$this->sch_remarks,true);
		$criteria->compare('sch_dean',$this->sch_dean);
		$criteria->compare('sch_deanStatus',$this->sch_deanStatus,true);
		$criteria->compare('schoolID',$this->schoolID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}