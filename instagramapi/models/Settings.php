<?php namespace Lucianoclemente\Instagramapi\Models;

use October\Rain\Database\Model;

class Settings extends Model
{
    use \October\Rain\Database\Traits\Validation;

    public $implement = ['System.Behaviors.SettingsModel'];

    public $settingsCode = 'instagram_settings';

    public $settingsFields = 'fields.yaml';

    /**
     * Validation rules
     */
    public $rules = [
        'client_id'             => 'required',
    ];
}