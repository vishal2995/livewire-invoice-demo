<?php

namespace App\Services;
use App\Models\Invoice;

class InvoiceService
{
    public $invoice;
    public $result;
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        $this->invoice = new Invoice;
    }

    public function getInvoiceByStatus($status) {
        if(in_array($status, $this->invoice::STATUS)){
            return $this->invoice::with('users')->where('status', $status)->get();
        } else {
            return $this->invoice::with('users')->get();
        }
    }

    public function invoiceDeleteById($id) {
        
    }

    public function invoiceDraftById() {
        
    }

    public function invoicePaidById() {
        
    }
}
