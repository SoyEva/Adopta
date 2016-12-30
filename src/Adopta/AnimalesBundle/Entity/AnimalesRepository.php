<?php
namespace Adopta\AnimalesBundle\Entity;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Mapping as ORM;
class AnimalesRepository extends EntityRepository{

	public function findAnimales(){

		$query = $this->getEntityManager()
        ->createQuery(
          'SELECT a FROM AnimalesBundle:Animales a ORDER BY a.id ASC'
           );
        $query->setMaxResults(4);
        return $query->getResult();

	}
		public function findAnimalesPorCiudad($ciudad){
			
		$query = $this->getEntityManager()
        ->createQuery(
            'SELECT a FROM AnimalesBundle:Animales a
            JOIN a.ciudad c
            WHERE c.slug = :ciudad'
        )->setParameter('ciudad', $ciudad);
        $query->setMaxResults(4);
        return $query->getResult();
	}
	
	public function findAnimalesPorTipo($tipo){
			
		$query = $this->getEntityManager()
        ->createQuery(
            'SELECT a FROM AnimalesBundle:Animales a
            WHERE a.tipo = :tipo'
        )->setParameter('tipo', $tipo);
        $query->setMaxResults(6);
        return $query->getResult();
	}

}
