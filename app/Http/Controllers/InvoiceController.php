<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    function invoice(Request $request, $invoiceId='1') {
        if($request->has('download')){
            $type = $request->input('download');
            return response("Downloading {$type} with ID:{$invoiceId}");
        }
        return response("Invoiceing file with ID:{$invoiceId}");
    }
}
