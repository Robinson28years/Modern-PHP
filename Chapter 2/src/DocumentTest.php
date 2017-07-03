<?php
namespace Lsu;

class DocumentTest implements Documentable
{
    use TraitSayHello;
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
