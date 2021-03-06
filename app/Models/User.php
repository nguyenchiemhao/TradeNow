<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
  use Notifiable;
  use SoftDeletes;
  public const ADMIN = 1;
  public const USER = 0;
  public const ACTIVE = 1;
  public const INACTIVE = 0;
  public const MALE = 1;
  public const FEMALE = 0;
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'name', 'email', 'email_verify_at', 'password', 'date_of_birth', 'address', 'city', 'phone_number', 'gender', 'avatar', 'description', 'is_admin', 'active', 'verify_code',
  ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [
    'password', 'remember_token',
  ];

  /**
   * The attributes that should be cast to native types.
   *
   * @var array
   */
  protected $casts = [
    'email_verified_at' => 'datetime',
  ];

  public function products()
  {
    return $this->hasMany('App\Models\Product');
  }
  public function orders()
  {
    return $this->hasMany('App\Models\Order');
  }

  public function getWishList(){
    $wish_lists = WishList::where('user_id','=',Auth::user()->id)->get();
    return count($wish_lists);
  }

  public static function getNumberOfRow($role = null)
  {
    $conditions = [
      ['active', self::ACTIVE]
    ];
    if ($role === self::USER || $role === self::ADMIN) array_push($conditions, ['is_admin', $role]);

    return self::where($conditions)->get()->count();
  }

  public static function getNumberOfUserFollowDate($month = 0, $year = 0)
  {
    if ($month === 0) $month = Carbon::now()->month;
    if ($year === 0) $year = Carbon::now()->year;

    return self::where([
      ['active', self::ACTIVE],
    ])->whereYear('created_at', $year)->whereMonth('created_at', $month)->get()->count();
  }
  
  public function isAdmin() {
    return $this->is_admin === self::ADMIN;
  }

  public function getGender() {
    if($this->gender == self::MALE){
      return 'male';
    }elseif($this->gender == self::FEMALE){
      return 'female';
    }else{
      return 'orther';
    }
  }

  public function avatar() {
    if($this->avatar === null){
      return 'default_image.png';
    }else{
      return $this->avatar;
    }
  }

  public static function getUserByType($type = null){
    $users = self::all();
    $results = [];
    if($type === null) {
      foreach ($users as $user) {
        if(count($user->products) > 0) array_push($results,$user);
      }
    }else{
      foreach ($users as $user) {
        if(!count($user->products) > 0) array_push($results,$user);
      }
    }
    return $results;
  }
}
