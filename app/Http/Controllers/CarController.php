<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Type;
use App\Models\Brand;
use App\Models\Site;
use App\Models\Complectation;
use App\Models\Competitor;
use Illuminate\Support\Facades\Auth;

class CarController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
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
        $brands = Brand::orderBy('order')->get();
        $sites = Site::orderBy('order')->get();
        $competitors = Competitor::orderBy('order')->get();
        return view('home')->with(array('brands'=>$brands, 'sites'=>$sites, 'competitors'=>$competitors ));
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
