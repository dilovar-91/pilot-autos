<?php

namespace App\Admin\Controllers;

use Encore\Admin\Controllers\AdminController;
use Illuminate\Http\Request;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use \App\Models\Car;
use \App\Models\Type;

class CarController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '\App\Models\Car';

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
        //$grid->column('brand_id', __('Brand id'));
        //$grid->column('color', __('Color'));
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
        $show = new Show(Car::findOrFail($id));

        $show->field('id', __('№'));
        $show->field('name', __('Название'));
        $show->field('description', __('Описание'));
        $show->field('pic', __('Рисунок'));
        //$show->field('brand_id', __('Brand id'));
        //$show->field('color', __('Color'));
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
        $form = new Form(new Car());
        $form->text('name', __('Название'));
        $form->text('description', __('Описание'));
        $form->image('pic', __('Рисунок'));
        //$form->number('brand_id', __('Brand id'));
        //$form->color('color', __('Color'));
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
}
