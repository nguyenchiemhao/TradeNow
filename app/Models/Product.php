<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
  use SoftDeletes;

  public const WAIT_FOR_CENSORSHIP = 0;
  public const IS_CENSORED = 1;
  public const NOT_CENSORED = 2;

  protected $fillable = [
    'category_id',
    'brand_id',
    'user_id',
    'product_status_id',
    'name',
    'is_checked',
    'violation',
    'description',
    'price',
    'amount',
    'title_seo',
    'description_seo',
    'active',
    'image',
    'thumbnail'
  ];

  // one - many relationship between category -> product (reverse) 
  public function category()
  {
    return $this->belongsTo('App\Models\Category');
  }
  public function brand()
  {
    return $this->belongsTo('App\Models\Brand');
  }
  public function user()
  {
    return $this->belongsTo('App\Models\User');
  }
  public function product_status()
  {
    return $this->belongsTo('App\Models\ProductStatus');
  }

  public function product_images()
  {
    return $this->hasMany('App\Models\ProductImage');
  }

  public function product_details()
  {
    return $this->hasMany('App\Models\ProductDetail');
  }

  public function diffFromNow()
  {
    Carbon::setLocale('vi');
    $now = Carbon::now('Asia/Ho_Chi_Minh');

    if ($this->created_at != null) {
      $date = $this->created_at ?  Carbon::createFromFormat('Y-m-d H:i:s', $this->created_at, 'Asia/Ho_Chi_Minh') : $now;
      return $date->diffForHumans($now);
    } else {
      return "Không xác định";
    }
  }
  //

  public static function getNumberOfRow($checked = 0)
  {
    $conditions = [];
    if ($checked === 1) array_push($conditions, ['is_checked', self::IS_CENSORED]);
    return self::where($conditions)->get()->count();
  }

  public static function getProductByCensorship($censorship = null)
  {
    $conditions = [];
    if ($censorship === 1 || $censorship === 0 || $censorship === 2)
      array_push($conditions, ['is_checked', $censorship]);
    return self::where($conditions)->latest()->paginate(5);
  }
}
