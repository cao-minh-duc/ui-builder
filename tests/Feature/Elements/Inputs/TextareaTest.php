<?php
namespace CaoMinhDuc\UiBuilder\Tests\Feature\Elements\Inputs;

use CaoMinhDuc\UiBuilder\Tests\Feature\Elements\Inputs\DefaultTestCase;
use CaoMinhDuc\UiBuilder\Tests\Feature\Elements\Inputs\Support\Attributes;

class TextareaTest extends DefaultTestCase
{
    public $view = 'ui-builder::inputs.textarea';

    public $input = 'textarea[name="element"]';

    /**
     * @test
     */
    public function type()
    {
        //init view
        $view = $this->assertView(
            $this->view, 
            Attributes::make()->get()
        );

        //assertions
        $view->has($this->input);
    }

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
        $view->in($this->input)->contains('Value');
    }
}