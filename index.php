<?php
echo 'chfia';

class Movie
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
    public function getName(): string
    {
        return $this->name;
    }
    public function setName(string $name): void
    {
        $this->name = $name;
    }
}
$movie1 = new Movie('moon');

var_dump($movie1);
