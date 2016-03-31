<?php namespace Amentian\Bridge;

use Illuminate\Database\Eloquent\Model as Eloquent;

class User extends Eloquent
{
    protected static $table_name = 'dlrbeta.users';

    public static function changeUsername($flarum)
    {
        $model = new static;

        $model->updateUsersTable('username', [
            'value' => $flarum->username,
            'id' => $flarum->id
        ]);
    }

    public static function changePassword($flarum)
    {
        $model = new static;

        $model->updateUsersTable('username', [
            'value' => $flarum->username,
            'id' => $flarum->id
        ]);
    }

    public static function changeEmail($flarum)
    {
        $model = new static;

        $model->updateUsersTable('email', [
            'value' => $flarum->email,
            'id' => $flarum->id
        ]);
    }

    public static function changeAvatar($flarum)
    {
        $model = new static;

        $model->updateUsersTable('avatar', [
            'value' => $flarum->avatar_path,
            'id' => $flarum->id
        ]);

        //app('log')->debug($user);
    }

    protected function updateUsersTable($column, array $values)
    {
        $table = static::$table_name;

        app('db')->connection()->update("update {$table} set {$column} = :value where id = :id", $values);
    }
}
