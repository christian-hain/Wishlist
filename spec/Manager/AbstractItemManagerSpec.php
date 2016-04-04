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
use SoerenMartius\Component\Wishlist\Manager\ItemManagerInterface;

/**
 * @author Soeren Martius <soeren.martius@gmail.com>
 */
class AbstractItemManagerSpec extends ObjectBehavior
{
    public function it_should_be_sm_item_manager()
    {
        $this->beAnInstanceOf(ItemManagerInterface::class);
    }
}
