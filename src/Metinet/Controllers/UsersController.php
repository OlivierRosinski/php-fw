<?php
/**
 * @author Boris Guéry <guery.b@gmail.com>
 */

namespace Metinet\Controllers;


use Metinet\Core\Http\Request;
use Metinet\Core\Http\Response;
use Metinet\Core\Templating\PhpViewRenderer;
use Metinet\Domain\Users\User;

class UsersController
{
    public function viewConferences(Request $request): Response
    {
        $users = [];
        $users[] = User::register($request->getQuery()->get('iduser'),$request->getQuery()->get('username'),$request->getQuery()->get('password'));

        $viewRenderer = new PhpViewRenderer(__DIR__ . '/../Resources/views/', __DIR__ . '/../Resources/views/layout.html.php');

        return new Response($viewRenderer->render('users.html.php', ['users' => $users]));
    }

    public function submitNewUser(Request $request): Response
    {
        $user = User::submit(

        );
    }
}
















