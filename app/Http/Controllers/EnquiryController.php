<?php

namespace App\Http\Controllers;

use App\DataTables\EnquiryDataTable;
use App\Models\Enquiry;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class EnquiryController extends Controller
{
    public function index(EnquiryDataTable $dataTable){
        return $dataTable->render('app.enquiry.index');
    }
    
    public function store(Request $request){
        try{
            $request->validate([
                'property' => 'required',
                'customer_name' => 'required',
                'customer_email' => 'nullable|email',
                'customer_phone' => 'required',
            ]);

            Enquiry::create([
                'property' => $request->property,
                'name' => $request->customer_name,
                'email' => $request->customer_email,
                'phone' => $request->customer_phone,
                'message' => $request->customer_message,
            ]);

            return redirect()->back()->with('success', 'Your enquiry send successfully. We will get back to you SOON!');
        }catch(\Exception $error){
            info($error->getMessage());
            return redirect()->back()->with('error', 'Could not save your enquiry. Thanks for contacting us.');
        }
    }
    
    public function destroy(int $id)
    {
        try {
            DB::beginTransaction();
            $layout = Enquiry::where('id', $id)->delete();
            DB::commit();

            return redirect()->route('enquiries.index')->with([
                    'alert' => true,
                    'alertColor' => 'green',
                    'message' => 'Enquiry deleted successfully'
                ]);
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->back()
                ->withInput()
                ->with([
                    'alert' => true,
                    'alertColor' => 'red',
                    'message' => $e->getMessage()
                ]);
        }
    }
}
