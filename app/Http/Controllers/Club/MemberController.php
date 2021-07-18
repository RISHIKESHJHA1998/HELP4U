<?php

namespace App\Http\Controllers\Club;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\Club;

class MemberController extends Controller
{
    //Listing members
    public function index()
    {
        $club = Club::where('user_id', Auth::user()->id)->with(['members'])->first();
        return view('club.members.index', [
            'club' => $club,
        ]);
    }

    //Approving members
    public function create(Member $member, $id)
    {
        //Fetching Model
        $member = Member::where('id', $id)->first();

        //Checking Values
        if($member->club_status == '0')
        {
            $status ='1';
        }
        else
        {
            $status ='0';
        }
        
        //Updating Model
        Member::where('id', $id)
            ->update([
                'club_status' => $status,
            ]);
            
        return back()->with('success', 'Member Approved Successfully');
    }
}
