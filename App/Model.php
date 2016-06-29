<?php

namespace App;

abstract class Model
{
    const TABLE = '';

    public static function findAll()
    {
        $db = DB::getInstance();
        return $db->query('select * from ' . static::TABLE, [], static::class);
    }

    public static function findById($id)
    {
        $db = DB::getInstance();
        return $db->query('select * from ' . static::TABLE . ' where id=' . $id, [], static::class)[0];
    }
}