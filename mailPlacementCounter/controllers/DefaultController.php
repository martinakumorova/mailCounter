<?php

namespace vendor\mailCounter\mailPlacementCounter\controllers;

use yii\web\Controller;

/**
 * Default controller for the `mailPlacementCounter` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */



    public function actionIndex()
    {

        $config = [
            'gmailSpam' => [
                'hostname' => '{imap.gmail.com:993/imap/ssl}',
                'paths' => ['INBOX','[Gmail]/Spam'],
                'username' => 'novyemail05@gmail.com',
                'password' => 'javascript',
                'server' => '{imap.gmail.com:993/ssl}',
            ],
            'centrumInbox' => [
                'hostname' => '{imap.centrum.sk:993/ssl}',
                'paths' => ['INBOX','Hromadn&AOE-','Spamov&AP0- k&APQBYQ-'],
                'username' => 'email011@centrum.sk',
                'password' => 'javascript',
                'server' => '{imap.centrum.sk:993/ssl}',
            ],
            'seznamInbox' => [
                'hostname' => '{imap.seznam.cz:993/ssl}',
                'paths' => ['INBOX','spam','newsletters'],
                'username' => 'mail0011@seznam.cz',
                'password' => 'javascript',
                'server' => '{imap.seznam.cz:993/ssl}',
            ],
        ];

        foreach ($config AS $conf)
        {
            $countMails=0;
            foreach ($conf['paths'] AS $path)
            {
                $imapOpen= imap_open($conf['hostname'].$path, $conf['username'],$conf['password']) or die('Cannot connect to Gmail: ' . imap_last_error());
                $emails = imap_search($imapOpen,'UNSEEN');
                if($emails){
                    if($emails==null){
                        $output[]=0;
                    }else{$output[]=count($emails);$countMails+=count($emails);}
                }else{
                    $output[]=0;
                }
                imap_close($imapOpen);

            }$countAllMails[]=$countMails;
        }

        return $this->render('index', [
            'model' => $output,
            'count' => $countAllMails,
        ]);

    }
}
