<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CodeConverterController extends Controller
{
    public function convert(Request $request)
    {
        $cCode = $request->input('code');

        // Simple example conversion logic
        $cppCode = str_replace("printf", "std::cout <<", $cCode);
        $cppCode = str_replace("#include <stdio.h>", "#include <iostream>", $cppCode);
        $cppCode = str_replace(";", " << std::endl;", $cppCode);

        return response()->json(['convertedCode' => $cppCode]);
    }
}
