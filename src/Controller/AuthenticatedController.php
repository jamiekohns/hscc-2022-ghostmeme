<?php

namespace Ghostmeme\Controller;

class AuthenticatedController
{
    public function beforeRoute($f3)
    {
        /** @var  Ghostmeme\Model\User */
        $sessionUser = $f3->get('session.user');

        if (!$sessionUser) {
            //$f3->reroute('/login');
        }
    }
}