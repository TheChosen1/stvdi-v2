<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;
use App\TransactionHead;
use App\TransactionType;
use Session;
use Designation;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allTransaction = Transaction::orderBy('id','DESC')->where('cid', Session::get('cid'))->get();
        $allTransactionHead = TransactionHead::orderBy('id','DESC')->where('cid', Session::get('cid'))->get();
        $allTransactionType = TransactionType::orderBy('id','ASC')->get();
        return view('finance/transaction/index')->withInput(['tab'=>'tab_1', 'btn'=>'btn_1'])->with('allTransaction', $allTransaction)->with('allTransactionHead', $allTransactionHead)->with('allTransactionType', $allTransactionType);
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
        //handle file upload
        if($request->hasFile('document')){
            //get filename with extension
            $filenameWithExt = $request->file('document')->getClientOriginalName();
            //get only filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //get only extension
            $extension = $filenameWithExt->getClientOriginalExtension();
            //make unique filename with extension
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //upload image
            $path = $request->file('document')->storeAs('public/media', $fileNameToStore);
        }else{
            $fileNameToStore = '';
        }

        $transaction = new Transaction;
        $transaction->trans_type_id = Designation::getTransHeadField($request->input('trans_head_id'),'trans_type_id');
        $transaction->trans_head_id = $request->input('trans_head_id');
        $transaction->cid = $request->input('cid');
        $transaction->invoice_no = $request->input('invoice_no');
        $transaction->date = $request->input('date');
        if (Designation::getTransTypeField($transaction->trans_type_id,'entry') == '0'){
            $transaction->debit = $request->input('amount');
        }else{
            $transaction->credit = $request->input('amount');
        }
        $transaction->documents = $fileNameToStore;
        $transaction->narration = $request->input('narration');
        $transaction->save();
        return redirect('finance/transaction')->withInput(['tab'=>'tab_1', 'btn'=>'btn_1'])->with('success', 'Transaction Added Successfully!');
    }

    public function storeHead(Request $request)
    {
        $transactionhead = new TransactionHead;
        $transactionhead->cid = $request->input('cid');
        $transactionhead->trans_type_id = $request->input('trans_type_id');
        $transactionhead->trans_head = $request->input('trans_head');
        $transactionhead->save();
        return redirect('finance/transaction')->withInput(['tab'=>'tab_2', 'btn'=>'btn_2'])->with('success', 'Transaction-Head Added Successfully!');
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
        $transaction = Transaction::find($request->input('id'));
        //handle file upload
        if($request->hasFile('document')){
            //get filename with extension
            $filenameWithExt = $request->file('document')->getClientOriginalName();
            //get only filename of new image record
            $filenamenew = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //get only filename of old image record
            $filenameold = pathinfo($student_info->image, PATHINFO_FILENAME);
            //get only extension
            $extension = $filenameWithExt->getClientOriginalExtension();
            //update filename with extension
            if (strpos($filenameold, '') !== false){
                $fileNameToStore = $this->clean($filenamenew).'_'.time().'.'.$extension;
            }else{
                $fileNameToStore = $filenameold.'.'.$extension;
            }
            //upload image
            $path = $request->file('document')->storeAs('public/media', $fileNameToStore);
        }else{
            $fileNameToStore = '';
        }

        $transaction->trans_type_id = Designation::getTransHeadField($request->input('trans_head_id'),'trans_type_id');
        $transaction->trans_head_id = $request->input('trans_head_id');
        $transaction->cid = $request->input('cid');
        $transaction->invoice_no = $request->input('invoice_no');
        $transaction->date = $request->input('date');
        if (Designation::getTransTypeField($transaction->trans_type_id,'entry') == '0'){
            $transaction->debit = $request->input('amount');
        }else{
            $transaction->credit = $request->input('amount');
        }
        $transaction->documents = $fileNameToStore;
        $transaction->narration = $request->input('narration');
        $transaction->save();
        return redirect('finance/transaction')->withInput(['tab'=>'tab_1', 'btn'=>'btn_1'])->with('success', 'Transaction Updated Successfully!');        
    }

    public function updateHead(Request $request)
    {
        $transactionhead = TransactionHead::find($request->input('id'));
        $transactionhead->cid = $request->input('cid');
        $transactionhead->trans_type_id = $request->input('trans_type_id');
        $transactionhead->trans_head = $request->input('trans_head');
        $transactionhead->save();
        return redirect('finance/transaction')->withInput(['tab'=>'tab_2', 'btn'=>'btn_2'])->with('success', 'Transaction-Head Updated Successfully!'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Transaction::where('id', $request->input('id'))->delete();
        return redirect('finance/transaction')->withInput(['tab'=>'tab_1', 'btn'=>'btn_1'])->with('success', 'Transaction Deleted Successfully!'); 
    }

    public function destroyHead(Request $request)
    {
        TransactionHead::where('id', $request->input('id'))->delete();
        return redirect('finance/transaction')->withInput(['tab'=>'tab_2', 'btn'=>'btn_2'])->with('success', 'Transaction-Head Deleted Successfully!');
    }
}
