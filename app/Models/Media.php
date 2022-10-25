<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Media extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'path',
        'type',
        'model_type',
        'model_id',
    ];

    public function model(): MorphTo
    {
        return $this->morphTo();
    }

    public static function createAndUpload($file, $mediaType, $model)
    {
        $name = $file->getClientOriginalName();
        $extension = $file->extension();
        $filename = strtolower(class_basename($model)) . '-' . Str::random(10) . '-' . time() . '.' . $extension;

        $path = Storage::putFileAs('/media', $file, $filename, 'public');

        return Media::create([
            'name' => $name,
            'path' => $path,
            'type' => $mediaType,
            'model_id' => $model->id,
            'model_type' => get_class($model)
        ]);
    }

    public static function createEmbed($url, $model){
        return Media::create([
            'name' => 'yt_embed_' . Str::random(10) . '-' . time(),
            'path' => $url,
            'type' => 'yt_embed',
            'model_id' => $model->id,
            'model_type' => get_class($model)
        ]);
    }
}
