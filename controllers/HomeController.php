<?php

namespace app\controllers;

use app\models\Product;
use app\controllers\AppController;

class HomeController extends AppController
{
    public function actionIndex(){
        
        $offers = Product::find()->where(['is_offer' => 1])->limit(4)->all();


        return $this->render('index', compact('offers'));
    }
}