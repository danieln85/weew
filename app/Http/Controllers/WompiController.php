<?php

// app/Http/Controllers/WompiController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\WompiService;

class WompiController extends Controller
{
    protected $wompiService;

    public function __construct(WompiService $wompiService)
    {
        $this->wompiService = $wompiService;
    }

    public function processPayment(Request $request)
    {
        $amount = 10000; // El monto de la transacción
        $currency = 'COP'; // La moneda de la transacción
        $customerEmail = auth()->user()->email;
        $reference = uniqid(); // Un identificador único para la transacción

        $transaction = $this->wompiService->createTransaction($amount, $currency, $customerEmail, $reference);

        if ($transaction['status'] === 'PENDING') {
            return redirect($transaction['data']['payment_link']);
        }

        return redirect()->back()->with('error', 'Hubo un problema al procesar el pago');
    }

    public function handleCallback(Request $request)
    {
        // Lógica para manejar el callback de Wompi
        // Actualiza el estado de la transacción en tu base de datos según sea necesario

        return redirect()->route('checkout')->with('success', 'Pago realizado correctamente');
    }

    public function handleEvents(Request $request)
    {
        // Lógica para manejar los eventos de Wompi
        // Actualiza el estado de la transacción en tu base de datos según sea necesario
    }
}
