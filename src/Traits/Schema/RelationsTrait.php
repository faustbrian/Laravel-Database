<?php

declare(strict_types=1);

/*
 * This file is part of Laravel Database.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Artisanry\Database\Traits\Schema;

trait RelationsTrait
{
    public function hasAndBelongsToMany($name, $indexName = null)
    {
        return $this->morphs($name, $indexName = null);
    }
}
