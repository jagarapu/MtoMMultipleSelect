<?php

namespace AppBundle\Repository;

class TagRepository extends \Doctrine\ORM\EntityRepository{
    
    public function getTagsByCategory()
    {
        return $this->getEntityManager()
            ->createQuery('SELECT t FROM AppBundle:Tag t ORDER BY t.tagname ASC')
            ->getResult();
    }
 //   public function getTagsByCategory($categoryId) {
//       $em = $this->getContainer()->get('doctrine')->getManager();
//       $repository = $em->getRepository('AppBundle:Tag');
//       return $query = $repository->createQueryBuilder('t')
//                       ->innerJoin('t.categories', 'c')
//                       ->where('c.id = :category_id')
//                       ->setParameter('category_id', $categoryId)
//                       ->getQuery()->getResult();
//   }
}