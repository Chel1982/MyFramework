<?php

include (ROOT . '/models/Category.php');
include (ROOT . '/models/Product.php');

class CatalogController
{
    public function actionIndex()
    {
        $categories = array();
        $categories = Category::getCategoryList();

        $latestProduct = array();
        $latestProduct = Product::getLatestProducts(5);

        require_once(ROOT . '/views/catalog/index.php');
        return true;
    }

    public function actionCategory($categoryId)
    {
        $categories = array();
        $categories = Category::getCategoryList();

        $categoryProduct = array();
        $categoryProduct = Product::getProductListByCategory($categoryId);

        require_once(ROOT . '/views/catalog/category.php');
        return true;
    }
}