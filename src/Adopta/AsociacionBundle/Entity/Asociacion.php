<?php
namespace Adopta\AsociacionBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
//clase importada paa calcular el slug
use Adopta\AnimalesBundle\Util\Util;
/**
* @ORM\Entity
*/
class Asociacion
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
/** @ORM\Column(type="string", length=100) */
protected $nif;
/** @ORM\Column(type="string", length=10) */
protected $login;
/** @ORM\Column(type="string", length=255) */
protected $password;
/** @ORM\Column(type="string", length=255) */
protected $salt;
/** @ORM\Column(type="text") */
protected $descripcion;
/** @ORM\Column(type="string", length=100) */
protected $email;
/** @ORM\Column(type="text") */
protected $direccion;
/**
* @ORM\ManyToOne(targetEntity="Adopta\CiudadBundle\Entity\Ciudad")
*/
protected $ciudad;

/** @ORM\Column(type="string", length=255) */
protected $rutaLogo;

public function setCiudad(\Adopta\CiudadBundle\Entity\Ciudad $ciudad)
	{
	$this->ciudad = $ciudad;
	return $this;
	}
public function getCiudad()
	{
	return $this->ciudad;
	}
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
	return $this;
	}
public function getSlug()
	{
	return $this->slug;
	}
public function setLogin($login)
	{
	$this->login = $login;
	return $this;
	}
public function getLogin()
	{
	return $this->login;
	}
public function setPassword($password)
	{
	$this->password = $password;
	return $this;
	}
public function getPassword()
	{
	return $this->password;
	}
public function setSalt($salt)
	{
	$this->salt = $salt;
	return $this;
	}
public function getSalt()
	{
	return $this->salt;
	}
public function setDescripcion($descripcion)
	{
	$this->descripcion = $descripcion;
	return $this;
	}
public function getDescripcion()
	{
	return $this->descripcion;
	}
public function setDireccion($direccion)
	{
	$this->direccion = $direccion;
	return $this;
	}
public function getDireccion()
	{
	return $this->direccion;
	}
public function setEmail($email)
	{
	$this->email = $email;
	return $this;
	}
public function getEmail()
	{
	return $this->email;
	}
public function setNif($nif)
	{
	$this->nif = $nif;
	return $this;
	}
public function getNif()
	{
	return $this->nif;
	}
public function setLogo($rutaLogo)
    {
        $this->rutaLogo = $rutaLogo;
        return $this;
    }
    public function getRutaLogo()
    {
        return $this->rutaLogo;
    }
public function __toString()
	{
	return $this->getNombre();
	}
}