<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use App\Models\Board;
use App\scopes\ScopePerson;

class Person extends Model
{
    use HasFactory;

    public function getData(){
        return $this->id.':'.$this->name.'('.$this->age.')';
    }

    protected $guarded=array('id');

    public static $rules=array(
        'name'=>'required',
        'email'=>'email',
        'age'=>'integer|min:0|max:150'
    );

    public function boards(){
        return $this->hasMany(Board::class);
    }

    public function scopeNameEqual($query,$str){
        return $query->where('name',$str);
    }

    public function scopeAgeGreaterThan($query,$n){
        return $query->where('age','>=',$n);
    }

    public function scopeAgeLessThan($query,$n){
        return $query->where('age','<=',$n);
    }

    protected static function boot(){
        parent::boot();

        static::addGlobalScope(new ScopePerson);
    }
}
