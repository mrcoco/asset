<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="en" />

        <!-- blueprint CSS framework -->
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/css/screen.css" media="screen, projection" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/css/print.css" media="print" />
        <!--[if lt IE 8]>
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/css/ie.css" media="screen, projection" />
        <![endif]-->

        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/css/main.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/css/form.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/css/buttons.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/css/icons.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/css/tables.css" />

        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/css/mbmenu.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/css/mbmenu_iestyles.css" />


        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    </head>

    <body>

        <div class="container" id="page">
            <div id="topnav">
                <div class="topnav_text"><a href='#'>Home</a> | <a href='#'>My Account</a> | <a href='#'>Settings</a> | 

                    <?php
                    $url = Yii::app()->user->isGuest ? array(
                        'label' => 'Login',
                        'link' => array('/site/login'),
                            ) : array(
                        'label' => 'Logout (' . Yii::app()->user->name . ')',
                        'link' => array('/site/logout'),
                            );
                    echo CHtml::link($url['label'], $url['link']);
                    ?>     
                </div>
            </div>
            <div id="header">
                <div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
            </div><!-- header -->
            <div id="mainMbMenu">


                <?php
                $this->widget('application.extensions.mbmenu.MbMenu', array(
                    'items' => array(
                        array(
                            'label' => 'Home',
                            'url' => array('/site/index'),
                            'itemOptions' => array('class' => 'first'),
//                            'image' => Yii::app()->request->baseUrl . '/images/icon-home.png'
                        ),
                        array(
                            'label' => 'Equipment',
                            'url' => array('/equipment/admin'),
                            'visible' => !Yii::app()->user->isGuest,
//                            'image' => Yii::app()->request->baseUrl . '/images/icon-asset.png'
                        ),
                        array(
                            'label' => 'Asset',
                            'visible' => !Yii::app()->user->isGuest,
//                            'image' => Yii::app()->request->baseUrl . '/images/icon-administration.png',
                            'items' => array(
                                array(
                                    'label' => 'Movable',
                                    'url' => array('/movableAsset/admin'),
//                                    'image' => Yii::app()->request->baseUrl . '/images/icon-administration.png',
                                    'items' => array(
                                        array(
                                            'label' => 'Movable Asset',
                                            'url' => array('/movableAsset/admin'),
//                                            'image' => Yii::app()->request->baseUrl . '/images/icon-ftp.png',
                                        ),
                                        array(
                                            'label' => 'Movable Maintenace',
                                            'url' => array('/movableMaintenance/admin'),
//                                            'image' => Yii::app()->request->baseUrl . '/images/icon-administration.png',
                                        ),
                                    ),
                                ),
                                array(
                                    'label' => 'Non Movable',
                                    'url' => array('/nonMovableAsset/admin'),
//                                    'image' => Yii::app()->request->baseUrl . '/images/icon-administration.png',
                                    'items' => array(
                                        array(
                                            'label' => 'Non Movable Asset',
                                            'url' => array('/nonMovableAsset/admin'),
//                                            'image' => Yii::app()->request->baseUrl . '/images/icon-nonMove.png',
                                        ),
                                        array(
                                            'label' => 'Non Movable Maintenance',
                                            'url' => array('/nonMovableMaintenance/admin'),
//                                            'image' => Yii::app()->request->baseUrl . '/images/icon-administration.png',
                                        ),
                                    ),
                                ),
                            ),
                        ),
                        array(
                            'label' => 'Departement',
                            'url' => array('/departement/admin'),
                            'visible' => !Yii::app()->user->isGuest,
//                            'image' => Yii::app()->request->baseUrl . '/images/icon-tools.png',
                        ),
                        array(
                            'label' => 'Admin',
                            'url' => array('/user/admin'),
//                            'image' => Yii::app()->request->baseUrl . '/images/icon-admin.png',
                            'visible' => !Yii::app()->user->isGuest
                        ),
//                          array('label' => 'Contact', 'url' => array('/site/contact')),
                    ),
                ));
                ?> 
            </div> <!--mainmenu -->
            <?php if (isset($this->breadcrumbs)): ?>
                <?php
                $this->widget('zii.widgets.CBreadcrumbs', array(
                    'links' => $this->breadcrumbs,
                ));
                ?><!-- breadcrumbs -->
            <?php endif ?>

            <?php echo $content; ?>

            <div id="footer">
                Copyright &copy; <?php echo date('Y'); ?> by webapplicationthemes.com<br/>
                All Rights Reserved.<br/>
                <?php echo Yii::powered(); ?>
            </div><!-- footer -->

        </div><!-- page -->

    </body>
</html>