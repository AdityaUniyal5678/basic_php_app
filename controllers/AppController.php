<?php

class AppController
{


    public function pr($data)
    {
        echo '<pre>';
        print_r($data);
        echo '</pre>';
    }
}