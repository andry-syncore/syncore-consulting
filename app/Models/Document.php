<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Document extends Model
{
   use HasFactory;

   protected $guarded = ['id'];

   public function scopeFilter($query, $request)
   {
      return $query->where('name', 'LIKE', "%$request%");
   }

   public function getRouteKeyName()
   {
      return 'slug';
   }

   public function setNameAttribute($val)
   {
      $this->attributes['name'] = Str::title($val);
   }

   public function category()
   {
      return $this->belongsTo(CategoryDocument::class, 'category_document_id', 'id', 'id');
   }
}
