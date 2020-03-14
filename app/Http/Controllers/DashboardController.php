<?php

namespace App\Http\Controllers;

use App\About;
use App\Team_member;
use App\School;
use App\School_over_view;
use DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /* Dashboard landing page */
    public function index(){
        $about_info = About::first();

        return view('dashboard.index', compact(['about_info']));
    }

/*--------
    About CRUD 
    --------*/

    // About R-ead

    public function about(){
        $about_info = About::first();

        return view('dashboard.about', compact(['about_info']));
    }


    // About U-pdate

    public function updateAbout(Request $request, $id)
    {
        $this->validate($request, [
            'image' => 'required',
            'description' => 'required',
        ]);

        if($request->hasFile('image')) {
            //Get filename with extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('public/img/aboutimages', $filenameWithExt);
        } else {
            $fileNameToStore = 'No image here.';
        }

        $about = About::find($id);
        $about->image = 'storage/img/aboutimages/'.$request->file('image')->getClientOriginalName();
        $about->description = $request->input('description');
        $about->save();

        return redirect('/_3dunn3ct_@dm!n_p@n3l_/about');
    }




    /*------------
    About CRUD end
    ------------*/



    /*--------
    Team CRUD 
    --------*/

    public function team() {
        $members = Team_member::get();

        return view('dashboard.team', compact(['members']));
    }

    public function addMember() {
        return view('dashboard.team.addMember');
    }

    public function saveMember(Request $request) {
        $member = new Team_member;

        if($request->hasFile('image')) {
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('public/members', $filenameWithExt);

            $member->image = 'storage/members/'.$request->file('image')->getClientOriginalName();
        } else {
            //
        }

        $member->name = $request->input('name');
        $member->position = $request->input('position');
        $member->email = $request->input('email');
        $member->description = $request->input('description');
        $member->save();

        return redirect('/_3dunn3ct_@dm!n_p@n3l_/team');
    }


    public function editMember($id) {
        $member = Team_member::find($id);

        return view('dashboard.team.editMember', compact(['member']));
    }

    public function updateMember(Request $request, $id){
        $member = Team_member::find($id);

        if($request->hasFile('image')) {
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('public/members', $filenameWithExt);

            $member->image = 'storage/members/'.$request->file('image')->getClientOriginalName();
        } else {
            //
        }

        $member->name = $request->input('name');
        $member->position = $request->input('position');
        $member->email = $request->input('email');
        $member->description = $request->input('description');
        $member->save();

        return redirect('/_3dunn3ct_@dm!n_p@n3l_/team');
    }

    public function deleteMember($id) {
        $member = Team_member::find($id);
        $member->delete();
        return redirect('/_3dunn3ct_@dm!n_p@n3l_/team');
    }

    /*-----------
    Team CRUD end
    -----------*/



    /*-----------
    Schools CRUD
    ------------*/
    public function schools(){
        $schools = School::all();

        return view('dashboard.schools', compact('schools'));
    }

    public function addSchool(){
        return view('dashboard.schools.addSchool');
    }

    public function saveSchool(Request $request) {
        $school = new School;

        if($request->hasFile('image')) {
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('public/badges', $filenameWithExt);

            $school->badge = 'storage/badges/'.$request->file('image')->getClientOriginalName();
        } else {
            //
        }
    
        $school->name = $request->input('name');
        $school->description = $request->input('description');
        $school->address = $request->input('address');
        $school->website = $request->input('website');
        $school->phone_number = $request->input('phone_number');
        $school->email = $request->input('email');
        $school->school_fees = $request->input('school_fees');
        $school->rating = $request->input('rating');
        $school->level = $request->input('level');
        $school->save();

        $school_id = $school->id;

        return view('dashboard.schools.addSchoolOverviews', compact(['school_id']));
        
    }

    public function saveSchoolOverviews(Request $request) {

        $school_overviews = new School_over_view;
        $school_overviews->school_id = $request->input('school_id');
        $school_overviews->first_language = $request->input('first_language');
        $school_overviews->second_language = $request->input('second_language');
        $school_overviews->pass_rate = $request->input('pass_rate');
        $school_overviews->level = $request->input('level');
        $school_overviews->emis_no = $request->input('emis_no');
        $school_overviews->save();

        return redirect('/_3dunn3ct_@dm!n_p@n3l_/schools');

    }

    public function editSchool($id) {
        $school = School::find($id);
        return view('dashboard.schools.editSchool', compact(['school']));
    }

    public function updateSchool($id, Request $request) {
        $school = School::find($id);

        if($request->hasFile('image')) {
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('public/badges', $filenameWithExt);

            $school->badge = 'storage/badges/'.$request->file('image')->getClientOriginalName();
        } else {
            //
        }
    
        $school->name = $request->input('name');
        $school->description = $request->input('description');
        $school->address = $request->input('address');
        $school->website = $request->input('website');
        $school->phone_number = $request->input('phone_number');
        $school->email = $request->input('email');
        $school->school_fees = $request->input('school_fees');
        $school->rating = $request->input('rating');
        $school->level = $request->input('level');
        $school->save();

        $school_id = $school->id;

        return view('dashboard.schools.addSchoolOverviews', compact(['school_id']));
    }


    /*--------------
    Schools CRUD end
    ---------------*/


}
