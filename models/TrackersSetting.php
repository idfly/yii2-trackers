<?php

namespace idfly\trackers\models;

class TrackersSetting extends \idfly\settings\models\Model
{
    protected $title = 'Настройки трекеров';

    public $trackers_Code;

    public function rules()
    {
        return [
            [
                [
                    'trackers_Code',
                ],
                'string'
            ],
        ];
    }

    public static function getFormFields($form, $element)
    {
        return [
            'trackers_Code' => $form->
                field($element, 'trackers_Code')->
                textarea(),
        ];
    }

    public function attributeLabels() {
        return [
            'trackers_Code' => 'js-код, который должен исполняться на
                всех страницах сайта',
        ];
    }
}