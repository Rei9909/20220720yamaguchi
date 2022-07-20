<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'name', 'sex', 'email', 'zip', 'address', 'Building', 'opinion', 'updated_at', 'created_at', 'deleted_at'];

    public static $rules = array(
        'id' => 'required',
        'name' => 'required',
        'sex' => 'required',
        'email' => 'required',
        'zip' => 'required|min:8|max:8',
        'address' => 'required',
        'opinion' => 'required|min:1|max:120',
        'created_at' => 'required',
        'updated_at' => 'required',
        'deleted_at' => 'required'
    );

    public function getDetail()
    {
        $txt = 'ID:'.$this->id . ' ' . $this->name . '(' . $this->sex .  '男,女'.') '.$this->email . ' ' . $this->zip . ' ' . $this->address . ' ' . $this->Building . ' ' . $this->opinion;
        return $txt;
    };
}
