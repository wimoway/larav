<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Requestt1;
use App\Models\requests;

class RequestR extends Controller
{
    public function submit(Requestt1 $request)
    {
        $requests = new requests();
        $requests->name = $request->input('name');
        $requests->number = $request->input('number');
        $requests->message = $request->input('message');

        $requests->save();

        return redirect()->route('welcome');
    }
}
