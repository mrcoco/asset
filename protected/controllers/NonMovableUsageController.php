<?php

class NonMovableUsageController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';

    /**
     * @return array action filters
     */
    public function filters() {
        return array(
            'accessControl', // perform access control for CRUD operations
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        return array(
//            array('allow', // allow all users to perform 'index' and 'view' actions
//                'actions' => array('index', 'view'),
//                'users' => array('*'),
//            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('index', 'view', 'create', 'update', 'admin', 'delete', 'calendar'),
                'users' => array('@'),
            ),
//            array('allow', // allow admin user to perform 'admin' and 'delete' actions
//                'actions' => array('admin', 'delete'),
//                'users' => array('admin'),
//            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new NonMovableUsage;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['NonMovableUsage'])) {
            $model->attributes = $_POST['NonMovableUsage'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['NonMovableUsage'])) {
            $model->attributes = $_POST['NonMovableUsage'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        if (Yii::app()->request->isPostRequest) {
            // we only allow deletion via POST request
            $this->loadModel($id)->delete();

            // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
            if (!isset($_GET['ajax']))
                $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
        }
        else
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $dataProvider = new CActiveDataProvider('NonMovableUsage');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new NonMovableUsage('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['NonMovableUsage']))
            $model->attributes = $_GET['NonMovableUsage'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer the ID of the model to be loaded
     */
    public function loadModel($id) {
        $model = NonMovableUsage::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param CModel the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'non-movable-usage-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    public function actionCalendar($idasset) {
        header('content-type:text/plain');

        if (isset($_GET['start']) && isset($_GET['end'])) {
            $data = array();
            $criteria = new CDbCriteria();
            $criteria->compare('non_movable_asset_id', $idasset);
            $criteria->order = 'set_out_non_movable_usage ASC';
            $start = date('Y-m-d H:i:s', $_GET['start']);
            $end = date('Y-m-d H:i:s', $_GET['end']);
            $criteria->compare('set_out_non_movable_usage', '>=' . $start, false, 'AND');
            $criteria->compare('set_out_non_movable_usage', '<=' . $end, false, 'AND');
            $criteria->compare('estimate_non_movable_usage', '>=' . $start, false, 'AND');
            $criteria->compare('estimate_non_movable_usage', '<=' . $end, false, 'AND');

            $usages = NonMovableUsage::model()->findAll($criteria);

            $i = 0;
            foreach ($usages as $usage) {
                $content = 'start = ' . $usage->set_out_non_movable_usage . ' | end =' . $usage->estimate_non_movable_usage;
                $data[$i]['id'] = $usage->id;
                $data[$i]['model'] = 'usage';
                $data[$i]['allday'] = false;
//                $data[$i]['color'] = "#ff0000";
                $data[$i]['start'] = $usage->set_out_non_movable_usage;
                $data[$i]['end'] = $usage->estimate_non_movable_usage;
                $data[$i]['title'] = $content;
                $i++;
            }

            $criteria2 = new CDbCriteria();
            $criteria2->compare('non_movable_asset_id', $idasset);
            $criteria2->order = 'outset_non_movable ASC';
            $start = date('Y-m-d H:i:s', $_GET['start']);
            $end = date('Y-m-d H:i:s', $_GET['end']);
            $criteria2->compare('outset_non_movable', '>=' . $start, false, 'AND');
            $criteria2->compare('outset_non_movable', '<=' . $end, false, 'AND');
            $criteria2->compare('completed_non_movable ', '>=' . $start, false, 'AND');
            $criteria2->compare('completed_non_movable ', '<=' . $end, false, 'AND');

            $maintenances = NonMovableMaintenance::model()->findAll($criteria2);
//            $i = 0;
            foreach ($maintenances as $maintenance) {
                $content = 'start = ' . $maintenance->outset_non_movable . ' | end =' . $maintenance->completed_non_movable;
                $data[$i]['id'] = $maintenance->id;
                $data[$i]['model'] = 'maintenance';
                $data[$i]['allday'] = false;
                $data[$i]['color'] = "#ff0000";
                $data[$i]['start'] = $maintenance->outset_non_movable;
                $data[$i]['end'] = $maintenance->completed_non_movable;
                $data[$i]['title'] = $content;
                $i++;
            }

            echo CJSON::encode($data);
        }
        exit;
    }

}
