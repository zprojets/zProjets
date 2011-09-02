<?php

/*
 * This file is part of the FOSUserBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace zProjets\Bundle\UserBundle\Validator;

use Symfony\Component\Validator\Constraint;
use FOS\UserBundle\Validator\Password as BasePassword;

/**
 * @Annotation
 */
class Password extends BasePassword
{
    public $message = "error.bad_password";


}
