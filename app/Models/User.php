<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

     /**
      * User attributes
      * $this->attributes["id"] - int - contains the user primary key
      * $this->attributes["name"] - string - contains the user name
      * $this->attributes["email"] - string - contains the user email
        * $this->attributes["password"] - string - contains the user password
        * $this->attributes["remember_token"] - string - contains the user remember token
        * $this->attributes["created_at"] - string - contains the user created at date time
        * $this->attributes["updated_at"] - string - contains the user updated at date time
        * $this->attributes["email_verified_at"] - string - contains the user email verified at date time
        * $this->attributes["is_admin"] - boolean - contains the user is admin flag
        * $this->attributes["role"] - string - contains the user role
        * $this->attributes["alamat"] - string - contains the user alamat
        * $this->attributes["no_hp"] - int - contains the user no hp
      */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'alamat',
        'no_hp',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getId(){
        return $this->attributes["id"];
    }
    public function setId($id){
        $this->attributes["id"] = $id;
    }
    public function getName(){
        return $this->attributes["name"];
    }
    public function setName($name){
        $this->attributes["name"] = $name;
    }
    public function getEmail(){
        return $this->attributes["email"];
    }
    public function setEmail($email){
        $this->attributes["email"] = $email;
    }
    public function getPassword(){
        return $this->attributes["password"];
    }
    public function setPassword($password){
        $this->attributes["password"] = $password;
    }
    public function getRole(){
        return $this->attributes["role"];
    }
    public function setRole($role){
        $this->attributes["role"] = $role;
    }
    public function getAlamat(){
        return $this->attributes["alamat"];
    }
    public function setAlamat($alamat){
        $this->attributes["alamat"] = $alamat;
    }
    public function getNoHp(){
        return $this->attributes["no_hp"];
    }
    public function setNoHp($no_hp){
        $this->attributes["no_hp"] = $no_hp;
    }
}
