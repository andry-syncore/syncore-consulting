<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class CategoryPortfolio extends Model
{
   use HasFactory;

   protected $guarded = ['id'];

   public function setNameAttribute($val)
   {
      $this->attributes['name'] = Str::title($val);
   }

   public function portfolios()
   {
      return $this->hasMany(Portfolio::class);
   }
}
