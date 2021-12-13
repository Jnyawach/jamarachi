<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

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

    public  function colors(){
        return $this->hasMany(Color::class);
    }
    public  function brand(){
        return $this->belongsTo(Brand::class);
    }
    public  function category(){
        return $this->belongsTo(Category::class);
    }
    public  function subcategory(){
        return $this->belongsTo(SubCategory::class);
    }

    public function registerMediaCollections(): void
    {
        $this
            ->addMediaCollection('mainImage')
            ->registerMediaConversions(function (Media $media) {
                $this
                    ->addMediaConversion('mainImage-card')
                    ->width(300)
                    ->height(300);
            });
        $this
            ->addMediaCollection('imageTwo')
            ->registerMediaConversions(function (Media $media) {
                $this
                    ->addMediaConversion('imageTwo-card')
                    ->width(300)
                    ->height(300);
            });
        $this
            ->addMediaCollection('imageThree')
            ->registerMediaConversions(function (Media $media) {
                $this
                    ->addMediaConversion('imageThree-card')
                    ->width(300)
                    ->height(300);
            });
        $this
            ->addMediaCollection('imageFour')
            ->registerMediaConversions(function (Media $media) {
                $this
                    ->addMediaConversion('imageFour-card')
                    ->width(300)
                    ->height(300);
            });
    }
}
