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

    public function proses(Request $request)
    {
        // Handle the form submission data
        // For example, you might save it to the database or process it

        // Redirect to the 'proses' page
        return view('proses'); // Make sure the 'proses.blade.php' view exists
    }

    public function submitOrder(Request $request)
{
    // Handle the order submission

    // Redirect to the proses page
    return redirect()->route('order.proses');
}

}

