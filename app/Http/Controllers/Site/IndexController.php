<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends SiteController
{
    public function __construct()
    {
        parent::__construct();
        $this -> template = 'site.index';
    }
   public function index() {
       return $this -> renderOutput();
   }
}
