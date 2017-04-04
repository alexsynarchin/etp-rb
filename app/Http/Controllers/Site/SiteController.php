<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    protected $template;
    protected $vars = [];
    public function __construct()
    {

    }
    public function renderOutput()
    {
        $navigation = view('site.__partials.main-nav') -> render();
        $this -> vars = array_add($this -> vars, 'navigation', $navigation);
        return view($this->template)->with($this->vars);
    }
}
