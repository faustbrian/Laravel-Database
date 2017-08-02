<?php


declare(strict_types=1);

/*
 * This file is part of Laravel Database.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Database\Schema;

use BrianFaust\Database\Traits\Schema\TypesTrait;
use BrianFaust\Database\Traits\Schema\RelationsTrait;
use Illuminate\Database\Schema\Blueprint as BaseBlueprint;

class Blueprint extends BaseBlueprint
{
    use RelationsTrait;
    use TypesTrait;
}
