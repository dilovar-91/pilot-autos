<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Type;
use App\Models\Brand;
use App\Models\Site;
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
        $cars = Car::with('complectations')->get();
        return view('welcome')->with(array('cars'=>$cars ));
    }
    public function home()
    {
        $brands = Brand::get();
        $sites = Site::get();
        return view('home')->with(array('brands'=>$brands, 'sites'=>$sites ));
    }

    public function brandDetail($id)
    {
        $brand = Brand::with('cars')->findorfail($id);
        return view('welcome')->with(array('brand'=>$brand ));
    }
    
    public function getComplectations($id)
    {
        $carinfo = Car::with('complectations', 'complectations.type')->findorfail($id);
        //$complectations = Complectation::where('car_id', $id)->get();
        return view('detail')->with(array('carinfo'=>$carinfo ));
    }    
    
}
