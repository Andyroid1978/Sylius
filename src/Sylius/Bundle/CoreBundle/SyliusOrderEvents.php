<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Bundle\CoreBundle;

class SyliusOrderEvents
{
    const PRE_PAY     = 'sylius.order.pre_pay';
    const POST_PAY    = 'sylius.order.post_pay';

    const PRE_SHIP    = 'sylius.order.pre_ship';
    const POST_SHIP   = 'sylius.order.post_ship';

    const PRE_CANCEL  = 'sylius.order.pre_cancel';
    const POST_CANCEL = 'sylius.order.post_cancel';

    const PRE_RETURN  = 'sylius.order.pre_return';
    const POST_RETURN = 'sylius.order.post_return';
}