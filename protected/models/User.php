<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property string $id
 * @property string $username
 * @property string $password
 * @property string $enkrip
 * @property string $created
 * @property string $email
 * @property string $nomor
 * @property string $desc
 * @property integer $level_id
 * @property integer $departement_id
 *
 * The followings are the available model relations:
 * @property Departement[] $departements
 * @property MovableMaintenance[] $movableMaintenances
 * @property MovableUsage[] $movableUsages
 * @property NonMovableUsage[] $nonMovableUsages
 * @property NonMovableMaintenance[] $nonMovableMaintenances
 * @property Level $level
 * @property Departement $departement
 */
class User extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return User the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'user';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('username, password, enkrip, created, email, nomor, desc, level_id', 'required'),
            array('level_id, departement_id', 'numerical', 'integerOnly' => true),
            array('username, password, enkrip, email', 'length', 'max' => 32),
            array('nomor', 'length', 'max' => 100),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, username, password, enkrip, created, email, nomor, desc, level_id, departement_id', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'departements' => array(self::HAS_MANY, 'Departement', 'id_head_dept'),
            'movableMaintenances' => array(self::HAS_MANY, 'MovableMaintenance', 'user_id'),
            'movableUsages' => array(self::HAS_MANY, 'MovableUsage', 'user_id'),
            'nonMovableUsages' => array(self::HAS_MANY, 'NonMovableUsage', 'user_id'),
            'nonMovableMaintenances' => array(self::HAS_MANY, 'NonMovableMaintenance', 'user_id'),
            'level' => array(self::BELONGS_TO, 'Level', 'level_id'),
            'departement' => array(self::BELONGS_TO, 'Departement', 'departement_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
            'enkrip' => 'Enkrip',
            'created' => 'Created',
            'email' => 'Email',
            'nomor' => 'Nomor',
            'desc' => 'Desc',
            'level_id' => 'Level',
            'departement_id' => 'Departement',
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

        $criteria->with = array('departement', 'level');
        $criteria->compare('id', $this->id, true);
        $criteria->compare('username', $this->username, true);
        $criteria->compare('password', $this->password, true);
        $criteria->compare('enkrip', $this->enkrip, true);
        $criteria->compare('created', $this->created, true);
        $criteria->compare('email', $this->email, true);
        $criteria->compare('nomor', $this->nomor, true);
        $criteria->compare('desc', $this->desc, true);
        $criteria->compare('level_id', $this->level_id);
        $criteria->compare('departement_id', $this->departement_id);

        return new CActiveDataProvider($this, array(
                    'criteria' => $criteria,
                ));
    }

}