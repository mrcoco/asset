<?php

/**
 * This is the model class for table "equipment_usage".
 *
 * The followings are the available columns in table 'equipment_usage':
 * @property integer $id
 * @property string $responsibility_usage
 * @property integer $amount_of_usage
 * @property string $type
 * @property string $date_usage
 * @property integer $equipment_id
 *
 * The followings are the available model relations:
 * @property Equipment $equipment
 */
class EquipmentUsage extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return EquipmentUsage the static model class
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
		return 'equipment_usage';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('responsibility_usage, amount_of_usage, type, date_usage, equipment_id', 'required'),
			array('amount_of_usage, equipment_id', 'numerical', 'integerOnly'=>true),
			array('responsibility_usage, type', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, responsibility_usage, amount_of_usage, type, date_usage, equipment_id', 'safe', 'on'=>'search'),
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
			'equipment' => array(self::BELONGS_TO, 'Equipment', 'equipment_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'responsibility_usage' => 'Responsibility Usage',
			'amount_of_usage' => 'Amount Of Usage',
			'type' => 'Type',
			'date_usage' => 'Date Usage',
			'equipment_id' => 'Equipment',
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
		$criteria->compare('responsibility_usage',$this->responsibility_usage,true);
		$criteria->compare('amount_of_usage',$this->amount_of_usage);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('date_usage',$this->date_usage,true);
		$criteria->compare('equipment_id',$this->equipment_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}