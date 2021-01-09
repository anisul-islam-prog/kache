<?php

namespace App\Http\Controllers;

use App\Models\FeatureReq;
use Illuminate\Http\Request;

class FeatureReqController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'requested_by' => 'required',
            'details' => 'required',
        ]);

        $feature_req = FeatureReq::create($request->all());

        return back()->with('success', 'Feature Requested successfully!');

        // return redirect()->route('home')
        //     ->with('success', 'Product created successfully.');
    }
}
