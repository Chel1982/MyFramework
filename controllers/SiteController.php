<?php

include (ROOT . '/models/Category.php');
include (ROOT . '/models/Product.php');


/**
 * Created by PhpStorm.
 * User: andrew
 * Date: 20.08.16
 * Time: 14:23
 */
class SiteController
{
    public function actionIndex()
    {
        $categories = array();
        $categories = Category::getCategoryList();

        $latestProduct = array();
        $latestProduct = Product::getLatestProducts(3);

        require_once(ROOT . '/views/site/index.php');
        return true;
    }
}