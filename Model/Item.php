<?php
/**
 * User: soerenmartius
 * Date: 30/03/16
 * Time: 11:20
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
     * @var mixed
     */
    private $productId;

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
     * @return ItemInterface
     */
    public function setId($id): ItemInterface
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * @param mixed $productId
     *
     * @return ItemInterface
     */
    public function setProductId($productId): ItemInterface
    {
        $this->productId = $productId;

        return $this;
    }

    /**
     * @return WishlistInterface
     */
    public function getWishlist(): WishlistInterface
    {
        return $this->wishlist;
    }

    /**
     * @param Wishlist $wishlist
     *
     * @return ItemInterface
     */
    public function setWishlist($wishlist): ItemInterface
    {
        $this->wishlist = $wishlist;

        return $this;
    }
}
