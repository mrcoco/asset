<?php

/**
 * This is the model class for table "departement".
 *
 * The followings are the available columns in table 'departement':
 * @property integer $id
 * @property string $code_dept
 * @property string $name_dept
 * @property string $id_head_dept
 *
 * The followings are the available model relations:
 * @property User $idHeadDept
 * @property User[] $users
 */
class Departement extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Departement the static model class
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
		return 'departement';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('code_dept, name_dept', 'required'),
			array('code_dept', 'length', 'max'=>50),
			array('name_dept', 'length', 'max'=>255),
			array('id_head_dept', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, code_dept, name_dept, id_head_dept', 'safe', 'on'=>'search'),
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
			'idHeadDept' => array(self::BELONGS_TO, 'User', 'id_head_dept'),
			'users' => array(self::HAS_MANY, 'User', 'departement_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'code_dept' => 'Code Dept',
			'name_dept' => 'Name Dept',
			'id_head_dept' => 'Id Head Dept',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('code_dept',$this->code_dept,true);
		$criteria->compare('name_dept',$this->name_dept,true);
		$criteria->compare('id_head_dept',$this->id_head_dept,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}