<?php
namespace Lsu;

class DocumentTest implements Documentable
{
    public function getId()
    {
        return "id test ok";
    }

    public function getContent()
    {
        return "content test ok";
    }
}
 ?>
