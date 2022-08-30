<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Property
 *
 * @property $id
 * @property $p_title
 * @property $p_type
 * @property $p_size
 * @property $bed_rooms
 * @property $bath_rooms
 * @property $imageName
 * @property $address
 * @property $city
 * @property $state
 * @property $postal_code
 * @property $air_cond
 * @property $parking
 * @property $swimming
 * @property $seat
 * @property $alarm
 * @property $heat
 * @property $laundry
 * @property $win_cover
 * @property $name
 * @property $email
 * @property $phone
 * @property $message
 * @property $building_age
 * @property $sell_type
 * @property $status
 * @property $user_id
 * @property $category_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Category $category
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Property extends Model
{
    
    static $rules = [
		'p_title' => 'required',
		'p_type' => 'required',
		'p_size' => 'required',
		'bed_rooms' => 'required',
		'bath_rooms' => 'required',
		'imageName' => 'required',
		'address' => 'required',
		'city' => 'required',
		'state' => 'required',
		'postal_code' => 'required',
		'air_cond' => 'required',
		'parking' => 'required',
		'swimming' => 'required',
		'seat' => 'required',
		'alarm' => 'required',
		'heat' => 'required',
		'laundry' => 'required',
		'win_cover' => 'required',
		'name' => 'required',
		'email' => 'required',
		'phone' => 'required',
		'message' => 'required',
		'building_age' => 'required',
		'sell_type' => 'required',
		'status' => 'required',
		'user_id' => 'required',
		'category_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['p_title','p_type','p_size','bed_rooms','bath_rooms','imageName','address','city','state','postal_code','air_cond','parking','swimming','seat','alarm','heat','laundry','win_cover','name','email','phone','message','building_age','sell_type','status','user_id','category_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function category()
    {
        return $this->hasOne('App\Models\Category', 'id', 'category_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
    

}
