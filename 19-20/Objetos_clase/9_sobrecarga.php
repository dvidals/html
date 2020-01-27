<?php
// https://riptutorial.com/es/php/example/4603/--call----y---callstatic---

class Foo {
    public function __call($method, $arguments) {
        $snakeName = CaseHelper::camelToSnake($method); //clase convierte entre mayúsculas a guión bajo.
        
        $subMethod = substr($snakeName, 0, 3); // Get get/set/has prefix
        $propertyName = substr($snakeName, 4);

        switch ($subMethod) {
            case "get":
                return $this->data[$propertyName];
            case "set":
                $this->data[$propertyName] = $arguments[0];
                break;
            case "has":
                return isset($this->data[$propertyName]);
            default:
                throw new BadMethodCallException("Undefined method $method");
        }
    }

    public static function __callStatic($method, $arguments) {
        print_r(func_get_args());
    }
}

$instance = new Foo();

$instance->setSomeState("foo");
var_dump($instance->hasSomeState());      // bool(true)
var_dump($instance->getSomeState());      // string "foo"

Foo::exampleStaticCall("test");