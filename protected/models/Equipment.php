<?php

/**
 * This is the model class for table "equipment".
 *
 * The followings are the available columns in table 'equipment':
 * @property integer $id
 * @property string $code_item
 * @property string $name_item
 * @property integer $price_book
 * @property integer $purchase_price
 * @property integer $amount_of_supplies
 * @property string $unit_equipment
 *
 * The followings are the available model relations:
 * @property EquipmentUsage[] $equipmentUsages
 */
class Equipment extends CActiveRecord {

    const UNIT_LITER = 'LTR';
    const UNIT_KG = 'KG';
    const UNIT_UNIT = 'UNT';

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Equipment the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'equipment';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('code_item, name_item, price_book, purchase_price, amount_of_supplies, unit_equipment', 'required'),
            array('price_book, purchase_price, amount_of_supplies', 'numerical', 'integerOnly' => true),
            array('code_item, unit_equipment', 'length', 'max' => 50),
            array('name_item', 'length', 'max' => 255),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, code_item, name_item, price_book, purchase_price, amount_of_supplies, unit_equipment', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'equipmentUsages' => array(self::HAS_MANY, 'EquipmentUsage', 'equipment_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'code_item' => 'Code Item',
            'name_item' => 'Name Item',
            'price_book' => 'Price Book',
            'purchase_price' => 'Purchase Price',
            'amount_of_supplies' => 'Amount Of Supplies',
            'unit_equipment' => 'Unit Equipment',
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
        $criteria->compare('code_item', $this->code_item, true);
        $criteria->compare('name_item', $this->name_item, true);
        $criteria->compare('price_book', $this->price_book);
        $criteria->compare('purchase_price', $this->purchase_price);
        $criteria->compare('amount_of_supplies', $this->amount_of_supplies);
        $criteria->compare('unit_equipment', $this->unit_equipment, true);

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
        return isset($unitOptions[$this->unit_equipment]) ?
                $unitOptions[$this->unit_equipment] : "unknown unit ({$this->unit_equipment})";
    }
}