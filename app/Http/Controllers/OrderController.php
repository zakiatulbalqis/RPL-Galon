<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function submit(Request $request)
    {
        // Validate and process form data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:500',
            'phone' => 'required|string|max:15',
            'mineral_qty' => 'nullable|integer|min:0',
            'ro_qty' => 'nullable|integer|min:0',
            'hexa_qty' => 'nullable|integer|min:0',
        ]);

        // Process order logic here (e.g., save to database)

        // Redirect to confirmation page
        return redirect()->route('order.confirmation');
    }

    public function konfirmasi()
    {
        return view('konfirmasi');
    }
}
