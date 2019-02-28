<?php namespace OFFLINE\Tricks;

use OFFLINE\Tricks\Components\TopicList;
use OFFLINE\Tricks\Components\TrickDetail;
use OFFLINE\Tricks\Components\TrickForm;
use OFFLINE\Tricks\Components\TrickList;
use RainLab\User\Models\User;
use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public $require = ['RainLab.User'];

    public function registerComponents()
    {
        return [
            TopicList::class   => 'topicList',
            TrickList::class   => 'trickList',
            TrickDetail::class => 'trickDetail',
            TrickForm::class   => 'trickForm',
        ];
    }

    public function registerSettings()
    {
    }

    public function boot()
    {
        User::extend(function (User $user) {
            $user->rules['password']              = 'required:create|between:8,255|confirmed';
            $user->rules['password_confirmation'] = 'required_with:password|between:8,255';
            $user->addDynamicMethod('getFallbackAvatarAttribute', function () use ($user) {
                $id = str_slug($user->username);

                $url = 'https://api.adorable.io/avatars/%d/%s.png';

                return [
                    sprintf($url, 45, $id),
                    sprintf($url, 90, $id),
                ];
            });
        });
    }
}
