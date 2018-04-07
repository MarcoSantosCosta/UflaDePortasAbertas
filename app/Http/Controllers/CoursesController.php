<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class CoursesController extends Controller
{
    private $instance;

    public function __construct(Courses $instance)
    {
        $this->instance = $instance;
    }


    public function get($id)
    {
        $response = $this->instance->get($id);
        if ($response) {
            return response($response, 200);
        }
        return response('not found', 400);
    }

    public function getAll()
    {
        $response = $this->instance->getAll();
        if ($response) {
            return response($response, 200);
        }
        return response('not found', 400);
    }

    public function getActivities($id)
    {
    }

    public function add()
    {
        $input = Input::all();
        $this->instance->fill($input);
        $reponse = $this->instance->add();
        if($reponse){
            return response($reponse,200);
        }
        return response($reponse,400);

    }

    public function set($id)
    {
        $input = Input::all();
        $this->instance->fill($input);
        $reponse = $this->instance->set($id);
        if($reponse){
            return response($reponse,200);
        }
        return response($reponse,400);
    }

    public function remove($id)
    {
        $reponse = $this->instance->remove($id);
        if($reponse){
            return response('ok',200);
        }
        return response('not found',400);
    }

}
