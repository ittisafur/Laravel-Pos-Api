<?php

namespace App\Http\Controllers;

use App\Model\Sales;
use Illuminate\Http\Request;
use App\Transformers\SalesTransformer;

class SalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return fractal()->collection(Sales::all())->transformWith(new SalesTransformer)->toArray();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sales = new Sales;
        $sales->product_id = $request->product_id;
        $sales->customer_id = $request->customer_id;
        $sales->discount = $request->discount;

        $sales->save();

        return fractal()->item($sales)->transformWith(new SalesTransformer)->toArray();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Sales  $sales
     * @return \Illuminate\Http\Response
     */
    public function show(Sales $sales)
    {
        return fractal()->item($sales)->transformWith(new SalesTransformer)->toArray();
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Sales  $sales
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sales $sales)
    {
        $sales->update($request->all());
        return fractal()->item($sales)->transformWith(new SalesTransformer)->toArray();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Sales  $sales
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sales $sales)
    {
        $sales->delete();
    }
}
