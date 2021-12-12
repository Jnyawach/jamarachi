<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Product extends Model implements HasMedia
{
    use HasFactory,InteractsWithMedia, Sluggable, SluggableScopeHelpers;
    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    protected $fillable=[
        'name',
        'sku',
        'status',
        'brand_id',
        'stock',
        'condition',
        'cpu',
        'processor_brand',
        'rear_camera',
        'front_camera',
        'cellular',
        'operating_system',
        'sim_card',
        'battery',
        'screen_size',
        'language',
        'display_type',
        'category_id',
        'details',
        'subcategory_id',
        'price',
        'sale_price',
        'description',
        'box',
        'country',
        'weight',
        'keywords',
        'meta_description',
        'complete'

    ];

    public  function keyword(){
        return $this->hasOne(Keyword::class);
    }

    public  function color(){
        return $this->hasMany(Color::class);
    }
}
