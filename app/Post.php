<?php

namespace App;

use Illuminate\Database\Eloquent\{Model,SoftDeletes};
class Post extends Model
{
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'description',
        'user_id',
        'category_id',
    ];
    

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(\App\User::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(\App\Category::class);
    }


    public static function boot()
    {
        static::creating(function ($model) {
            $model->user_id=auth()->user()->id;
            //request()->ip
        });

        parent::boot();
    }
}