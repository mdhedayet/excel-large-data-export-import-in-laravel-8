<?php

namespace App\Imports;

use App\Models\user;
use Maatwebsite\Excel\Concerns\ToModel;

class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new user([
            'name'=> $row[0],
            'email'=>$row[1],
            'email_verified_at'=>$row[2],
            'created_at'=>$row[3],
            'updated_at'=>$row[4],
            'password'=>bcrypt($row[5]),
        ]);
    }
}
