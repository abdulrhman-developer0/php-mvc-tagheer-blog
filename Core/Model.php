<?php

namespace Core;

class Model
{
    protected  $db;

    public function __construct()
    {
        $this->db = App::$db;
    }

    public function query(string $sql)
    {
        return $this->db->query($sql);
    }

    public function select(string $COLUMNS,string $TABLE,string $WHERE ='')
    {
        $sql = 'SELECT '.$COLUMNS.' FROM '.$TABLE.'  '.$WHERE;
        return $this->query($sql);
    }

    public function insert_into(string $table,string $columns='',string $values='')
    {
        $q = 'INSERT INTO '.$table;
        if ($columns!='') $q .= ' (' . $columns . ')';
        if ($values=='') return;
        $q .= ' VALUES ('.$values.')';
        return $this->query($q);
    }

    public function update(string $TABLE,string $SET,string $WHERE='')
    {
        $this->query('UPDATE '.$TABLE.' SET '.$SET.' '.$WHERE);
    }

    public function delete(string $TABLE,string $WHERE='')
    {
        return $this->query('DELETE FROM '.$TABLE.' '.$WHERE);
    }

}