<?php

namespace App\Admin\Controllers;

use App\Models\Car;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use \App\Models\Type;
use \App\Models\Brand;
use \App\Models\CarModel;
use Illuminate\Http\Request;

class CarController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Автомобилы';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    
    {
        $grid = new Grid(new Car());

        $grid->column('id', __('№'));
        $grid->column('name', __('Название'));
        $grid->column('description', __('Описание'));
        $grid->column('pic', __('Рисунок'))->image(); 
        $grid->column('brand_id', __('Марка'));
        $grid->column('model_id', __('Модель'));
        $grid->column('color', __('Цвет'));
        $grid->column('min_price', __('Мин. цена'));
        $grid->column('price_pilot', __('Пилот Авто'));
        $grid->column('price_light', __('Лайт Авто'));
        $grid->column('price_masmotors', __('Мас Моторс'));
        $grid->column('price_centralniy', __('Центральный'));
        $grid->column('price_ria', __('Риа Авто'));
        $grid->column('price_altera', __('Алтера'));
        $grid->column('price_incom', __('Инком Авто'));
        $grid->column('price_cargiant', __('Cargiant'));
        $grid->column('price_carso', __('Carso'));
        $grid->column('price_autoofficial', __('auto-official.ru'));
        $grid->column('price_autocentrkhimki', __('Автоцентр Химки'));
        $grid->column('price_amm', __('a-mm.ru'));
        $grid->column('price_fayer', __('Файер Авто'));
        $grid->column('price_irbis', __('Ирбис'));
        $grid->column('price_vita', __('Вита Авто'));
        $grid->column('price_centravto', __('center-avto.ru'));
        $grid->column('price_kitavto', __('kit-avto.ru'));
        $grid->column('price_ctc', __('ctc-motors.com'));        
        $grid->column('updated_at', __('Изменён'));
        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Car::findOrFail($id));

        $show->field('id', __('№'));
        $show->field('name', __('Название'));
        $show->field('description', __('Описание'));
        $show->field('pic', __('Рисунок'));        
        $show->field('brand_id', __('Марка'));
        $show->field('model_id', __('Модель'));
        $show->field('color', __('Цвет'));
        $show->field('min_price', __('Мин. цена'));
        $show->field('price_pilot', __('Пилот Авто'));
        $show->field('price_light', __('Лайт Авто'));
        $show->field('price_masmotors', __('Мас Моторс'));
        $show->field('price_centralniy', __('Центральный'));
        $show->field('price_ria', __('Риа Авто'));
        $show->field('price_altera', __('Алтера'));
        $show->field('price_incom', __('Инком Авто'));
        $show->field('price_cargiant', __('Cargiant'));
        $show->field('price_carso', __('Carso'));
        $show->field('price_autoofficial', __('auto-official.ru'));
        $show->field('price_autocentrkhimki', __('Автоцентр Химки'));
        $show->field('price_amm', __('a-mm.ru'));
        $show->field('price_fayer', __('Файер Авто'));
        $show->field('price_irbis', __('Ирбис'));
        $show->field('price_vita', __('Вита Авто'));
        $show->field('price_centravto', __('center-avto.ru'));
        $show->field('price_kitavto', __('kit-avto.ru'));
        $show->field('price_ctc', __('ctc-motors.com'));
        //$show->field('created_at', __('Создан'));
        //$show->field('updated_at', __('Изменён'));
        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
       
        $form = new Form(new Car());   
        $form->column(1/2, function ($form) {            
            $form->text('name', __('Название'));
            $form->text('description', __('Описание'));
            $form->image('pic', __('Рисунок'));;
            $form->select('brand_id', 'Марка')->options(function ($id) {
                $brand = Brand::find($id);        
                if ($brand) {
                    return [$brand->id => $brand->name];
                }
            })->ajax('/admin/api/brands');   
            $form->select('model_id', 'Модель')->options(function ($id) {
                $model = CarModel::find($id);        
                if ($model) {
                    return [$model->id => $model->name];
                }
            })->ajax('/admin/api/models');   
            //$form->color('color', __('Цвет'));
            $form->number('min_price', __('Мин. цена'));
            $form->number('price_pilot', __('Пилот Авто'));
            $form->number('price_light', __('Лайт Авто'));     
            $form->number('price_masmotors', __('Мас Моторс'));
            $form->number('price_centralniy', __('Центральный'));         
            $form->number('price_ria', __('Риа Авто'));          
            $form->number('price_altera', __('Алтера'));
        });
        $form->column(1/2, function ($form) { 
            $form->number('price_incom', __('Инком Авто'));
            $form->number('price_cargiant', __('Cargiant')); 
            $form->number('price_carso', __('Carso'));
            $form->number('price_autoofficial', __('auto-official.ru'));
            $form->number('price_autocentrkhimki', __('Автоцентр Химки'));      
            $form->number('price_amm', __('a-mm.ru'));    
            $form->number('price_fayer', __('Файер Авто'));
            $form->number('price_irbis', __('Ирбис'));
            $form->number('price_vita', __('Вита Авто'));
            $form->number('price_centravto', __('center-avto.ru'));
            $form->number('price_kitavto', __('kit-avto.ru'));
            $form->number('price_ctc', __('ctc-motors.com'));
    });
        return $form;
    }

    public function getType(Request $request)
    {
        $q = $request->get('q');
        return Type::where('name', 'like', "%$q%")->paginate(null, ['id', 'name as text']);
    }
    public function getCar(Request $request)
    {
        $q = $request->get('q');
        return Car::where('name', 'like', "%$q%")->paginate(null, ['id', 'name as text']);
    }
    public function getBrand(Request $request)
    {
        $q = $request->get('q');
        return Brand::where('name', 'like', "%$q%")->paginate(null, ['id', 'name as text']);
    }
    public function getModels(Request $request)
    {
        $q = $request->get('q');
        return CarModel::where('name', 'like', "%$q%")->paginate(null, ['id', 'name as text']);
    }
}
