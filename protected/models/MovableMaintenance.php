<?php

/**
 * This is the model class for table "movable_maintenance".
 *
 * The followings are the available columns in table 'movable_maintenance':
 * @property integer $id
 * @property string $outset_movable
 * @property string $completed_movable
 * @property integer $cost_movable
 * @property string $actual_movable
 * @property string $description
 * @property integer $movable_asset_id
 * @property string $user_id
 *
 * The followings are the available model relations:
 * @property MovableAsset $movableAsset
 * @property User $user
 */
class MovableMaintenance extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return MovableMaintenance the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'movable_maintenance';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('outset_movable, completed_movable, cost_movable, actual_movable, description, movable_asset_id, user_id', 'required'),
            array('cost_movable, movable_asset_id', 'numerical', 'integerOnly' => true),
            array('user_id', 'length', 'max' => 16),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, outset_movable, completed_movable, cost_movable, actual_movable, description, movable_asset_id, user_id', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
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
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'outset_movable' => 'Outset Movable',
            'completed_movable' => 'Completed Movable',
            'cost_movable' => 'Cost Movable',
            'actual_movable' => 'Actual Movable',
            'description' => 'Description',
            'movable_asset_id' => 'Movable Asset',
            'user_id' => 'User',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search() {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('outset_movable', $this->outset_movable, true);
        $criteria->compare('completed_movable', $this->completed_movable, true);
        $criteria->compare('cost_movable', $this->cost_movable);
        $criteria->compare('actual_movable', $this->actual_movable, true);
        $criteria->compare('description', $this->description, true);
        $criteria->compare('movable_asset_id', $this->movable_asset_id);
        $criteria->compare('user_id', $this->user_id, true);

        return new CActiveDataProvider($this, array(
                    'criteria' => $criteria,
                ));
    }

}