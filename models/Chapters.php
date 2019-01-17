<?php namespace Marpo\Comic\Models;

use Model;
use Marpo\Comic\Models\Pages;

/**
 * Model
 */
class Chapters extends Model
{
    use \October\Rain\Database\Traits\Validation;

    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'marpo_comic_chapters';
    public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /**
     * @var array Attributes that support translation, if available.
     */
    public $translatable = [
        'name',
        'desc',
        'banner',
    ];

    /*
     * Relations
     */
    public $hasMany = [
        'pages' => 'Marpo\Comic\Models\Pages'
    ];
}
