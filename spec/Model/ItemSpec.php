<?php

/*
 * (c) Soeren Martius
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace spec\SoerenMartius\Component\Wishlist\Model;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use SoerenMartius\Component\Wishlist\Model\{ Item, WishlistInterface, ItemInterface };

/**
 * @author Soeren Martius <soeren.martius@gmail.com>
 */
class ItemSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Item::class);
    }

    function it_should_be_sm_item()
    {
        $this->shouldImplement(ItemInterface::class);
    }

    function it_should_can_have_wishlist(WishlistInterface $wishlist)
    {
        $this->setWishlist($wishlist);

        $this->getWishlist()->shouldBe($wishlist);
    }
}
