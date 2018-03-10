<?php
/**
 * 错误代码类
 *
 * @author  songmw<imphp@qq.com>
 * @since   2018.03.10
 */
namespace Timerlau\Errcode;

class Errcode
{
    public $config = [];
    public $defaultCode = '10025';   // 默认错误码

    public function __construct()
    {
        $this->config = config('errcode');
    }

    public function get($name)
    {
        return isset($this->config[$name]) ? 
                    $this->config[$name]: 
                    $this->config[$this->defaultCode];
    }

    public function __call($name, $args)
    {
        $name = strtolower($name);
        if (isset($args[0]) && $args[0] === true) {
            return $this->get($name)[0];
        }
        return $this->get($name);
    }
}