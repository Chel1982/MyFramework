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
        $latestProduct = Product::getLatestProducts();

        require_once(ROOT . '/views/catalog/index.php');
        return true;
    }

    public function actionCategory($categoryId, $page = 1)
    {
        $categories = array();
        $categories = Category::getCategoryList();

        $categoryProduct = array();
        $categoryProduct = Product::getProductListByCategory($categoryId, $page);

        require_once(ROOT . '/views/catalog/category.php');
        return true;
    }
}