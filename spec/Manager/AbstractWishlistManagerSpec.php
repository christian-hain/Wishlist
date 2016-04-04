<?php

/*
 * (c) Soeren Martius
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace spec\SoerenMartius\Component\Wishlist\Manager;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use SoerenMartius\Component\Wishlist\Manager\WishlistManagerInterface;

/**
 * @author Soeren Martius <soeren.martius@gmail.com>
 */
class AbstractWishlistManagerSpec extends ObjectBehavior
{
    public function it_should_be_sm_wishlist_manager()
    {
        $this->beAnInstanceOf(WishlistManagerInterface::class);
    }
}
