<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Income;
use App\IncomeHead;
use Session;

class IncomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allIncome = Income::orderBy('id','DESC')->where('cid', Session::get('cid'))->get();
        $allIncomeHead = IncomeHead::orderBy('id','DESC')->where('cid', Session::get('cid'))->get();
        return view('finance/income/index')->withInput(['tab'=>'tab_1', 'btn'=>'btn_1'])->with('allIncome', $allIncome)->with('allIncomeHead', $allIncomeHead);
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
        $income = new Income;
        $income->inc_head_id = $request->input('inc_head_id');
        $income->name = $request->input('name');
        $income->cid = $request->input('cid');
        $income->invoice_no = $request->input('invoice_no');
        $income->date = $request->input('date');
        $income->amount = $request->input('amount');
        $income->documents = $request->input('document');
        $income->note = $request->input('note');
        $income->save();
        return redirect('finance/income')->withInput(['tab'=>'tab_1', 'btn'=>'btn_1'])->with('success', 'Income Added Successfully!');
    }

    public function storeHead(Request $request)
    {
        $incomehead = new IncomeHead;
        $incomehead->cid = $request->input('cid');
        $incomehead->inc_head = $request->input('inc_head');
        $incomehead->note = $request->input('note');
        $incomehead->save();
        return redirect('finance/income')->withInput(['tab'=>'tab_2'])->with('success', 'Income-Head Added Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $income = Income::find($request->input('id'));
        $income->inc_head_id = $request->input('inc_head_id');
        $income->name = $request->input('name');
        $income->cid = $request->input('cid');
        $income->invoice_no = $request->input('invoice_no');
        $income->date = $request->input('date');
        $income->amount = $request->input('amount');
        $income->documents = $request->input('document');
        $income->note = $request->input('note');
        $income->save();
        return redirect('finance/income')->withInput(['tab'=>'tab_1', 'btn'=>'btn_1'])->with('success', 'Income Updated Successfully!');        
    }

    public function updateHead(Request $request)
    {
        $incomehead = IncomeHead::find($request->input('id'));
        $incomehead->inc_head = $request->input('inc_head');
        $incomehead->note = $request->input('note');
        $incomehead->save();
        return redirect('finance/income')->withInput(['tab'=>'tab_2', 'btn'=>'btn_2'])->with('success', 'Income-Head Updated Successfully!'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Income::where('id', $request->input('id'))->delete();
        return redirect('finance/income')->withInput(['tab'=>'tab_1', 'btn'=>'btn_1'])->with('success', 'Income Deleted Successfully!'); 
    }

    public function destroyHead(Request $request)
    {
        IncomeHead::where('id', $request->input('id'))->delete();
        return redirect('finance/income')->withInput(['tab'=>'tab_2', 'btn'=>'btn_2'])->with('success', 'Income-Head Deleted Successfully!');
    }
}
