 <?php




/** @var \Laravel\Lumen\Routing\Router $router */

use App\Http\Controllers\UsuariosController;

$router->get('/', function () use ($router) {
    return $router->app->version();
});

# /api/validar/paolo/1234
$router->group(["prefix" => "api"], function() use($router) {
    $router->get("validar/{user}/{password}", ["uses" => "UsuariosController@validar"]);
    $router->post("guardar", ["uses" => "UsuariosController@save"]);
});
