<?php

class Generate
{
    private $char = "0123456789abcdefghijklmnopqrstuvwxyz";


    public function genCode($limit)
    {
        for ($i = 0; $i < $limit; $i++) {
            $index = rand(0, strlen($this->char) - 1);
            $randomString = "";
            $randomString .= $this->char[$index];
        }
        return $randomString;
    }
}
