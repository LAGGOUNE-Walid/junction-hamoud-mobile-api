<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller {
    public function create(Request $request) : Report {
        return Report::create([
            "coordinates" => json_encode([$request->lat, $request->long]),
            "user_id" => (is_null($request->user_id)) ?  null : $request->user_id,
            "product_id" => $request->product_id,
            "location" => $request->location
        ]);
    }
}
