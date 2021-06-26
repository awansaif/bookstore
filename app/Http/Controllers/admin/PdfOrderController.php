<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\PdfOrder;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PdfOrderController extends Controller
{
    public function index(): View
    {
        return view('admin.pages.pdforder.index', [
            'data'  => PdfOrder::orderBy('id', 'DESC')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PdfOrder  $pdfOrder
     * @return \Illuminate\Http\Response
     */
    public function show(PdfOrder $pdfOrder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PdfOrder  $pdfOrder
     * @return \Illuminate\Http\Response
     */
    public function edit(PdfOrder $pdfOrder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PdfOrder  $pdfOrder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PdfOrder $pdfOrder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PdfOrder  $pdfOrder
     * @return \Illuminate\Http\Response
     */
    public function destroy(PdfOrder $pdfOrder)
    {
        //
    }
}
