<?php

namespace App\Livewire;

use App\Services\InvoiceService;
use Livewire\Component;
use App\Models\Invoice;

class Invoices extends Component
{
    public $invoices;
    public $status = 'all_invoice';

    protected $listeners = [
        'delete_invoice' => 'deleteInvoice',
        'mark_as_paid' => 'markAsPaidInvoice',
        'mark_as_draft' => 'markAsDraftInvoice',
        'get_status'    => 'getStatus',
    ];

    public function render()
    {
        return view('livewire.invoices');
    }

    public function mount(){
        $invoiceService = new InvoiceService();
        $this->invoices = $invoiceService->getInvoiceByStatus($this->status);
    }

    public function getStatus($status) {
        $this->status = $status;
        $this->mount();
    }

    public function deleteInvoice($id)
    {
        $invoice = Invoice::find($id);
        if ($invoice) {
            $invoice->delete();
            session()->flash('message', 'Invoice deleted successfully!');
        }
        $this->mount();
    }

    public function markAsPaidInvoice($id) {
        $invoice = Invoice::find($id);
        if ($invoice) {
            $invoice->status = Invoice::PAID;
            $invoice->save();
        }
        $this->mount();
    }

    public function markAsDraftInvoice($id) {
        $invoice = Invoice::find($id);
        if ($invoice) {
            $invoice->status = Invoice::DRAFT;
            $invoice->save();
        }
        $this->mount();
    }
}
