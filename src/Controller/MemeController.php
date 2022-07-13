<?php

namespace Ghostmeme\Controller;

use Ghostmeme\Repository\MemeRepository;

class MemeController extends AuthenticatedController {

    public function beforeRoute($f3)
    {
        parent::beforeRoute($f3);    
    }

    public function afterRoute($f3)
    {
        $logfile = fopen($f3->get('log_path'), 'a');

        $msg = sprintf('%s %s', $f3->get('PATH'), $f3->get('session.user')->getUsername());

        fwrite($msg, $logfile,);
        fclose($logfile);
    }

    public function index($f3)
    {
        $repo = new MemeRepository($f3->get('secrets.API_KEY'));

        /** @var $memes $resultSet (Meme) */
        $memes = $repo->getMemes();

        $f3->set('memes', $memes);

        echo \Template::instance()->render('templates/memes/index.html');        
    }

}