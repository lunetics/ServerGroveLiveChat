<?php

namespace ServerGrove\LiveChatBundle\Document;

/**
 * Description of DocumentRepository
 *
 * @author Ismael Ambrosi<ismael@servergrove.com>
 */
abstract class DocumentRepository extends \Doctrine\ODM\MongoDB\DocumentRepository
{

    public function findSlice($offset, $length)
    {
        return $this->createQueryBuilder()->skip($offset)->limit($length)->getQuery()->execute();
    }

}