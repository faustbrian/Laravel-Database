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

namespace Artisanry\Database\Contracts\Presenters\Traits;

interface RoutesTrait
{
    public function createRoute();

    public function showRoute();

    public function editRoute();

    public function deleteRoute();

    public function listRoute();

    public function routeModelIdentifier();

    public function routeNamePrefix();

    public function routeNames();
}
