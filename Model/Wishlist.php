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
     * @var mixed
     */
    private $customerId;

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
     * @return mixed
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     * @param mixed $customerId
     *
     * @return WishlistInterface
     */
    public function setCustomerId($customerId): WishlistInterface
    {
        $this->customerId = $customerId;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     *
     * @return WishlistInterface
     */
    public function setId($id): WishlistInterface
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return Collection|ItemInterface[]
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
     * @return string
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
}
