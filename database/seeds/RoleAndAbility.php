<?php

use Illuminate\Database\Seeder;
use Silber\Bouncer\BouncerFacade as Bouncer;
use App\User;
class RoleAndAbility extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Bouncer::role()->firstOrCreate([
		    'name' => 'admin',
		    'title' => 'Administrator',
		]);
		$editor = Bouncer::role()->firstOrCreate([
		    'name' => 'editor',
		    'title' => 'Editor de Contenido',
		]);



		$create = Bouncer::ability()->firstOrCreate([
		    'name' => 'create-category',
		    'title' => 'Crear Categorias',
		]);
		$edit = Bouncer::ability()->firstOrCreate([
		    'name' => 'edit-category',
		    'title' => 'edit Categorias',
		]);
		$delete = Bouncer::ability()->firstOrCreate([
		    'name' => 'delete-category',
		    'title' => 'delete Categorias',
		]);
		$index = Bouncer::ability()->firstOrCreate([
		    'name' => 'index-category',
		    'title' => 'index Categorias',
		]);

		Bouncer::allow($admin)->to($create);
		Bouncer::allow($admin)->to($edit);
		Bouncer::allow($admin)->to($delete);
		Bouncer::allow($admin)->to($index);


		Bouncer::allow($editor)->to($create);
		Bouncer::allow($editor)->to($index);


		$user=User::find(51);
		$user2=User::find(50);

		$user->assign('admin');
		$user2->assign('editor');
    }
}
