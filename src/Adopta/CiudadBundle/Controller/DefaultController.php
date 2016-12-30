<?php

namespace Adopta\CiudadBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
class DefaultController extends Controller
{
	public function listaCiudadesAction()
    {
        // obtiene listado de ciudades
		$em = $this->getDoctrine()->getManager();
		$ciudad = $em->getRepository('CiudadBundle:Ciudad')->findAll();
		return $this->render(
		'CiudadBundle:Default:listaCiudades.html.twig',
		array(
			'ciudad' => $ciudad
			
			)
		);

    }
}