<?php 

/**
* Model class
* @author Arandi López <arandilopez.93@gmail.com>
*/

abstract class Model {

    protected $attributes = [];

    protected $fillable = [];

    protected $relations = [];

    protected $connection;

    function __construct($data)
    {
        $this->fill($data);
    }

    public function __get($key)
    {
        if($key and isset($this->attributes[$key]))
        {
            return $this->attributes[$key];
        }
    }

    public function __set($key, $value)
    {
        if ($key and $value) 
        {
            $this->attributes[$key] = $value;
        }
    }

    public function __call($name, $params)
    {
        echo "Calling to undefined method $name";
        throw new Exception("Undefined method $name");
        
    }

    public static function __callStatic($name, $params)
    {
        
    }

    public function save()
    {

    }

    public function delete()
    {

    }

    public function update()
    {

    }

    public static function all()
    {

    }

    public static function find(int $id)
    {

    }

    public static function create( array $data )
    {

    }

    protected function setAttribute($name, $value)
    {
        $this->attributes[$name] = $value;
    }

    protected function isFillable($key)
    {
        if (in_array($key, $this->fillable)) {
            return true;
        }else{
            return false;
        }
    }

    protected function fill($attributes)
    {
        foreach ($attributes as $attribute => $value) {
            if ($this->isFillable($attribute)) {
                $this->setAttribute($attribute, $value);
            }
        }
    }

    public function __toArray()
    {
        $modelArray = [];
        foreach ($this->fillable as $fill) {
            $modelArray[$fill] = $this->attributes[$fill];
        }
        return $modelArray;
    }


}