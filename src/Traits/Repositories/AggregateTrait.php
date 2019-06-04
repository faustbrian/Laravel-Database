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

namespace Artisanry\Database\Traits\Repositories;

trait AggregateTrait
{
    public function count()
    {
        return $this->getModel()->count();
    }

    public function max($column)
    {
        return $this->getModel()->max($column);
    }

    public function min($column)
    {
        return $this->getModel()->min($column);
    }

    public function avg($column)
    {
        return $this->getModel()->avg($column);
    }

    public function sum($column)
    {
        return $this->getModel()->sum($column);
    }
}
