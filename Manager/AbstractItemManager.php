<?php

/*
 * (c) Soeren Martius
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SoerenMartius\Component\Wishlist\Manager;

use SoerenMartius\Component\Wishlist\Model\ItemInterface;

/**
 * @author Soeren Martius <soeren.martius@gmail.com>
 */
abstract class AbstractItemManager implements
    ItemManagerInterface,
    ManagerInterface
{
    /**
     * {@inheritdoc}
     */
    public function findItemById($id)
    {
        return $this->findItemBy(['id' => $id]);
    }

    /**
     * {@inheritdoc}
     */
    public function findItemByWishlist($wishlistId)
    {
        return $this->findItemBy(['wishlist' => $wishlistId]);
    }

    /**
     * {@inheritdoc}
     */
    public function createItem(): ItemInterface
    {
        $class = $this->getClass();
        $item  = new $class();

        return $item;
    }
}
