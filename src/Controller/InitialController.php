<?php
// src/Controller/InitialController

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class InitialController extends Controller{
	/**
	 *  @Route("/index.php", name="app_Initial")
	 */

	public function index(){
		$page = "index.php";
		return new Response("index.php");
	}
}
?>