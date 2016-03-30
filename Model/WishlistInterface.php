<?php

/*
 * (c) Soeren Martius
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SoerenMartius\Component\Wishlist\Model;

use Doctrine\Common\Collections\Collection;

/**
 * @author Soeren Martius <soeren.martius@gmail.com>
 */
interface WishlistInterface
{
    /**
     * @return mixed
     */
    public function getId();

    /**
     * @return Collection|ItemInterface[]
     */
    public function getItems(): Collection;

    /**
     * @return string
     */
    public function getSharingCode(): string;

    /**
     * @return int
     */
    public function getCountedItems(): int;
}
