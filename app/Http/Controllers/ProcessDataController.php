<?php

namespace App\Http\Controllers;

require_once base_path().'/vendor/autoload.php';

/*Get Queue.*/
use App\Jobs\Processxlsx;

class ProcessDataController extends Controller
{
    //Handles GET request, adds the current file in the queue, starts the work.
    public function index()
    {
        $this->dispatch(new Processxlsx);
        return response("İşlem sıraya alındı.",200);
    }

}
