<?php
namespace CaoMinhDuc\UiBuilder\Tests\Feature\Elements\Inputs;

use CaoMinhDuc\UiBuilder\Tests\TestCase;
use CaoMinhDuc\UiBuilder\Tests\Feature\Elements\Inputs\Support\Attributes;

class DefaultTestCase extends TestCase
{
    protected $view;

    protected $input = '[name="element"]';

    /**
     *
     * @test
     */
    public function default()
    {
        //init view
        $view = $this->assertView(
            $this->view, 
            Attributes::make()->get()
        );

        //assertions
        $view->in('label')->contains('Element');
        $view->in($this->input)->hasAttribute('type','text')->value('Value');
    }

    /**
     *
     * @test
     */
    public function required()
    {
        //init view
        $view = $this->assertView(
            $this->view, 
            Attributes::make()->required()->get()
        );

        //assertions
        $view->in($this->input)->required();
    }

    /**
     *
     * @test
     */
    public function disabled()
    {
        //init view
        $view = $this->assertView(
            $this->view, 
            Attributes::make()->disabled()->get()
        );

        //assertions
        $view->in($this->input)->disabled();
    }


    /**
     * @test
     */
    public function errors()
    {
        //init view
        $view = $this->assertView(
            $this->view,
            Attributes::make()->errors('Error Message')->get()
        );

        //assertions
        $view
            ->contains('Error Message')
            ->has('input[type=text][name="element"]')->hasClass('border-red-500');
    }
}