<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }
    public function postData(Request $request)
    {
        $contacts = new Contact();
        $contacts->name = $request['name'];
        $contacts->email = $request['email'];
        $contacts->phoneNumber = $request['phoneNumber'];
        $contacts->message = $request['message'];
        $contacts->save();

        return redirect('/contact/view');
    }
    public function viewData()
    {
        $contacts = Contact::all();
        $data = compact('contacts');
        return view('contact-view')->with($data);
    }
    public function delete($id)
    {
        $contact = Contact::find($id);
        if(!is_null($contact))
        {
            $contact->delete();
        }
        return redirect('contact/view');
    }
    public function editData($id)
    {
        $contact = Contact::find($id);
        return view('edit-form', compact('contact'));
    }
    public function update(Request $request, $id){
        $contact = Contact::find($id);
        $contact->name = $request['name'];
        $contact->email = $request['email'];
        $contact->phoneNumber = $request['phoneNumber'];
        $contact->message = $request['message'];
        $contact->update();
        return redirect('contact/view')->with('Success', 'Data Updated Successfully');

    }
}
