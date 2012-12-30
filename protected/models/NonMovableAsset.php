<?php

/**
 * This is the model class for table "non_movable_asset".
 *
 * The followings are the available columns in table 'non_movable_asset':
 * @property integer $id
 * @property string $code_item_non_movable
 * @property string $name_item_non_movable
 * @property integer $price_book_non_movable
 * @property integer $purchase_price_non_movable
 * @property integer $volume_non_movable
 * @property string $unit_non_movable
 * @property string $life_non_movable
 * @property string $responsibility_non_movable
 * @property string $actual_end_non_movable
 *
 * The followings are the available model relations:
 * @property NonMovableUsage[] $NonMovableUsages
 * @property NonMovableMaintenance[] $nonMovableMaintenances
 */
class NonMovableAsset extends CActiveRecord {

    const UNIT_LITER = 'LTR';
    const UNIT_KG = 'KG';
    const UNIT_UNIT = 'UNT';

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return NonMovableAsset the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'non_movable_asset';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('code_item_non_movable, name_item_non_movable, price_book_non_movable, purchase_price_non_movable, volume_non_movable, unit_non_movable, life_non_movable, responsibility_non_movable, actual_end_non_movable', 'required'),
            array('price_book_non_movable, purchase_price_non_movable, volume_non_movable', 'numerical', 'integerOnly' => true),
            array('code_item_non_movable, unit_non_movable, responsibility_non_movable', 'length', 'max' => 50),
            array('name_item_non_movable', 'length', 'max' => 255),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, code_item_non_movable, name_item_non_movable, price_book_non_movable, purchase_price_non_movable, volume_non_movable, unit_non_movable, life_non_movable, responsibility_non_movable, actual_end_non_movable', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'NonMovableUsages' => array(self::HAS_MANY, 'NonMovableUsage', 'non_movable_asset_id'),
            'nonMovableMaintenances' => array(self::HAS_MANY, 'NonMovableMaintenance', 'non_movable_asset_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'code_item_non_movable' => 'Code Item Non Movable',
            'name_item_non_movable' => 'Name Item Non Movable',
            'price_book_non_movable' => 'Price Book Non Movable',
            'purchase_price_non_movable' => 'Purchase Price Non Movable',
            'volume_non_movable' => 'Volume Non Movable',
            'unit_non_movable' => 'Unit Non Movable',
            'life_non_movable' => 'Life Non Movable',
            'responsibility_non_movable' => 'Responsibility Non Movable',
            'actual_end_non_movable' => 'Actual End Non Movable',
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
        $criteria->compare('code_item_non_movable', $this->code_item_non_movable, true);
        $criteria->compare('name_item_non_movable', $this->name_item_non_movable, true);
        $criteria->compare('price_book_non_movable', $this->price_book_non_movable);
        $criteria->compare('purchase_price_non_movable', $this->purchase_price_non_movable);
        $criteria->compare('volume_non_movable', $this->volume_non_movable);
        $criteria->compare('unit_non_movable', $this->unit_non_movable, true);
        $criteria->compare('life_non_movable', $this->life_non_movable, true);
        $criteria->compare('responsibility_non_movable', $this->responsibility_non_movable, true);
        $criteria->compare('actual_end_non_movable', $this->actual_end_non_movable, true);

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
        return isset($unitOptions[$this->unit_non_movable]) ?
                $unitOptions[$this->unit_non_movable] : "unknown unit ({$this->unit_non_movable})";
    }

}