<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\Shield\Entities\User;
use App\Models\UserModel;

class AddAdminAccount extends Seeder
{
    public function run()
    {
        //creazione utente
        $user = new User([
            'email' => 'admin@test.com',
            'password' => 'segreto',
            'first_name' => 'Administrator'
        ]);
        $model = new UserModel;    
        $model ->save($user);

        //get id dell'utente per inserimento in un gruppo
        $user = $model->findById($model->getInsertID());
        
        //attivazione utente
        $user->activate();

        //inserimento utente in gruppi
        $user->addGroup('user','admin');
    }
}
