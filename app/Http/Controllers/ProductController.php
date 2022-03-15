<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Imports\ProductImport;
use Maatwebsite\Excel\Facades\Excel;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("product");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
    	try {
    		
    		Excel::import(new ProductImport, request()->file('product'));

    		return back()->withSuccess("Product Data imported successfully");

    	} catch (Exception $e) {

    		dd($e->message());
    	}

        
    }
}
