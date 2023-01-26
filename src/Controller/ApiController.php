<?php
namespace App\Controller;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class ApiController
{
  
  public function getData(ServerRequestInterface $request, ResponseInterface $response, array $args): ResponseInterface
  {

    require('../src/Controller/MongoDbInit.php');
    $response->getBody()->write(file_get_contents('../src/JSON/geo.json'));
    return $response;
  }

   
}