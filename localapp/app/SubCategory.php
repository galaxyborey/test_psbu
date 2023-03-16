<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
  protected $fillable = [
      'user_id', 'category_id', 'name_kh', 'name', 'slug', 'body'
  ];

  public function category()
  {
      return $this->belongsTo(Category::class);
  }

  public function user()
  {
      return $this->belongsTo(User::class);
  }

}
