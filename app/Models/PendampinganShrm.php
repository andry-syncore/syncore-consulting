<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class PendampinganShrm extends Model
{
   use HasFactory;

   protected $guarded = ['id'];

   public function getRouteKeyName()
   {
      return 'slug';
   }

   public function setBackgroundAttribute($val)
   {
      $this->attributes['background'] = Str::replace(['<div>', '</div>', '&nbsp;'], '', $val);
   }

   public function setScopeAttribute($val)
   {
      $this->attributes['scope'] = Str::replace(['<div>', '</div>', '<ol>', '<li>', '&nbsp;'], ['<p class="text-dark-5 small mt-3 mb-0">', '</p>', '<ol class="mt-2">', '<li class="small text-dark-5 mt-2">', ''], $val);
   }

   public function setObjectiveAttribute($val)
   {
      $this->attributes['objective'] = Str::replace(['<div>', '</div>', '<ol>', '<li>', '&nbsp;'], ['<p class="text-dark-5 small mt-3 mb-0">', '</p>', '<ol class="mt-2">', '<li class="small text-dark-5 mt-2">', ''], $val);
   }

   public function setResultAttribute($val)
   {
      $this->attributes['result'] = Str::replace(['<div>', '</div>', '<ol>', '<li>', '&nbsp;'], ['<p class="text-dark-5 small mt-3 mb-0">', '</p>', '<ol class="mt-2">', '<li class="small text-dark-5 mt-2">', ''], $val);
   }
}
