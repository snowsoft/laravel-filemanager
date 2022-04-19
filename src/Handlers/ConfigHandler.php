<?php

namespace UniSharp\LaravelFilemanager\Handlers;

class ConfigHandler
{
    public function userField()
    {
        return \Plugins\EnvJson::setdata()->get('APP_USERNAME', 'demo');
    }
}
