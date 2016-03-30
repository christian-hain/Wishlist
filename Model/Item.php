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
class Item implements
    ItemInterface,
    Timestampable
{
    use TimestampableTrait;

    /**
     * @var mixed
     */
    private $id;

    /**
     * @var Wishlist
     */
    private $wishlist;

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     *
     * @return ItemInterface
     */
    public function setId($id): ItemInterface
    {
        $this->id = $id;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getWishlist(): WishlistInterface
    {
        return $this->wishlist;
    }

    /**
     * {@inheritdoc}
     */
    public function setWishlist(WishlistInterface $wishlist): ItemInterface
    {
        $this->wishlist = $wishlist;

        return $this;
    }
}
