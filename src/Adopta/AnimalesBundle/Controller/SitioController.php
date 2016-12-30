<?php
// src/Adopta/AnimalesBundle/Controller/SitioController.php
namespace Adopta\AnimalesBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
class SitioController extends Controller
{
	public function estaticaAction($pagina)
	{
	return $this->render('AnimalesBundle:Default:'.$pagina.'.html.twig');
	}
}
