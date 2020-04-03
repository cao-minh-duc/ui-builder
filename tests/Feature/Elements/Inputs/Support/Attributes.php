<?php
namespace CaoMinhDuc\UiBuilder\Tests\Feature\Elements\Inputs\Support;

use Illuminate\Support\MessageBag;
use Illuminate\Support\ViewErrorBag;

class Attributes
{
    private $data = [];

    private $errors;

    public function __construct(array $data = [])
    {
        $this->set($data);
        $this->errors();
        return $this;
    }

    public function all()
    {
        return array_merge(
            $this->default(),
            $this->data,
            ['errors' => $this->errors]
        );
    }

    public function set(array $data)
    {
        if(
            array_key_exists('errors',$data) 
            && ! $data['errors'] instanceof ViewErrorBag
        ){
            $this->default('errors')->getBag('default')->add('element',$data['errors']);
        }
        $this->data = $data;
        return $this;
    }

    public function get($attribute = NULL)
    {
        if(NULL === $attribute)
        {
            return $this->all();
        }
        return $this->all()[$attribute] ?? NULL;
    }

    public function push( $attribute, $value = NULL )
    {
        if(is_array($attribute))
        {
            $this->data = array_merge($this->data,$attribute);
        }
        $this->data[$attribute] = $value;
        return $this;
    }

    public function errors($message = NULL)
    {
        $errors = (new ViewErrorBag)
                    ->put(
                        'default',
                        new MessageBag(['element'=>$message])
                    );

        $this->errors = $errors;
        return $this;

    }
    public function required($isRequired = true)
    {
        return $this->push('required',$isRequired);
    }

    public function disabled($isDisabled = true)
    {
        return $this->push('disabled',$isDisabled);
    }

    public function default($attribute = NULL)
    {
        if(NULL !== $attribute)
        {
            return $this->default()[$attribute];
        }

        
        
        return [
            'code' => 'element',
            'name' => 'Element',
            'value' => 'Value',
        ];
    }

    public static function make(array $data = [])
    {
        return new self($data);
    }
}