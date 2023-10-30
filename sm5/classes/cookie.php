<?php
class Cookie
{
    private $type;
    public function __construct()
    {
        $this->type = [];
    }

    function setType($newType): void
    {
        array_push($this->type, $newType);
    }

    function getType()
    {
        return $this->type;
    }
}
?>