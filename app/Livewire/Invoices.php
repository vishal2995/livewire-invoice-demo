<?php

namespace App\Livewire;

use App\Models\Invoice;
use Livewire\Component;

class Invoices extends Component
{
    public $invoices;
    public $draftInvoices;
    public $outstandingInvoices;
    public $pastDueInvoices;
    public $paidInvoices;

    protected $listeners = [
        'delete_invoice' => 'deleteInvoice',
        'mark_as_paid' => 'markAsPaidInvoice',
        'mark_as_draft' => 'markAsDraftInvoice'
    ];

    public function render()
    {
        return view('livewire.invoices');
    }

    public function mount(){
        $this->invoices = Invoice::with('users')->get();
        $this->draftInvoices = Invoice::with('users')->where('status', Invoice::DRAFT)->get();
        $this->outstandingInvoices = Invoice::with('users')->where('status', Invoice::OUTSTANDING)->get();
        $this->pastDueInvoices = Invoice::with('users')->where('status', Invoice::PAST_DUE)->get();
        $this->paidInvoices = Invoice::with('users')->where('status', Invoice::PAID)->get();
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
