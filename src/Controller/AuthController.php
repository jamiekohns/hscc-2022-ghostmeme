<?php

namespace Ghostmeme\Controller;

class AuthController {
    public function index($f3): void
    {
        $msg = $f3->get('REQUEST.msg');
        $f3->set('message', $msg);
        $f3->set('inc', 'auth/index.html');
    }

    public function login($f3)
    {
        $username = $f3->get('REQUEST.username');
        $password = $f3->get('REQUEST.password');

        /** @var $user Ghostmeme\Model\User */
        $user = UserRepository::getUserByUsername($username);
        $user->getLocalInfo($f3);

        if(password_verify($password, $user->getPassword())) {
            $f3->set('SESSION.user', $user);
            $f3->reroute('/home');
        } else {
            $f3->reroute('/login?msg=error');
        }
    }
}