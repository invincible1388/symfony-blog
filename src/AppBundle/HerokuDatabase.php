<?php
namespace AppBundle;
use Composer\Script\Event;
class HerokuDatabase
{
    public static function populateEnvironment(Event $event)
    {
        $url = getenv("DATABASE_URL");
        if ($url) {
            $url = parse_url($url);
            putenv("DATABASE_HOST=ec2-107-22-251-225.compute-1.amazonaws.com");
            putenv("DATABASE_USER=ungijcsbwdqdjb");
            putenv("DATABASE_PASSWORD=0p4-vQcuUyGaLQAqDdSLBqp7EG");
            $db = substr($url['path'],1);
            putenv("DATABASE_NAME=d9c1n3j0f8hql8");
        }
        $io = $event->getIO();
        $io->write("DATABASE_URL=".getenv("DATABASE_URL"));
    }
}