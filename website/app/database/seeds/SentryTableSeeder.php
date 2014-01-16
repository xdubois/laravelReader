<?php

class SentryTableSeeder extends Seeder {

	public function run()
	{
		DB::table('users')->delete();
        DB::table('groups')->delete();
        DB::table('users_groups')->delete();

        Sentry::getUserProvider()->create(array(
            'id'          => 1,
            'username'   => 'admin',
            'email'       => 'admin@reader.ch',
            'password'    => "admin",
            'username'  => 'admin',
            'activated'   => 1,
            'permissions' => array('admin' => 1, 'user' => 1),
        ));

        $profile = new Profile();
        $profile->save();
        Sentry::getUserProvider()->create(array(
            'username'   => 'user',
            'email'       => 'user@reader.ch',
            'password'    => "user",
            'username'  => 'user',
            'activated'   => 1,
        ));
 
        Sentry::getGroupProvider()->create(array(
            'name'        => 'admin',
            'permissions' => array('admin' => 1, 'users' => 1), //set the permission here
        ));

        Sentry::getGroupProvider()->create(array(
            'name'        => 'user',
            'permissions' => array('users' => 1),
        ));
 
        // Assign user permissions
        $adminUser  = Sentry::getUserProvider()->findByLogin('admin@reader.ch');
        $adminGroup = Sentry::getGroupProvider()->findByName('admin');
        $adminUser->addGroup($adminGroup);

        $basicUser  = Sentry::getUserProvider()->findByLogin('user@reader.ch');
        $userGroup = Sentry::getGroupProvider()->findByName('user');
        $basicUser->addGroup($userGroup);

	}

}
