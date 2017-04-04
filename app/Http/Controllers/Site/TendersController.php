<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TendersController extends SiteController
{
    public function __construct()
    {
        parent::__construct();
        $this -> template = 'site.tenders';
    }
    public function index() {
        return $this -> renderOutput();
    }
}
