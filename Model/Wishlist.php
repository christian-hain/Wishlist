<?php

/*
 * (c) Soeren Martius
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SoerenMartius\Component\Wishlist\Model;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

/**
 * @author Soeren Martius <soeren.martius@gmail.com>
 */
class Wishlist implements
    WishlistInterface,
    Timestampable
{
    use TimestampableTrait;

    /**
     * @var mixed
     */
    private $id;

    /**
     * @var string
     */
    private $sharingCode;

    /**
     * @var $items Collection|Item[]
     */
    private $items;

    /**
     * Wishlist constructor.
     */
    public function __construct()
    {
        $this->items       = new ArrayCollection();
        $this->sharingCode = substr(base_convert(sha1(uniqid(mt_rand(), true)), 16, 36), 0, 19);
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function getItems(): Collection
    {
        return $this->items;
    }

    /**
     * @param Collection|ItemInterface[] $items
     *
     * @return WishlistInterface
     */
    public function setItems($items): WishlistInterface
    {
        $this->items = $items;

        return $this;
    }

    /**
     * @param ItemInterface $item
     *
     * @return WishlistInterface
     */
    public function addItem(ItemInterface $item): WishlistInterface
    {
        $item->setWishlist($this);
        $this->items->add($item);

        return $this;
    }

    /**
     * @param ItemInterface $item
     *
     * @return WishlistInterface
     */
    public function removeItem(ItemInterface $item): WishlistInterface
    {
        $this->items->removeElement($item);

        return $this;
    }

    /**
     * @param ItemInterface $item
     *
     * @return bool
     */
    public function hasItem(ItemInterface $item): bool
    {
        return $this->items->contains($item);
    }

    /**
     * {@inheritdoc}
     */
    public function getSharingCode(): string
    {
        return $this->sharingCode;
    }

    /**
     * @param string $sharingCode
     *
     * @return WishlistInterface
     */
    public function setSharingCode($sharingCode): WishlistInterface
    {
        $this->sharingCode = $sharingCode;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getCountedItems(): int
    {
        return $this->items->count();
    }
}
