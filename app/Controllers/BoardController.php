<?php
namespace App\Controllers;

use App\Controllers\Controller;
use App\Models\SchoolBoard;

class BoardController extends Controller
{
	
    public function store(Request $request)
    {
		$name = $this->input->get("name");
		$type = $this->input->get("type");
    }
}
