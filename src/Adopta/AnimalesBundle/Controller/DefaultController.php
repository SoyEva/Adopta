<?php

namespace Adopta\AnimalesBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class DefaultController extends Controller
{
	public function portadaAction()
	{		
		$em = $this->getDoctrine()->getManager();
		$animales = $em->getRepository('AnimalesBundle:Animales')
        ->findAnimales();
		return $this->render('AnimalesBundle:Default:portada.html.twig',
		array('animales' => $animales)
			);

		}
	public function ciudadAction($ciudad)
	{
			
		$animales = $this->getDoctrine()
     	->getRepository('AnimalesBundle:Animales')
        ->findAnimalesPorCiudad($ciudad);
		return $this->render('AnimalesBundle:Default:portadaporciudad.html.twig',
		array('animales' => $animales,
			  'titulo' => $ciudad)
			);
	}
	
}