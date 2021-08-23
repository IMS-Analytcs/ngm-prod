<?php

namespace App\Http\Controllers;

use App\Models\PartNumberQuote;
use App\Models\Quote;
use App\Models\quoteExpenses;

class OrderController extends Controller
{
    public function index()
    {
        $Quotes = Quote::select('*')->where('status', 'aprovado')->get();

        //Busca PartNumbers e Despesas da Cotação

        $ListQuotes = [];
        foreach ($Quotes as $quote) {

            $PartNumberQuote = PartNumberQuote::select('*')->where('quote_id', $quote->id)->get();
            $quoteExpenses = quoteExpenses::select('*')->where('quote_id', $quote->id)->get();

            // dd($PartNumberQuote);

            $TotalPartNumbers = 0;
            foreach ($PartNumberQuote as $PartNumber) {
                $TotalPartNumbers += $PartNumber->unity_value * $PartNumber->quantity;

            }

            $TotalExpenses = 0;
            foreach ($quoteExpenses as $expense) {

                $TotalExpenses += intval($expense->unity_value) * intval($expense->quantity);
            }

            $value_quote = $TotalPartNumbers + $TotalExpenses;
            $newItem = [
                'id' => $quote->id,
                'client_name' => $quote->client_name,
                'account_manager' => $quote->account_manager,
                'state' => $quote->state,
                'city' => $quote->city,
                'status' => $quote->status,
                'value_quote' => $value_quote,
                'final_value' => $quote->final_value,
                'final_date' => $quote->final_date,
                'status_order' => $quote->status_order,
                'created_at' => $quote->created_at,
            ];

            array_push($ListQuotes, $newItem);

        }

        // dd($ListQuotes);
        return view('Orders.order', compact('ListQuotes'));
    }

    public function orderQuoteView($id){

        $editquotes = Quote::find($id);
        return view('Quotes.orderQuote', compact('editquotes'));
    }
}
