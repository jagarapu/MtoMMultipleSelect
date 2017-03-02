<?php

namespace AppBundle\Repository;

class TagRepository extends \Doctrine\ORM\EntityRepository{
    
    public function getTagsByCategory()
    {
        return $this->getEntityManager()
            ->createQuery('SELECT t FROM AppBundle:Tag t ORDER BY t.tagname ASC')
            ->getResult();
    }
}