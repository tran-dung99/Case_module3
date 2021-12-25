<?php

namespace App\Repositories\Impl;

interface PostRepositoryInterface extends BaseRepositoryInterface
{
    public function create($request);
    public function update($request);

}
