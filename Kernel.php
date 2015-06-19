<?php

use Id4v\CoreBundle\Kernel\BaseKernel;

class Kernel extends BaseKernel{
    protected function registerBundles()
    {
        $this->bundles=array(
            new \Id4v\CoreBundle\Id4vCoreBundle(),
        );
    }


}