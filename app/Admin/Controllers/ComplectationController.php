<?php

namespace App\Admin\Controllers;

use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use \App\Models\Complectation;
use \App\Models\Type;
use \App\Models\Car;

class ComplectationController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Комплектации';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Complectation());
        $grid->column('id', __('№'));
        $grid->column('title', __('Комплектация'));
        //$grid->column('type', __('Тип коробки'));        
        $grid->type_id('Тип коробки')->display(function($type_id) {
            $type  = Type::find($type_id);
            if (!empty($type)) return $type->name ;
        });
        $grid->car_id('Авто')->display(function($car_id) {
            $auto  = Car::find($car_id);
            if (!empty($auto)) return $auto->name ;
        });
        $grid->column('price', __('Цена'));
        $grid->column('price_credit', __('Цена в кредит'));
        $grid->column('description', __('Описание'));
        $grid->column('created_at', __('Создан'));
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
        $show = new Show(Complectation::findOrFail($id));
        $show->field('id', __('№'));
        $show->field('title', __('Комплектация'));
        $show->field('type', __('Тип коробки'));
        //$show->field('pic', __('Рисунок'));
        $show->field('car_id', __('Авто'));
        $show->field('price', __('Цена'));
        $show->field('price_credit', __('Цена в кредит'));
        $show->field('description', __('Описание'));
        $show->field('created_at', __('Создан'));
        $show->field('updated_at', __('Изменён'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Complectation());
        
        $form->text('title', __('Комплектация'));       
        $form->select('type_id', 'Тип комплектации')->options(function ($id) {
            $type = Type::find($id);        
            if ($type) {
                return [$type->id => $type->name];
            }
        })->ajax('/admin/api/types');        
        //$form->image('pic', __('Pic'));
        $form->select('car_id', 'Авто')->options(function ($id) {
            $car = Car::find($id);        
            if ($car) {
                return [$car->id => $car->name];
            }
        })->ajax('/admin/api/cars');
        
        $form->currency('price', __('Цена'))->symbol('₽');
        $form->currency('price_credit', __('Цена в кредит'))->symbol('₽');
        $form->text('description', __('Описание'));

        return $form;
    }
}
