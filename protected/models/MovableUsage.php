<?php

/**
 * This is the model class for table "movable_usage".
 *
 * The followings are the available columns in table 'movable_usage':
 * @property integer $id
 * @property string $from_usage
 * @property string $destination_usage
 * @property string $set_out_usage
 * @property string $estimates_until_usage
 * @property string $actual_until_usage
 * @property integer $movable_asset_id
 * @property string $user_id
 *
 * The followings are the available model relations:
 * @property MovableAsset $movableAsset
 * @property User $user
 */
class MovableUsage extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return MovableUsage the static model class
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
		return 'movable_usage';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('from_usage, destination_usage, set_out_usage, estimates_until_usage, actual_until_usage, movable_asset_id, user_id', 'required'),
			array('movable_asset_id', 'numerical', 'integerOnly'=>true),
			array('from_usage, destination_usage', 'length', 'max'=>255),
			array('user_id', 'length', 'max'=>16),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, from_usage, destination_usage, set_out_usage, estimates_until_usage, actual_until_usage, movable_asset_id, user_id', 'safe', 'on'=>'search'),
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
			'movableAsset' => array(self::BELONGS_TO, 'MovableAsset', 'movable_asset_id'),
			'user' => array(self::BELONGS_TO, 'User', 'user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'from_usage' => 'From Usage',
			'destination_usage' => 'Destination Usage',
			'set_out_usage' => 'Set Out Usage',
			'estimates_until_usage' => 'Estimates Until Usage',
			'actual_until_usage' => 'Actual Until Usage',
			'movable_asset_id' => 'Movable Asset',
			'user_id' => 'User',
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
		$criteria->compare('from_usage',$this->from_usage,true);
		$criteria->compare('destination_usage',$this->destination_usage,true);
		$criteria->compare('set_out_usage',$this->set_out_usage,true);
		$criteria->compare('estimates_until_usage',$this->estimates_until_usage,true);
		$criteria->compare('actual_until_usage',$this->actual_until_usage,true);
		$criteria->compare('movable_asset_id',$this->movable_asset_id);
		$criteria->compare('user_id',$this->user_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}