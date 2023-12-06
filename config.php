<?php

require_once('IyzipayBootstrap.php');

IyzipayBootstrap::init();

class Config
{
    public static function options()
    {
        $options = new \Iyzipay\Options();
        $options->setApiKey('sandbox-96d784bc67ae8feea0f24d92de593f8989977e2b08dc2dc22ca33f3dfad04587');
        $options->setSecretKey('sandbox-6e1e8a46b25772639ec868b48f0834b948b471ff1f49ed695abf38dfed2315d6');
        $options->setBaseUrl('https://sandbox-api.iyzipay.com');

        return $options;
    }
}
