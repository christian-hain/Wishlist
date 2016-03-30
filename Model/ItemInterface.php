<?php
/**
 * User: soerenmartius
 * Date: 30/03/16
 * Time: 11:24
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
     * @return mixed
     */
    public function getProductId();
}
