<?php

/**
 * This is the model class for table "movable_asset".
 *
 * The followings are the available columns in table 'movable_asset':
 * @property integer $id
 * @property string $code_item_movable
 * @property string $name_item_movable
 * @property integer $price_book_movable
 * @property integer $purchase_price_movable
 * @property integer $volume_movable
 * @property string $unit_movable
 * @property string $life_movable
 * @property string $responsibility_movable
 *
 * The followings are the available model relations:
 * @property MovableMaintenance[] $movableMaintenances
 * @property MovableUsage[] $movableUsages
 */
class MovableAsset extends CActiveRecord {

    const UNIT_LITER = 'LTR';
    const UNIT_KG = 'KG';
    const UNIT_UNIT = 'UNT';

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return MovableAsset the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'movable_asset';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('code_item_movable, name_item_movable, price_book_movable, purchase_price_movable, volume_movable, unit_movable, life_movable, responsibility_movable', 'required'),
            array('price_book_movable, purchase_price_movable, volume_movable', 'numerical', 'integerOnly' => true),
            array('code_item_movable, unit_movable, responsibility_movable', 'length', 'max' => 50),
            array('name_item_movable', 'length', 'max' => 255),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, code_item_movable, name_item_movable, price_book_movable, purchase_price_movable, volume_movable, unit_movable, life_movable, responsibility_movable', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'movableMaintenances' => array(self::HAS_MANY, 'MovableMaintenance', 'movable_asset_id'),
            'movableUsages' => array(self::HAS_MANY, 'MovableUsage', 'movable_asset_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'code_item_movable' => 'Code Item Movable',
            'name_item_movable' => 'Name Item Movable',
            'price_book_movable' => 'Price Book Movable',
            'purchase_price_movable' => 'Purchase Price Movable',
            'volume_movable' => 'Volume Movable',
            'unit_movable' => 'Unit Movable',
            'life_movable' => 'Life Movable',
            'responsibility_movable' => 'Responsibility Movable',
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
        $criteria->compare('code_item_movable', $this->code_item_movable, true);
        $criteria->compare('name_item_movable', $this->name_item_movable, true);
        $criteria->compare('price_book_movable', $this->price_book_movable);
        $criteria->compare('purchase_price_movable', $this->purchase_price_movable);
        $criteria->compare('volume_movable', $this->volume_movable);
        $criteria->compare('unit_movable', $this->unit_movable, true);
        $criteria->compare('life_movable', $this->life_movable, true);
        $criteria->compare('responsibility_movable', $this->responsibility_movable, true);

        return new CActiveDataProvider($this, array(
                    'criteria' => $criteria,
                ));
    }

    public function getUnitOptions() {
        return array(
            self::UNIT_LITER => 'LITER',
            self::UNIT_KG => 'KILOGRAM',
            self::UNIT_UNIT => 'UNIT',
        );
    }

    public function getUnitText() {
        $unitOptions = $this->getUnitOptions();
        return isset($unitOptions[$this->unit_movable]) ?
                $unitOptions[$this->unit_movable] : "unknown unit ({$this->unit_movable})";
    }

}