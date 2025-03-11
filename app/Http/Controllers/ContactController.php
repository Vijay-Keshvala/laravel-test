<?php

namespace App\Http\Controllers;

use App\DataTables\ContactDataTable;
use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ContactController extends Controller
{
    public function index(ContactDataTable $dataTable){
        
        return $dataTable->render('app.contacts.index');
    }
    
    public function store(Request $request){
        try{
            $request->validate([
                'name' => 'required',
                'email' => 'nullable|email',
                'phone' => 'required',
            ]);

            Contact::create($request->only([
                'name','email','phone','message',
            ]));

            return redirect()->back()->with('success', 'Your Message send successfully. We will get back to you SOON!');
        }catch(\Exception $error){
            return redirect()->back()->with('error', 'Could not save your message. Thanks for contacting us.');
        }
    }
    
    public function destroy(int $id)
    {
        try {
            DB::beginTransaction();
            $layout = Contact::where('id', $id)->delete();
            DB::commit();

            return redirect()->route('contacts.index')->with([
                    'alert' => true,
                    'alertColor' => 'green',
                    'message' => 'Contact deleted successfully'
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
