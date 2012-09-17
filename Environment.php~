<?php
namespace Ideas;
/**
 * For automatic detect working environment
 */
class Environment
{
    /**
     * IP address map
     * @var array
     */
    protected $map = array (
        'localhost' => array (
            '127.0.0.1', '::1'
        ),
    );

    /**
     * Environment name
     * @var string
     */
    protected $env;

    /**
     * Value of server global variable
     * @var
     */
    private $remoteAddress;

    /**
     * Constructor
     * @param array $map
     */
    public function __construct(array $map = null)
    {
        $this->remoteAddress = isset ($_SERVER['REMOTE_ADDR'])?$_SERVER['REMOTE_ADDR']:null;

    }

    /**
     * Detect th environment
     * @return int|string
     */
    public function detect()
    {
        foreach ($this->map as $name => $ips) {
            if (in_array($this->remoteAddress, $ips))
                return $name; break;
        }
        return 'localhost';
    }

    /**
     * If this is localhost
     * @return bool
     */
    public function localhost()
    {
        return in_array($_SERVER['REMOTE_ADDR'], array ('127.0.0.1', '::1'));
    }


    public function __toString()
    {
        return $this->env;
    }

    /**
     * Ip addresses map array
     * @param array $map
     */
    public function setMap(array $map)
    {
        $this->map = $map;
    }
}
