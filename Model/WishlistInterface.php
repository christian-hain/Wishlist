<?php
/**
 * User: soerenmartius
 * Date: 30/03/16
 * Time: 11:24
 */

namespace SoerenMartius\Component\Wishlist\Model;

use Doctrine\Common\Collections\Collection;

/**
 * Interface WishlistInterface
 *
 * @author Soeren Martius <soeren.martius@gmail.com>
 */
interface WishlistInterface
{
    /**
     * @return mixed
     */
    public function getId();

    /**
     * @return mixed
     */
    public function getCustomerId();

    /**
     * @return Collection|ItemInterface[]
     */
    public function getItems(): Collection;

    /**
     * @return string
     */
    public function getSharingCode(): string;
}
