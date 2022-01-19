<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Slide extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable=[
       'title',
        'tagline',
        'status',
        'product_id',
        'blog_id',
        'action'

    ];

    public function registerMediaCollections(): void
    {
        $this
            ->addMediaCollection('slide')
            ->registerMediaConversions(function (Media $media) {
                $this
                    ->addMediaConversion('slide-card')
                    ->width(80)
                    ->height(80);
            });
    }

}
