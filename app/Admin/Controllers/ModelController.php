<?php

namespace App\Admin\Controllers;

use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use \App\Models\CarModel;
use \App\Models\Brand;

class ModelController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Моделы авто';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new CarModel());

        $grid->column('id', __('№'));
        $grid->column('name', __('Модель авто'));
        $grid->column('pic', __('Рисунок'))->image();
        $grid->column('url', __('Адрес на сайте'));
        $grid->column('assembly', __('Место сборки'));
        $grid->column('comments', __('Комментарии'));
        $grid->column('external_link', __('Внешный источник'));
        $grid->column('order', __('Порядок'));
        //$grid->column('created_at', __('Создан'));
        //$grid->column('updated_at', __('Изменён'));

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
        $show = new Show(CarModel::findOrFail($id));

        $show->field('id', __('№'));
        $show->field('name', __('Модель авто'));
        $show->field('pic', __('Рисунок'));
        $show->field('url', __('Адрес на сайте'));
        $show->field('assembly', __('Место сборки'));
        $show->field('comments', __('Комментарии'));
        $show->field('external_link', __('Внешный источник'));
        $show->field('order', __('Порядок'));
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
        $form = new Form(new CarModel());

        $form->text('name', __('Модель авто'));
        $form->image('pic', __('Рисунок'));
        $form->url('url', __('Адрес на сайте'));
        $form->text('assembly', __('Место сборки'));
        $form->text('comments', __('Комментарии'));
        $form->text('external_link', __('Внешный источник'));
        $form->select('brand_id', 'Марка')->options(function ($id) {
            $brand = Brand::find($id);        
            if ($brand) {
                return [$brand->id => $brand->name];
            }
        })->ajax('/admin/api/brands');
        $form->number('order', __('Порядок'))->default(100);

        return $form;
    }
}
