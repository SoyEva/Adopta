<?php

namespace Adopta\AsociacionBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
class DefaultController extends Controller
{

public function portadaAction($asociacion)
	{
			
		$em = $this->getDoctrine()->getManager();
		$asociacion = $em->getRepository('AsociacionBundle:Asociacion')->findOneBy(array(
		'slug' => $asociacion,
));
		return $this->render('AsociacionBundle:Default:portadaAsociacion.html.twig', array(
'asociacion' => $asociacion
));
	}
}