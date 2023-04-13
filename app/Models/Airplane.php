<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Airplane extends Model
{
    use HasFactory;

    protected $primaryKey = 'registration_number';

    protected $fillable = ['model_number','capacity','is_deleted'];

    public function getData($perPage = 10)
    {
        $airplane = $this->select('airplanes.*')->where('is_deleted', '=', false)->orderBy('created_at','desc')->paginate($perPage);
        return $airplane;
    }

    public function remove(){
        $this->is_deleted = true;
        $this->save();
    }
}
