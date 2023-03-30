<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class PendampinganSaab extends Model
{
   use HasFactory;

   protected $guarded = ['id'];

   public function getRouteKeyName()
   {
      return 'slug';
   }

   public function setObjectiveAttribute($val)
   {
      $this->attributes['objective'] = Str::replace(['<ol>', '<li>'], ['<ol class="mt-2">', '<li class="small text-dark-5 mt-2">'], $val);
   }

   public function setBenefitAttribute($val)
   {
      $this->attributes['benefit'] = Str::replace(['<ol>', '<li>'], ['<ol class="mt-2">', '<li class="small text-dark-5 mt-2">'], $val);
   }
   
   public function setOutputAttribute($val)
   {
      $this->attributes['output'] = Str::replace(['<ol>', '<li>'], ['<ol class="mt-2">', '<li class="small text-dark-5 mt-2">'], $val);
   }

   public function setWorkProgramAttribute($val)
   {
      $this->attributes['work_program'] = Str::replace(['<div>', '</div>', '<ol>', '<li>', '&nbsp;'], ['<p class="text-dark-5 small mt-3 mb-0">', '</p>', '<ol class="mt-2">', '<li class="small text-dark-5 mt-2">', ''], $val);
   }
}
