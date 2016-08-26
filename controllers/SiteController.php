<?php
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
        $latestProduct = Product::getLatestProducts();

        require_once(ROOT . '/views/site/index.php');
        return true;
    }
}