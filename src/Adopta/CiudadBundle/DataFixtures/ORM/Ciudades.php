<?php
namespace Adopta\CiudadBundle\DataFixtures\ORM;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Adopta\CiudadBundle\Entity\Ciudad;
class Ciudades implements FixtureInterface
{
	public function load(ObjectManager $manager)
	{
	$ciudades = array(
	array('nombre' => 'Madrid'),
	array('nombre' => 'Barcelona'),
	array('nombre' => 'Sevilla'),
	array('nombre' => 'Zaragoza'),
	array('nombre' => 'Bilbao'),
	array('nombre' => 'Lugo'),
	array('nombre' => 'Salamanca'),
	array('nombre' => 'Cuenca'),

	);
	foreach ($ciudades as $ciudad) {
	$entidad = new Ciudad();
	$entidad->setNombre($ciudad['nombre']);
	$manager->persist($entidad);
	}
	$manager->flush();
	}
}