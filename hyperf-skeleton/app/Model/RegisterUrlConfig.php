<?php

declare (strict_types=1);
namespace App\Model;

/**
 * @property int $id
 * @property int $status
 * @property string $url
 * @property string $create_time
 * @property string $update_time
 */
class RegisterUrlConfig extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'register_url_config';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = ['id' => 'integer'];
}