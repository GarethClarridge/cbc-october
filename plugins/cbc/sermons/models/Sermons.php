<?php namespace CBC\Sermons\Models;

use Model;

/**
 * Sermons Model
 */
class Sermons extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'cbc_sermons_sermons';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

}