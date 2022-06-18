<?php

namespace Landing\Controllers;

use App\Controllers\BaseController;

/**
 * Class Home
 */
class Home extends BaseController
{
    public function index()
    {
        $data['pageTitle'] = 'Squadfree Bootstrap Template - Index';
        $data['transparentHeader'] = ' header-transparent';

        echo view('Landing\Views\content', $data);
    }

    public function portfolio()
    {
        $data['pageTitle'] = 'Squadfree Bootstrap Template - Index';
        // $data['transparentHeader'] ='';
        echo view('Landing\Views\portfolio-detail', $data);
    }

    public function page()
    {
        $data['pageTitle'] = 'Inner Page - Squadfree Bootstrap Template';
        // $data['transparentHeader'] ='';
        echo view('Landing\Views\inner-page', $data);
    }

}