<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Validation {

    public function do_upper($param)
    {
        return strtoupper($param);
    }

    public function do_ucwords($param)
    {
        return ucwords($param);
    }

    public function do_one_space($text,$replace,$param)
    {
        return preg_replace($text,$replace,$param);
    }

    public function do_sub_string($param,$start,$end)
    {
        return substr($param,$start,$end);
    }
}
