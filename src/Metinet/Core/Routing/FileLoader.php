<?php
/**
 * @author Boris Guéry <guery.b@gmail.com>
 */

namespace Metinet\Core\Routing;

interface FileLoader
{
    public function load(): RouteCollection;
}
