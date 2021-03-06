<?php
/**
 * Created by PhpStorm.
 * User: janhuang
 * Date: 15/3/14
 * Time: 下午3:24
 * Github: https://www.github.com/janhuang 
 * Coding: https://www.coding.net/janhuang
 * SegmentFault: http://segmentfault.com/u/janhuang
 * Blog: http://segmentfault.com/blog/janhuang
 * Gmail: bboyjanhuang@gmail.com
 */

namespace Welcome;

use FastD\Framework\Bundle\Bundle;
use Welcome\Extensions\DemoExtension;

class WelcomeBundle extends Bundle
{
    public function registerExtensions()
    {
        return [
            new DemoExtension()
        ];
    }

}