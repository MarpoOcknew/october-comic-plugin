<?php namespace Marpo\Comic\Models;

use Model;
use Marpo\Comic\Models\Chapters;

/**
 * Model
 */
class Pages extends Model
{
    use \October\Rain\Database\Traits\Validation;

    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'marpo_comic_pages';
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
        'transcript',
        'sketch',
        'textless',
        'page'
    ];

    /*
     * Relations
     */
    public $belongsTo = [
        'chapter' => ['Marpo\Comic\Models\Chapters']
    ];
}
