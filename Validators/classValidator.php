<?php namespace Tranthihoaitrang\Myclass\Validators;

use Foostart\Category\Library\Validators\FooValidator;
use Event;
use \LaravelAcl\Library\Validators\AbstractValidator;
use Tranthihoaitrang\Myclass\Models\Classes;

use Illuminate\Support\MessageBag as MessageBag;

class classValidator extends FooValidator
{

    protected $obj_class;

    public function __construct()
    {
        // add rules
        self::$rules = [
            'class_name' => ["required"],
            'class_overview' => ["required"],
            'class_description' => ["required"],
        ];

        // set configs
        self::$configs = $this->loadConfigs();

        // model
        $this->obj_class = new Classes();

        // language
        $this->lang_front = 'class-front';
        $this->lang_admin = 'class-admin';

        // event listening
        Event::listen('validating', function($input)
        {
            self::$messages = [
                'class_name.required'          => trans($this->lang_admin.'.errors.required', ['attribute' => trans($this->lang_admin.'.fields.name')]),
                'class_overview.required'      => trans($this->lang_admin.'.errors.required', ['attribute' => trans($this->lang_admin.'.fields.overview')]),
                'class_description.required'   => trans($this->lang_admin.'.errors.required', ['attribute' => trans($this->lang_admin.'.fields.description')]),
            ];
        });


    }

    /**
     *
     * @param ARRAY $input is form data
     * @return type
     */
    public function validate($input) {

        $flag = parent::validate($input);
        $this->errors = $this->errors ? $this->errors : new MessageBag();

        //Check length
        $_ln = self::$configs['length'];

        $params = [
            'name' => [
                'key' => 'class_name',
                'label' => trans($this->lang_admin.'.fields.name'),
                'min' => $_ln['class_name']['min'],
                'max' => $_ln['class_name']['max'],
            ],
            'overview' => [
                'key' => 'class_overview',
                'label' => trans($this->lang_admin.'.fields.overview'),
                'min' => $_ln['class_overview']['min'],
                'max' => $_ln['class_overview']['max'],
            ],
            'description' => [
                'key' => 'class_description',
                'label' => trans($this->lang_admin.'.fields.description'),
                'min' => $_ln['class_description']['min'],
                'max' => $_ln['class_description']['max'],
            ],
        ];

        $flag = $this->isValidLength($input['class_name'], $params['name']) ? $flag : FALSE;
        $flag = $this->isValidLength($input['class_overview'], $params['overview']) ? $flag : FALSE;
        $flag = $this->isValidLength($input['class_description'], $params['description']) ? $flag : FALSE;

        return $flag;
    }


    /**
     * Load configuration
     * @return ARRAY $configs list of configurations
     */
    public function loadConfigs(){

        $configs = config('Myclass');
        return $configs;
    }

}