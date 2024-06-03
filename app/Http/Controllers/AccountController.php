<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Svg\Tag\Rect;

class AccountController extends Controller
{
    public function index()
    {
        $contractNumber =  Account::generateContractNumber();
        $accounts = Account::with('payment')->get();
        return view('index', compact('accounts', 'contractNumber'));
    }

    public function store(Request $request)
    {

        Account::create([
            'contract_no' => $request->input('contract_no'),
            'name' => $request->input('name'),
            'position' => $request->input('position'),
            'company' => $request->input('company'),
            'address' => $request->input('address'),
            'service_details' => $request->input('service_details'),
            'subject' => $request->input('subject'),
            'schedule_of_broadcast' => $request->input('scheduled_of_broadcast'),
            'start_of_broadcast' => $request->input('start_of_broadcast'),
            'end_of_broadcast' => $request->input('end_of_broadcast'),
            'billing_rate' => $request->input('billing_rate')
        ]);

        return Redirect::route('home')->with('success', 'New Account successfully added');
    }

    public function delete(Request $request)
    {
        $id = $request->input('id');

        // Find the record by its ID
        $record = Account::find($id);

        if ($record) {
            // Delete the record if found
            $record->delete();
            return Redirect::route('home')->with('success', 'New Account successfully added');
        } else {
            return Redirect::route('home')->with('success', 'New Account successfully added');
        }
    }

    public function edit(Request $request)
    {
        // dd($request->id);
        $found = Account::find($request->id);
        // dd($found);
        return view('edit', compact('found'));
    }

    public function update(Request $request)
    {
        // dd($request);
        $id = $request->input('id');
        // Find the record by its ID
        $record = Account::find($id);
        if ($record) {
            // Update the record with the request data
            $record->update([
                'contract_no' => $request->input('contract_no'),
                'name' => $request->input('name'),
                'position' => $request->input('position'),
                'company' => $request->input('company'),
                'address' => $request->input('address'),
                'service_details' => $request->input('service_details'),
                'subject' => $request->input('subject'),
                'schedule_of_broadcast' => $request->input('scheduled_of_broadcast'),
                'start_of_broadcast' => $request->input('start_of_broadcast'),
                'end_of_broadcast' => $request->input('end_of_broadcast'),
                'billing_rate' => $request->input('billing_rate')
            ]);

            return Redirect::route('home')->with('success', 'New Account successfully added');
        } else {
            return Redirect::route('home')->with('success', 'New Account successfully added');
        }
    }

    public function payment(Request $request)
    {
        // dd($request);
        Payment::create(['account_id' => $request->input('id'), 'date' => $request->input('date'), 'ammount' => $request->input('ammount'), 'method' => $request->input('payment_method')]);
        return Redirect::route('home')->with('success', 'New Account successfully added');
    }
}
