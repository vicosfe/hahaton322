<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Blockchain;
class IndexController extends Controller
{
    public function index(){

        $b0 = Blockchain::first( "Genesis" );
        $b1 = Blockchain::next( $b0, "Transaction Data..." );
        $b2 = Blockchain::next( $b1, "Transaction Data......" );
        $b3 = Blockchain::next( $b2, "More Transaction Data..." );


        $blockchain = [$b0, $b1, $b2,$b3];
        dump($blockchain);
    }
}
