<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Portfolio extends Model
{
   use HasFactory;
   protected $guarded = ['id'];

   public function getRouteKeyName()
   {
      return 'slug';
   }

   public function scopeFilter($query, $category, $search)
   {
      return $query->when($category ?? false, function ($q) use ($category) {
         $q->whereHas('category', function ($q) use ($category) {
            $q->where('slug', 'like', "%$category%");
         });
      })->when($search ?? false, function ($q) use ($search) {
         $q->where('title', 'like', "%$search%");
      });
   }

   public function category()
   {
      return $this->belongsTo(CategoryPortfolio::class, 'category_portfolio_id', 'id', 'id');
   }

   public function setBackgroundAttribute($val)
   {
      $this->attributes['background'] = Str::replace(['<div>', '</div>', '&nbsp;'], '', $val);
   }

   public function setMetodologiAttribute($val)
   {
      $this->attributes['metodologi'] = $this->attributes['solution'] = Str::replace(['<div>', '</div>', '<ol>', '<li>', '&nbsp;'], ['<p class="text-dark-5 small mt-3 mb-0">', '</p>', '<ol class="mt-2">', '<li class="small text-dark-5 mt-2">', ''], $val);
   }

   public function setProblemAttribute($val)
   {
      $this->attributes['problem'] = Str::replace(['<div>', '</div>', '<ol>', '<li>', '&nbsp;'], ['<p class="text-dark-5 small mt-3 mb-0">', '</p>', '<ol class="mt-2">', '<li class="small text-dark-5 mt-2">', ''], $val);
   }

   public function setSolutiontAttribute($val)
   {
      $this->attributes['solution'] = Str::replace(['<div>', '</div>', '<ol>', '<li>', '&nbsp;'], ['<p class="text-dark-5 small mt-3 mb-0">', '</p>', '<ol class="mt-2">', '<li class="small text-dark-5 mt-2">', ''], $val);
   }

   public function setResultAttribute($val)
   {
      $this->attributes['result'] = Str::replace(['<div>', '</div>', '<ol>', '<li>', '&nbsp;'], ['<p class="text-dark-5 small mt-3 mb-0">', '</p>', '<ol class="mt-2">', '<li class="small text-dark-5 mt-2">', ''], $val);
   }
}
