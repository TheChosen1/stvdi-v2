<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Expense;
use App\ExpenseHead;
use Session;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allExpense = Expense::orderBy('id','DESC')->where('cid', Session::get('cid'))->get();
        $allExpenseHead = ExpenseHead::orderBy('id','DESC')->where('cid', Session::get('cid'))->get();
        return view('finance/expense/index')->withInput(['tab'=>'tab_1', 'btn'=>'btn_1'])->with('allExpense', $allExpense)->with('allExpenseHead', $allExpenseHead);
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
        $Expense = new Expense;
        $Expense->exp_head_id = $request->input('exp_head_id');
        $Expense->name = $request->input('name');
        $Expense->cid = $request->input('cid');
        $Expense->invoice_no = $request->input('invoice_no');
        $Expense->date = $request->input('date');
        $Expense->amount = $request->input('amount');
        $Expense->documents = $request->input('document');
        $Expense->note = $request->input('note');
        $Expense->save();
        return redirect('finance/expense')->withInput(['tab'=>'tab_1', 'btn'=>'btn_1'])->with('success', 'Expense Added Successfully!');
    }

    public function storeHead(Request $request)
    {
        $Expensehead = new ExpenseHead;
        $Expensehead->cid = $request->input('cid');
        $Expensehead->exp_head = $request->input('exp_head');
        $Expensehead->note = $request->input('note');
        $Expensehead->save();
        return redirect('finance/expense')->withInput(['tab'=>'tab_2'])->with('success', 'Expense-Head Added Successfully!');
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
        $Expense = Expense::find($request->input('id'));
        $Expense->exp_head_id = $request->input('exp_head_id');
        $Expense->name = $request->input('name');
        $Expense->cid = $request->input('cid');
        $Expense->invoice_no = $request->input('invoice_no');
        $Expense->date = $request->input('date');
        $Expense->amount = $request->input('amount');
        $Expense->documents = $request->input('document');
        $Expense->note = $request->input('note');
        $Expense->save();
        return redirect('finance/expense')->withInput(['tab'=>'tab_1', 'btn'=>'btn_1'])->with('success', 'Expense Updated Successfully!');        
    }

    public function updateHead(Request $request)
    {
        $Expensehead = ExpenseHead::find($request->input('id'));
        $Expensehead->exp_head = $request->input('exp_head');
        $Expensehead->note = $request->input('note');
        $Expensehead->save();
        return redirect('finance/expense')->withInput(['tab'=>'tab_2', 'btn'=>'btn_2'])->with('success', 'Expense-Head Updated Successfully!'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Expense::where('id', $request->input('id'))->delete();
        return redirect('finance/expense')->withInput(['tab'=>'tab_1', 'btn'=>'btn_1'])->with('success', 'Expense Deleted Successfully!'); 
    }

    public function destroyHead(Request $request)
    {
        ExpenseHead::where('id', $request->input('id'))->delete();
        return redirect('finance/expense')->withInput(['tab'=>'tab_2', 'btn'=>'btn_2'])->with('success', 'Expense-Head Deleted Successfully!');
    }
}
