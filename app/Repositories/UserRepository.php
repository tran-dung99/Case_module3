<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\Impl\UserRepositoryInterface;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{
     public function __construct(User $user)
     {
         $this->model = $user;
     }

    public function store($request)
    {
       $data = $request->only("name","email","password");
       $user = User::create($data);
       $user->save();
    }

    public function update($request)
    {
        $user = User::findOrFail($request->id);
        $user->update([
            "name"=>$request->name,
            "email" => $request->email,
            "password" =>$request->password,
        ]);
        $user->save();
    }
}
