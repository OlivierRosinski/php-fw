<?php
/**
 * @author Boris Guéry <guery.b@gmail.com>
 */

namespace Metinet\Core\Routing;

class JsonFileLoader implements FileLoader
{
    private $paths;

    public function __construct(array $paths)
    {
        $this->paths = $paths;
    }

    public function load(): RouteCollection
    {
        $routes = new RouteCollection();

        foreach ($this->paths as $path) {
            $content = file_get_contents($path);
            $rawRoutes = json_decode($content, true);

            foreach ($rawRoutes['routes'] as $routeName => $rawRoute) {
                $routes->add(new Route(
                    $rawRoute['methods'],
                    $rawRoute['path'],
                    $rawRoute['action']
                ));
            }
        }

        return $routes;
    }
}
