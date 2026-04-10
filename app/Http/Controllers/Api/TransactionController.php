<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index(Request $request)
    {
        return $request->user()->transactions()
            ->with('category')
            ->orderBy('date', 'desc')
            ->get();
    }

    public function store(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
            'date' => 'required|date',
            'type' => 'required|in:expense,income',
            'description' => 'nullable|string',
        ]);

        $transaction = $request->user()->transactions()->create($request->all());

        return response()->json($transaction, 201);
    }

    public function destroy(Request $request, Transaction $transaction)
    {
        if ($transaction->user_id !== $request->user()->id) {
            return response()->json(['message' => 'Unauthorized'], 403);
        }

        $transaction->delete();

        return response()->json(['message' => 'Transaction deleted']);
    }
}
