<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Country;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $country;

    public function __construct()
    {
        $this->country = new Country();
    }

    public function hello(){

        $data = 'data';

        $users = array('aw1','aw2','aw3');

        return view('welcome.hello', compact('data','users'));
    }


    public function insert(){

//        $this->country->insert();


        $unixTimestamp = (new \DateTime())->getTimestamp();

        $data = [
            'code' => 'XYZ',
            'name' => 'XYZ',
            'dname' => 'ZSY',
            'num_code' => 0,
            'phone_code' => 0,
            'created' => $unixTimestamp,
            'register_by' => 1,
            'modified' => $unixTimestamp,
            'modified_by' => 1,
        ];

        Country::create($data);

        return 'Inserted';

    }

    public function edit(){
        $this->country->edit();

        return 'Edited!';
    }

    public function read(){


//        return $this->country->read();

        foreach(Country::all() as $data){
            dump($data->name);
        }


    }

    public function delete(){
        $this->country->delete();
        return 'Deleted!';
    }
}
