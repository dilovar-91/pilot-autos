<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Type;
use App\Models\Complectation;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::with('complectations')->paginate(6);
        return view('welcome')->with(array('cars'=>$cars ));
    }
    
    public function getComplectations($id)
    {
        $carinfo = Car::with('complectations', 'complectations.type')->findorfail($id);
        //$complectations = Complectation::where('car_id', $id)->get();
        return view('detail')->with(array('carinfo'=>$carinfo ));
    }    
    
}
