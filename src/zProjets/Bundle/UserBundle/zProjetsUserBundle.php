<?php

namespace zProjets\Bundle\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class zProjetsUserBundle extends Bundle
{
    
    public function getParent() {
        return 'FOSUserBundle';
    }
}
