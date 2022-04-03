<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WrapperController extends Controller
{
    public function forward(){
        $json= Http::get('http://www.mapquestapi.com/geocoding/v1/address?key=eNkZvp7Prg8KyqdpoEBz4V4SFPXcXing')->json();
        return response()->json($json);
    }
    public function forwardw(){
        $json= Http::get('http://www.mapquestapi.com/geocoding/v1/address?key=eNkZvp7Prg8KyqdpoEBz4V4SFPXcXing&street=1600+Pennsylvania+Ave+NW&city=Washington&state=DC&postalCode=20500')->json();
        return response()->json($json);
    }
    public function reserve(){
        $json= Http::get('http://www.mapquestapi.com/geocoding/v1/reverse?key=eNkZvp7Prg8KyqdpoEBz4V4SFPXcXing&location=30.333472,-81.470448')->json();
        return response()->json($json);
    }
}
