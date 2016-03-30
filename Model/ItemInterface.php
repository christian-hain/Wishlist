<?php

/*
 * (c) Soeren Martius
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SoerenMartius\Component\Wishlist\Model;

/**
 * @author Soeren Martius <soeren.martius@gmail.com>
 */
interface ItemInterface
{
    /**
     * @return mixed
     */
    public function getId();

    /**
     * @return WishlistInterface
     */
    public function getWishlist(): WishlistInterface;

    /**
     * @return ItemInterface
     */
    public function setWishlist(WishlistInterface $wishlist): ItemInterface;
}
