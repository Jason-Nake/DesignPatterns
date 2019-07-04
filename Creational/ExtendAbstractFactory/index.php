<?php
/**
 * Created by PhpStorm.
 * User: xssy
 * Date: 2019/7/4
 * Time: 2:47 PM
 */
namespace DesignPatterns\Creational\ExtendAbstractFactory;
require __DIR__.'./../vendor/autoload.php';

class Client
{
    public function run()
    {
        //  创建user
        $factory = new Factory();
        $user = $factory->createUser();
        $user->insert();

        echo '<br>';
        $user->select();
        echo '<br>';

        //创建article
        $article = $factory->createArticle();
        $article->insert();
        echo '<br>';
        $article->select();
    }


}
$client = new Client();
$client->run();
