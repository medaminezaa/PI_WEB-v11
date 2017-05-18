<?php
/**
 * Created by PhpStorm.
 * User: Othmn
 * Date: 09/04/2017
 * Time: 22:23
 */

namespace PI\GestionRandonneurBundle\Repository;


class UserRepository extends \Doctrine\ORM\EntityRepository
{
    public function Search($recherche)
    {

        $em= $this->getEntityManager();
        $query = $em->createQuery("SELECT a FROM MyAppUserBundle:User a  WHERE a.roles='a:1:{i:0;s:15:\"ROLE_RANDONNEUR\";}'  and a.nom LIKE '$recherche%' or a.prenom LIKE '$recherche%' or a.cin LIKE '$recherche%'or a.numTel LIKE '$recherche%'   ");


        return $query->getResult();

    }
}