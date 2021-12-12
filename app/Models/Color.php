<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Color extends Model implements HasMedia
{
    use HasFactory,InteractsWithMedia;

    protected $fillable=['name','product_id'];

    public function registerMediaCollections(): void
    {
        $this
            ->addMediaCollection('colorFile')
            ->registerMediaConversions(function (Media $media) {
                $this
                    ->addMediaConversion('colorFile-card')
                    ->width(300);
            });
    }
}
