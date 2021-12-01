<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Blog extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia, Sluggable, SluggableScopeHelpers;
    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    protected  $fillable=[
        'title',
        'summary',
        'body',
        'user_id',
        'status',
        'published'
    ];

    public function tags(){
        return $this->hasMany(Tag::class);
    }
    public function registerMediaCollections(): void
    {
        $this
            ->addMediaCollection('post')
            ->registerMediaConversions(function (Media $media) {
                $this
                    ->addMediaConversion('post-card')
                    ->width(300);
            });
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
