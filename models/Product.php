<?php

/**
 * Created by PhpStorm.
 * User: andrew
 * Date: 21.08.16
 * Time: 7:57
 */
class Product
{
    const SHOW_BY_DEFAULT = 6;

    public static function getLatestProducts($count = self::SHOW_BY_DEFAULT, $page = 1)
    {
        $count = intval($count);
        $page = intval($page);
        $offset = $count * $page;

        $db = DB::getConnection();

        $productsList = array();

    $result = $db->query("SELECT id, name, price, image, is_new FROM product 
                        ORDER BY id 
                        LIMIT " . $count
                        . " OFFSET ". $offset
                        );

        $i = 0;
        while ($row = $result -> fetch()){
            $productsList[$i]['id'] = $row['id'];
            $productsList[$i]['name'] = $row['name'];
            $productsList[$i]['image'] = $row['image'];
            $productsList[$i]['price'] = $row['price'];
            $productsList[$i]['is_new'] = $row['is_new'];

            $i++;
        }
        return $productsList;
    }

    public static function getProductListByCategory($categoryId = false, $page = 1)
    {
        if($categoryId){

            $page = intval($page);
            $offset = ($page - 1) * self::SHOW_BY_DEFAULT;

            $db = DB::getConnection();

            $products = array();
            $result = $db -> query("SELECT id, name, price, image, is_new FROM product
                                    WHERE category_id = " . $categoryId . " 
                                    ORDER BY id 
                                    LIMIT " . self::SHOW_BY_DEFAULT
                                    . " OFFSET " . $offset
                                    );

            $i = 0;
            while ($row = $result -> fetch()){
                $products[$i]['id'] = $row['id'];
                $products[$i]['name'] = $row['name'];
                $products[$i]['image'] = $row['image'];
                $products[$i]['price'] = $row['price'];
                $products[$i]['is_new'] = $row['is_new'];

                $i++;
            }
            return $products;
        }
    }

    public static function getProductById($id)
    {
        $id = intval($id);

        if($id){
            $db = DB::getConnection();

            $result = $db -> query("SELECT * FROM product WHERE id=" . $id);
            $result -> setFetchMode(PDO::FETCH_ASSOC);

            return $result -> fetch();
        }
    }
}