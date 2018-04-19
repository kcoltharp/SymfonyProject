<?php
/**
 * User: Kenny
 * Date: 04/17/18
 * Time: 2:46 AM
 */

namespace App\Controller;

use function mt_rand;
use Symfony\Component\HttpFoundation\Response;

class LuckyController {

     public function number(){
          $number = null;
          $number = mt_rand(100, 999);

          return new Response('<html><body>Lucky Number: ' . $number . '</body></html>');
     }
}