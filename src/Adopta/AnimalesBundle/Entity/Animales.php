<?php

namespace Adopta\AnimalesBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
//clase importada paa calcular el slug
use Adopta\AnimalesBundle\Util\Util;

/**
* @ORM\Entity(repositoryClass="Adopta\AnimalesBundle\Entity\AnimalesRepository")
*/
class Animales
{
/**
* @ORM\Id
* @ORM\Column(type="integer")
* @ORM\GeneratedValue
*/
    protected $id;

/** @ORM\Column(type="string", length=255) */
    protected $nombre;

/** @ORM\Column(type="string", length=255) */
    protected $tipo;

/** @ORM\Column(type="string", length=255) */
    protected $descripcion;

/** @ORM\Column(type="string", length=255) */
    protected $edad;

/** @ORM\Column(type="string", length=255) */
    protected $rutaFoto;
/**
* @ORM\ManyToOne(targetEntity="Adopta\AsociacionBundle\Entity\Asociacion")
*/
    protected $asociacion;
    /**
* @ORM\ManyToOne(targetEntity="Adopta\CiudadBundle\Entity\Ciudad")
*/
    protected $ciudad;

/** @ORM\Column(type="string", length=255) */
    protected $sexo;

/** @ORM\Column(type="string", length=255) */
    protected $rutaFoto2;

/** @ORM\Column(type="string", length=255) */
    protected $rutaFoto3;

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

public function setTipo($tipo)
    {
        $this->tipo = $tipo;
        return $this;
    }
public function getTipo()
    {
        return $this->tipo;
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
public function setEdad($edad)
    {
        $this->edad = $edad;
        return $this;
    }
public function getEdad()
    {
        return $this->edad;
    }
    public function setRutaFoto($rutaFoto)
    {
        $this->rutaFoto = $rutaFoto;
        return $this;
    }
    public function getRutaFoto()
    {
        return $this->rutaFoto;
    }
    
    public function setAsociacion(\Adopta\AsociacionBundle\Entity\Asociacion $asociacion)
    {
        $this->asociacion = $asociacion;

        return $this;
    }

    public function getAsociacion()
    {
        return $this->asociacion;
    }
      public function setCiudad(\Adopta\CiudadBundle\Entity\Ciudad $ciudad)
    {
        $this->ciudad = $ciudad;
        return $this;
    }

    public function getCiudad()
    {
        return $this->ciudad;
    }

    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
        return $this;
    }

    public function getSexo()
    {
        return $this->sexo;
    }

    public function setRutaFoto2($rutaFoto2)
    {
        $this->rutaFoto2 = $rutaFoto2;
        return $this;
    }
    public function getRutaFoto2()
    {
        return $this->rutaFoto2;
    }
    public function setRutaFoto3($rutaFoto3)
    {
        $this->rutaFoto3 = $rutaFoto3;
        return $this;
    }
    public function getRutaFoto3()
    {
        return $this->rutaFoto3;
    }
    public function __toString()
    {
    return $this->getNombre();
    }
}
