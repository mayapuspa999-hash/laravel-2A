<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    //nama tabel (bentuk jamak dari Employe, ditulis agar jelas)
    protected $table = 'employes';

    //primary key
    protected $primaryKey = 'id';
}