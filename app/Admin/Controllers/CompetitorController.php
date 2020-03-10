<?php

namespace App\Admin\Controllers;

use App\Models\Competitor;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class CompetitorController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Конкуренты';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Competitor());

        $grid->column('id', __('№'));
        $grid->column('title', __('Заголовок'));
        $grid->column('url', __('Url адрес'));
        $grid->column('pic', __('Рисунок'))->image();
        $grid->column('description', __('Описание'));
        $grid->column('order', __('Порядок'));
        $grid->column('created_at', __('Добавлен'));
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
        $show = new Show(Competitor::findOrFail($id));
        $show->field('id', __('№'));
        $show->field('title', __('Заголовок'));
        $show->field('url', __('Url адрес'));
        $show->field('pic', __('Рисунок'))->image();
        $show->field('description', __('Описание'));
        $show->field('order', __('Порядок'));
        $show->field('created_at', __('Добавлен'));
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
        $form = new Form(new Competitor());
        $form->text('title', __('Заголовок'));
        $form->url('url', __('Url адрес'));
        $form->image('pic', __('Рисунок'))->move('images');;
        $form->text('description', __('Описание'));
        $form->number('order', __('Порядок'))->default(100);
        return $form;
    }
}
