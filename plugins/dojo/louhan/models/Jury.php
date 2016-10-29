<?php namespace Dojo\Louhan\Models;

use Model;

/**
 * Model
 */
class Jury extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /*
     * Validation
     */
    public $rules = [
    ];

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = TRUE;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'dojo_louhan_juries';
    

}