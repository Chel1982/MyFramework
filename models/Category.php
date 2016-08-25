<?php

/**
 * Created by PhpStorm.
 * User: andrew
 * Date: 20.08.16
 * Time: 19:11
 */
class Category
{
    public static function getCategoryList()
    {
        $db = DB::getConnection();

        $categoryList = array();

        $result = $db -> query('SELECT id, name FROM category');

        $i = 0;
        while ($row = $result -> fetch()){
            $categoryList[$i]['id'] = $row['id'];
            $categoryList[$i]['name'] = $row['name'];
            $i++;
        }
        return $categoryList;
    }
}