<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Blockchain extends Controller
{
    protected $index;
    protected $timestamp;
    protected $data;
    protected $previous_hash;
    protected $hash;

    public function  __construct($index, $data, $previous_hash){
        $this->index         = $index;
        $this->timestamp     = time();
        $this->data          = $data;
        $this->previous_hash = $previous_hash;
        $str = $this->index.$this->timestamp.$this->data.$this->previous_hash;
        $this->hash = hash('sha256',$str);
    }

    static function first( $data = "First" ) {    // create genesis (big bang! first) block
        // uses index zero (0) and arbitrary previousHash ("0")
        return new Blockchain( 0, $data, "0" );
    }

    static function next( $previous, $data="Transaction Data..." ) {
        return new Blockchain( $previous->index+1, $data, $previous->hash );
    }

}