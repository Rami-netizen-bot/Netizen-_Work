<?php

class Container
{
    protected array $binding = [];

    public function bind(string $abstract, callable $concreate)
    {
        $this->binding[$abstract] = $concreate;
    }

    public function make(string $abstract)
    {
        if (!isset($this->binding[$abstract])) {
            throw new Exception("Class $abstract មិនត្រូវបានចុះឈ្មោះទេ។");
        }
        return $this->binding[$abstract]($this);
    }
}

$container = new Container();

// ជំហានទី ១៖ ត្រូវ Bind អ្វីគ្រប់យ៉ាងឱ្យរួចរាល់ជាមុនសិន
$container->bind('db', function () {
    return "Connect to MySql Database!";
});

$container->bind('UserService', function ($c) {
    return "UserService created with " . $c->make('db');
});

// ជំហានទី ២៖ ទើបចាប់ផ្តើមប្រើប្រាស់ (Make)
echo $container->make('UserService');
