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
use Doctrine\Common\Collections\Collection;
use SoerenMartius\Component\Wishlist\Model\{ ItemInterface, Wishlist, WishlistInterface };

/**
 * @author Soeren Martius <soeren.martius@gmail.com>
 */
class WishlistSpec extends ObjectBehavior
{
    const SHARING_CODE = 'xxx';

    function it_is_initializable()
    {
        $this->shouldHaveType(Wishlist::class);
    }

    function it_should_be_sm_wishlist()
    {
        $this->shouldImplement(WishlistInterface::class);
    }

    function it_should_not_have_id_by_default()
    {
        $this->getId()->shouldReturn(null);
    }

    function it_should_have_sharing_code_by_default()
    {
        $this->getSharingCode()->shouldNotReturn(null);
    }

    function its_sharing_code_should_be_mutable()
    {
        $this->setSharingCode(self::SHARING_CODE);

        $this->getSharingCode()->shouldReturn(self::SHARING_CODE);
    }

    function it_should_add_items_collection_by_default()
    {
        $this->getItems()->shouldHaveType(Collection::class);
    }

    function it_should_not_have_items_by_default()
    {
        $this->getCountedItems()->shouldReturn(0);
    }


    function it_should_add_items_properly(ItemInterface $item)
    {
        $this->hasItem($item)->shouldReturn(false);

        $item->setWishlist($this)->shouldBeCalled();
        $this->addItem($item);

        $this->hasItem($item)->shouldReturn(true);

        $this->getCountedItems()->shouldReturn(1);
    }

    function it_should_remove_items_properly(ItemInterface $item)
    {
        $this->hasItem($item)->shouldReturn(false);

        $item->setWishlist($this)->shouldBeCalled();
        $this->addItem($item);
        $this->hasItem($item)->shouldReturn(true);

        $this->removeItem($item);

        $this->hasItem($item)->shouldReturn(false);
        $this->getCountedItems()->shouldReturn(0);
    }
}
