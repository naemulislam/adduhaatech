<?php

namespace App\Http\Controllers\Common;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $data['messages'] = Contact::latest()->get();
        return view("backend.contact.inbox",$data);
    }

    public function show(Contact $contact)
    {
        $contact->update([
            'status' => true
        ]);
        return view("backend.contact.dtls_contact",compact('contact'));
    }
    public function destroy(Contact $contact)
    {
        $contact->delete();
        return back()->with('success', 'Message is deleted successfully!');
    }

    public function contactStore(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:200',
            'email' => 'required|regex:/(.+)@(.+)\.(.+)/i',
            'subject' => 'required|string|max:200',
            'message' => 'required|string|max:400'
        ]);

        $data = new Contact();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->subject = $request->subject;
        $data->message = $request->message;
        $data->save();
        return back()->with('success', 'Message Send Successfully');
    }
}
