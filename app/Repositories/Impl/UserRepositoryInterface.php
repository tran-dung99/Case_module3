<?php

namespace App\Repositories\Impl;

interface UserRepositoryInterface extends BaseRepositoryInterface
{
 public function store($request);
 public function update($request);
}
