<?php

interface TableInterface
{
    public function save(array $data);
}

interface LogInterface
{
    public function save(array $data);
}

class Table implements TableInterface, LogInterface
{
    public function save(array $data)
    {
        return "Save method from table class <br />";
    }

    public function log(string $message)
    {
        return $message . "<br />";
    }
}

echo (new Table)->save([]);
echo (new Table)->log("Interface from log interface");
