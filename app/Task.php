<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tasks'; // nama tabel default adalah nama class ditambah huruf s (semua lowercase)
}
