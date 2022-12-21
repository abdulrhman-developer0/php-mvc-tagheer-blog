<?php

namespace App\Models;
use Core;

class Articles extends Core\Model
{
    const TABLE =  'articles';

    public function addArticle(string $title,string $content,string $img)
    {
        $date = date('Y-m-d');
        $values = '"'. addslashes($title) .'","'.addslashes($content).'","'.addslashes($img).'","'.addslashes($date ).'"';
        return $this->insert_into(self::TABLE,'article_title,article_content,article_img,article_date',$values);
        
    }

    public function editArticle(string $id,string $title,string $content,string $img)
    {
        $SETS = 'article_title="'.$title.'", article_content="'.$content.'", article_img="'.$img.'"';
        return $this->update(self::TABLE,$SETS,'WHERE article_id='.$id);
    }

    public function removeArticle(string $id)
    {
        return $this->delete(self::TABLE, 'where article_id='.$id );
    }

    public function allArticles()
    {
        return $this->select('*',self::TABLE,'order by article_id desc');
    }

    public function getArticlesByRules(int $limit = 0 ,string $order = 'DESC')
    {
        $sql = 'SELECT * FROM '.self::TABLE.' ORDER BY article_id '.$order.' LIMIT '.$limit;
        return $this->query($sql)->fetchAll();
    }

    public function getArticleById(string $id)
    {
        return $this->select('*',self::TABLE,'WHERE article_id='.$id)->fetch();
    }
}