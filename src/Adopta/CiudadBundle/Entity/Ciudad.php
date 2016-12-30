<?php
namespace Adopta\CiudadBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
//clase importada paa calcular el slug
use Adopta\AnimalesBundle\Util\Util;

/**
* @ORM\Entity
*/
class Ciudad
{
/**
* @ORM\Id
* @ORM\Column(type="integer")
* @ORM\GeneratedValue
*/
protected $id;
/** @ORM\Column(type="string", length=100) */
protected $nombre;
/** @ORM\Column(type="string", length=100) */
protected $slug;

	public function getId()
	{
	return $this->id;
	}
	public function setNombre($nombre)
	{
	$this->nombre = $nombre;
	$this->slug = Util::getSlug($nombre);
	}
	public function getNombre()
	{
	return $this->nombre;
	}
	public function setSlug($slug)
	{
	$this->slug = $slug;
	}
	public function getSlug()
	{
	return $this->slug;
	}
	public function __toString()
	{
	return $this->getNombre();
	}
}