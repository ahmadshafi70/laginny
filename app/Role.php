<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Role extends Model
{
    protected $fillable=['title'];

    public function role(){
    	return $this->BelongsTo(User::class,'role_id');
    }
}
