<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subscriber;
use App\Models\Donation;
use App\Models\Contact;

class RequestController extends Controller
{
    public function allSubscribers()
    {
        $subscribers = Subscriber::latest()->paginate(20);
        return view('admin.requests.subscribers', [
            'subscribers' => $subscribers,
        ]);
    }

    public function deleteSubscriber($id)
    {
        $subscriber = Subscriber::findOrFail($id);
        $subscriber->delete();
        return back()->with('success', 'Subscriber deleted successfully');
    }

    public function allDonations()
    {
        $donations = Donation::latest()->paginate(20);
        return view('admin.requests.donations', [
            'donations' => $donations,
        ]);
    }

    public function changeDonationStatus($id)
    {
        //Fetching Model
        $donation = Donation::where('id', $id)->first();

        //Checking Values
        if($donation->status == '0')
        {
            $status ='1';
        }
        else
        {
            $status ='0';
        }
        
        //Updating Model
        Donation::where('id', $id)
            ->update([
                'status' => $status,
            ]);
            
        return back()->with('success', 'Donator contacted successfully');
    }

    public function deleteDonation($id)
    {
        $donation = Donation::findOrFail($id);
        $donation->delete();
        return back()->with('success', 'Donation deleted successfully');
    }

    public function allContacts()
    {
        $contacts = Contact::latest()->paginate(20);
        return view('admin.requests.contacts', [
            'contacts' => $contacts,
        ]);
    }

    public function changeContactStatus($id)
    {
        //Fetching Model
        $contact = Contact::where('id', $id)->first();

        //Checking Values
        if($contact->status == '0')
        {
            $status ='1';
        }
        else
        {
            $status ='0';
        }
        
        //Updating Model
        Contact::where('id', $id)
            ->update([
                'status' => $status,
            ]);
            
        return back()->with('success', 'Contacted successfully');
    }

    public function deleteContact($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();
        return back()->with('success', 'Contact deleted successfully');
    }
}
