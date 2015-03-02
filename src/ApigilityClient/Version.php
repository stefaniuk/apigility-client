<?php
namespace ApigilityClient;

class Version
{

    /**
     * @var String
     */
    const VERSION = '0.2.0-rc1';

    /**
     * Get current version
     *
     * @return string
     */
    public static function getVersion()
    {
        return self::VERSION;
    }
}
