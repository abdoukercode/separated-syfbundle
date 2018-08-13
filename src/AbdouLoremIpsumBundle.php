<?php
/**
 * Created by PhpStorm.
 * User: abdou
 * Date: 13/08/18
 * Time: 06:47
 */

namespace Abdou\LoremIpsumBundle;


use Abdou\LoremIpsumBundle\DependencyInjection\AbdouLoremIpsumExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class AbdouLoremIpsumBundle extends Bundle
{
    public function getContainerExtension()
    {
        if(null=== $this->extension){
            $this->extension = new AbdouLoremIpsumExtension();
        }
        return $this->extension;
    }

}