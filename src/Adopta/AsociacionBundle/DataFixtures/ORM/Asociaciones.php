<?php
namespace Adopta\AsociacionBundle\DataFixtures\ORM;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Adopta\AsociacionBundle\Entity\Asociacion;
class Asociaciones implements FixtureInterface
{
	public function load(ObjectManager $manager)
	{
	$asociaciones = array(
	array('nif' => '888888','nombre' => 'Huellas Felices', 'slug' => 'huellas-felices', 'login' => 'admin', 'password' => '1234', 'salt' => '1234', 'descripcion' => 'Aenean non placerat tortor, ut tempus arcu. Pellentesque iaculis non mi at ultricies. Vivamus euismod leo et turpis placerat, ut interdum est tempus.', 'email' => 'loquesea@loquesea.com', 'direccion' => 'C/ Kalea nº10'),
	array('nif' => '777777','nombre' => 'Madrid Felina', 'slug' => 'madrid-felina', 'login' => 'admin', 'password' => '1234', 'salt' => '1234', 'descripcion' => 'Aenean non placerat tortor, ut tempus arcu. Pellentesque iaculis non mi at ultricies. Vivamus euismod leo et turpis placerat, ut interdum est tempus.', 'email' => 'loquesea@loquesea.com', 'direccion' => 'C/ Kalea nº11'),
	array('nif' => '666666','nombre' => 'Protectora Sevilla', 'slug' => 'protectora-sevilla', 'login' => 'admin', 'password' => '1234', 'salt' => '1234', 'descripcion' => 'Aenean non placerat tortor, ut tempus arcu. Pellentesque iaculis non mi at ultricies. Vivamus euismod leo et turpis placerat, ut interdum est tempus.', 'email' => 'loquesea@loquesea.com', 'direccion' => 'C/ Kalea nº12'),
	array('nif' => '555555','nombre' => 'ADANCA', 'slug' => 'adanca', 'login' => 'admin', 'password' => '1234', 'salt' => '1234', 'descripcion' => 'Aenean non placerat tortor, ut tempus arcu. Pellentesque iaculis non mi at ultricies. Vivamus euismod leo et turpis placerat, ut interdum est tempus.', 'email' => 'loquesea@loquesea.com', 'direccion' => 'C/ Kalea nº13'),
	array('nif' => '444444','nombre' => 'Ayuda Animal', 'slug' => 'ayuda-animal', 'login' => 'admin', 'password' => '1234', 'salt' => '1234', 'descripcion' => 'Aenean non placerat tortor, ut tempus arcu. Pellentesque iaculis non mi at ultricies. Vivamus euismod leo et turpis placerat, ut interdum est tempus.', 'email' => 'loquesea@loquesea.com', 'direccion' => 'C/ Kalea nº14'),
	array('nif' => '333333','nombre' => 'LUGASA', 'slug' => 'lugasa', 'login' => 'admin', 'password' => '1234', 'salt' => '1234', 'descripcion' => 'Aenean non placerat tortor, ut tempus arcu. Pellentesque iaculis non mi at ultricies. Vivamus euismod leo et turpis placerat, ut interdum est tempus.', 'email' => 'loquesea@loquesea.com', 'direccion' => 'C/ Kalea nº15'),
	array('nif' => '222222','nombre' => 'Proteccion Animal Salamanca', 'slug' => 'proteccion-animal-salamanca', 'login' => 'admin', 'password' => '1234', 'salt' => '1234', 'descripcion' => 'Aenean non placerat tortor, ut tempus arcu. Pellentesque iaculis non mi at ultricies. Vivamus euismod leo et turpis placerat, ut interdum est tempus.', 'email' => 'loquesea@loquesea.com', 'direccion' => 'C/ Kalea nº16'),
	array('nif' => '111111','nombre' => 'ASANCU', 'slug' => 'asancu', 'login' => 'admin', 'password' => '1234', 'salt' => '1234', 'descripcion' => 'Aenean non placerat tortor, ut tempus arcu. Pellentesque iaculis non mi at ultricies. Vivamus euismod leo et turpis placerat, ut interdum est tempus.', 'email' => 'loquesea@loquesea.com', 'direccion' => 'C/ Kalea nº17'),
	);
	foreach ($asociaciones as $asociacion) {
	$entidad = new Asociacion();
	$entidad->setNombre($asociacion['nombre']);
	$entidad->setNif($asociacion['nif']);
	$entidad->setSlug($asociacion['slug']);
	$entidad->setLogin($asociacion['login']);
	$entidad->setPassword($asociacion['password']);
	$entidad->setSalt(base_convert(sha1(uniqid(mt_rand(), true)), 16, 36));
	$entidad->setDescripcion($asociacion['descripcion']);
	$entidad->setDireccion($asociacion['direccion']);
	$entidad->setEmail($asociacion['email']);

	$manager->persist($entidad);
	}
	$manager->flush();
	}
}