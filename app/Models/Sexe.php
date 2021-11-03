<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sexe extends Model
{
    use HasFactory;

    protected $table = "t_sexe";

    protected $fillable = [
        "libelle",

        "active",
        "version",
        "creation_date",
        "modification_date",
        "creation_hostname",
        "modification_hostname",
        "creation_username",
        "modification_username",
        "utilisateur_creation_id",
        "utilisateur_modification_id",
    ];
}
