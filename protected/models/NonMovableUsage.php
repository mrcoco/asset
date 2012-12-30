<?php

/**
 * This is the model class for table "non_movable_usage".
 *
 * The followings are the available columns in table 'non_movable_usage':
 * @property integer $id
 * @property integer $volume_non_movable_usage
 * @property string $set_out_non_movable_usage
 * @property string $estimate_non_movable_usage
 * @property string $actual_non_movable_usage
 * @property integer $non_movable_asset_id
 * @property string $user_id
 *
 * The followings are the available model relations:
 * @property NonMovableAsset $nonMovableAsset
 * @property User $user
 */
class NonMovableUsage extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return NonMovableUsage the static model class
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
		return 'non_movable_usage';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('volume_non_movable_usage, set_out_non_movable_usage, estimate_non_movable_usage, actual_non_movable_usage, non_movable_asset_id, user_id', 'required'),
			array('volume_non_movable_usage, non_movable_asset_id', 'numerical', 'integerOnly'=>true),
			array('user_id', 'length', 'max'=>16),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, volume_non_movable_usage, set_out_non_movable_usage, estimate_non_movable_usage, actual_non_movable_usage, non_movable_asset_id, user_id', 'safe', 'on'=>'search'),
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
			'nonMovableAsset' => array(self::BELONGS_TO, 'NonMovableAsset', 'non_movable_asset_id'),
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
			'volume_non_movable_usage' => 'Volume Non Movable Usage',
			'set_out_non_movable_usage' => 'Set Out Non Movable Usage',
			'estimate_non_movable_usage' => 'Estimate Non Movable Usage',
			'actual_non_movable_usage' => 'Actual Non Movable Usage',
			'non_movable_asset_id' => 'Non Movable Asset',
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
		$criteria->compare('volume_non_movable_usage',$this->volume_non_movable_usage);
		$criteria->compare('set_out_non_movable_usage',$this->set_out_non_movable_usage,true);
		$criteria->compare('estimate_non_movable_usage',$this->estimate_non_movable_usage,true);
		$criteria->compare('actual_non_movable_usage',$this->actual_non_movable_usage,true);
		$criteria->compare('non_movable_asset_id',$this->non_movable_asset_id);
		$criteria->compare('user_id',$this->user_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}