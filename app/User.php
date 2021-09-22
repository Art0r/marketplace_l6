<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ // diz quais atributos podem ser inseridos/modificados ao criar uma nova instância
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [ // diz quais campos devem ser escondidos ao fazer uma consulta
        'password', 'remember_token'//, 'email'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime', //casta o atributo correspondente para um tipo especifico
        // Ex: 'name' => 'boolean'
    ];

    public function store(){
        return $this->hasOne(Store::class);
    }
}
