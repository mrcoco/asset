<?php

/**
 * This is the model class for table "non_movable_maintenance".
 *
 * The followings are the available columns in table 'non_movable_maintenance':
 * @property integer $id
 * @property string $outset_non_movable
 * @property string $completed_non_movable
 * @property integer $cost_non_movable
 * @property string $actual_non_movable
 * @property string $description
 * @property integer $non_movable_asset_id
 * @property string $user_id
 *
 * The followings are the available model relations:
 * @property NonMovableAsset $nonMovableAsset
 * @property User $user
 */
class NonMovableMaintenance extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return NonMovableMaintenance the static model class
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
		return 'non_movable_maintenance';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('outset_non_movable, completed_non_movable, cost_non_movable, actual_non_movable, description, non_movable_asset_id, user_id', 'required'),
			array('cost_non_movable, non_movable_asset_id', 'numerical', 'integerOnly'=>true),
			array('user_id', 'length', 'max'=>16),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, outset_non_movable, completed_non_movable, cost_non_movable, actual_non_movable, description, non_movable_asset_id, user_id', 'safe', 'on'=>'search'),
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
			'outset_non_movable' => 'Outset Non Movable',
			'completed_non_movable' => 'Completed Non Movable',
			'cost_non_movable' => 'Cost Non Movable',
			'actual_non_movable' => 'Actual Non Movable',
			'description' => 'Description',
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
		$criteria->compare('outset_non_movable',$this->outset_non_movable,true);
		$criteria->compare('completed_non_movable',$this->completed_non_movable,true);
		$criteria->compare('cost_non_movable',$this->cost_non_movable);
		$criteria->compare('actual_non_movable',$this->actual_non_movable,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('non_movable_asset_id',$this->non_movable_asset_id);
		$criteria->compare('user_id',$this->user_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}