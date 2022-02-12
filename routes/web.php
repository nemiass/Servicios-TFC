 <?php




/** @var \Laravel\Lumen\Routing\Router $router */

$router->get('/', function () use ($router) {
    return $router->app->version();
});

# /api/validar/paolo
$router->group(["prefix" => "api"], function() use($router) {
    $router->get("validar/{user}", ["uses" => "UsuariosController@validar"]);
    $router->post("guardar", ["uses" => "UsuariosController@save"]);
});
