<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserTest extends Model
{
    protected $fillable = ['id','name','parity'];

    public function data()
    {
        $data = $this->all();
        return $data;
    }
    
    public function _create($data)
    {        
        return $this->create(
        [
            'name' => $data['name']
        ]);
    }

    public function tambahdata($data)
    {
        $this->_create($data);
        return redirect('/')->with('status', 'Data Berhasil di Tambahkan!');;
    }

}
