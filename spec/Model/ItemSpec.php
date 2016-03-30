<?php

namespace spec\SoerenMartius\Component\Wishlist\Model;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use SoerenMartius\Component\Wishlist\Model\Item;
use SoerenMartius\Component\Wishlist\Model\ItemInterface;
use SoerenMartius\Component\Wishlist\Model\WishlistInterface;

class ItemSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Item::class);
    }

    function it_should_be_soerenmartius_item()
    {
        $this->shouldImplement(ItemInterface::class);
    }

    function it_should_can_have_wishlist(WishlistInterface $wishlist)
    {
        $this->setWishlist($wishlist);

        $this->getWishlist()->shouldBe($wishlist);
    }
}
