<?php

namespace App;

use Illuminate\Database\Eloquent\{Model,SoftDeletes};
use Storage;
use Illuminate\Http\UploadedFile;
class Category extends Model
{
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'cover'
    ];

    
    protected $appends = ['image_url']; //$item->image_url

    public function getImageUrlAttribute()
    {
        return url('storage/categories/'.$this->cover??'none.jpg');
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function posts()
    {
        return $this->hasMany(\App\Post::class);
    }

    public function setCoverAttribute($value){
        if($value instanceof UploadedFile){
            $namefile = uniqid() . '.'.$value->extension();

            $value->storeAs('categories', $namefile,'public');
            
            $this->attributes['cover'] = $namefile;
        }
    }

    public function scopeName($query,$value){
        return $query->when(strlen($value)>=3,function($query) use($value){
            return $query->where('name','like','%'.$value.'%');
        });
        
    }
}