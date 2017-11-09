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
    protected $nonce;
    protected $hash;

    public function  __construct($index, $data, $previous_hash){
        $this->index         = $index;
        $this->timestamp     = time();
        $this->data          = $data;
        $this->previous_hash = $previous_hash;
        $this->compute_hash_with_proof_of_work();
    }


    public function compute_hash_with_proof_of_work($difficulty="00"){

        $nonce = 0;
        while(1){
            $hash = $this->calc_hash_with_nonce($nonce);
            if (substr($hash, 0, 2) ==  $difficulty){
                $this->nonce = $nonce;
                $this->hash = $hash;
                break;
            }
            else
                $nonce++;
        }
        return false;


    }

    public function calc_hash_with_nonce(){

        $a=$this->nonce;
        $b=$this->index;
        $c=$this->timestamp;
        $d=$this->data;
        $e=$this->previous_hash;
        $str=$a.$b.$c.$d.$e;
        $sha = Hash::make($str);

        return $sha;
    }



}