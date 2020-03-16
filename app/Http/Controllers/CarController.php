<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Type;
use App\Models\Brand;
use App\Models\Site;
use App\Models\Complectation;
use App\Models\Competitor;
use App\Models\CarModel;
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
        
        $models = CarModel::orderBy('order')->get();
        return view('home')->with(array('brands'=>$brands, 'sites'=>$sites, 'competitors'=>$competitors ));
    }

    public function sites()
    {
        $sites = Site::orderBy('order')->get();
        $landings = Site::orderBy('order')->get();
        return view('sites')->with(array('sites'=>$sites, 'landings'=>$landings));
    }
    public function landings()
    {
        $landings = Site::orderBy('order')->get();
        return view('landings')->with(array('landings'=>$landings));
    }

    public function brands()
    {
        $brands = Brand::orderBy('order')->get();
        return view('brands')->with(array('brands'=>$brands));
    }

    public function competitors()
    {
        return view('competitors');
    }
    public function competitor_site()
    {
        $competitors = Competitor::where('site_type', 1)->orderBy('order')->get();
        return view('competitor_site')->with(array('competitors'=>$competitors));
    }
    public function competitor_landing()
    {
        $competitors = Competitor::where('site_type', 2)->orderBy('order')->get();
        return view('competitor_landing')->with(array('competitors'=>$competitors));
    }

    public function brandDetail($id)
    {
        $brand = Brand::with('cars')->findorfail($id);
        return view('welcome')->with(array('brand'=>$brand ));
    }
    public function modelDetail($id)
    {
        $brand = Brand::with('models')->findorfail($id);
        return view('model')->with(array('brand'=>$brand ));
    }
    
    public function getComplectations($id)
    {
        $carinfo = Car::with('complectations', 'complectations.type', 'brand')->findorfail($id);
        //$complectations = Complectation::where('car_id', $id)->get();
        return view('detail')->with(array('carinfo'=>$carinfo ));
    }    
    
}
