<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class news extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'thumbnail', 'content'];

    protected static function boot()
    {
        parent::boot();
        static::updating(function($model){
            if ($model->isDirty('thumbnail') &&($model->getOriginal('thumbnail') !== null)){
            Storage::disk('public')->delete($model->getOriginal('thumbnail'));
        }
        });
    }
}
