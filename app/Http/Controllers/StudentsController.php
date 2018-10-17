<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Students;
use App\User;
use Session;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allStudents = Students::orderBy('id','DESC')->where('cid', Session::get('cid'))->get();
        return view('students/details/index')->with('allStudents', $allStudents);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student = new Students;   

        //validate file upload
        $this->validate($request, [
            'image' => 'image|nullable|max:1999'
        ]);

        //handle file upload
        if($request->hasFile('image')){
            //get filename with extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            //get only filename
            // $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //get only extension
            $extension = $request->file('image')->getClientOriginalExtension();
            //make unique filename with extension
            $fileNameToStore = $this-clean($request->input('admission_no')).'_'.time().'.'.$extension;
            //upload image
            $path = $request->file('image')->storeAs('public/media', $fileNameToStore);
        }else{
            if ($request->input('gender') == 'Male'){
                $fileNameToStore = 'no-profile-photo-master.jpg';
            }else{
                $fileNameToStore = 'no-profile-photo-female.jpg';
            }
        }
        
        if (empty($request->input('sibling_id'))){
            $parent_id = Students::where('cid', $request->input('cid'))->max('parent_id')+1;
            User::create([
                'user_id' => $parent_id,
                'user_code' => $request->input('user_code'),
                'name' => $request->input('guardian_name'),
                'role_id' => 6,
                'email' => $request->input('guardian_email'),
                'password' => bcrypt('password')
            ]);
        }else{
            $sibling_info = Students::where('id', $request->input('sibling_id'))->first();
            $parent_id = $sibling_info->parent_id;
        }

        $student->cid = $request->input('cid');
        $student->class_id = $request->input('class');
        $student->section_id = $request->input('section');
        $student->parent_id = $parent_id;
        $student->sibling_id = $request->input('sibling_id');
        $student->admission_no = $request->input('admission_no');
        $student->lastname = $request->input('lastname');
        $student->firstname = $request->input('firstname');
        $student->middlename = $request->input('middlename');
        $student->gender = $request->input('gender');
        $student->mobileno = $request->input('mobileno');
        $student->dob = $request->input('dob');
        $student->email = $request->input('email');
        $student->image = $fileNameToStore;
        $student->admission_date = $request->input('admission_date');
        $student->blood_group = $request->input('blood_group');
        $student->father_name = $request->input('father_name');
        $student->father_occupation = $request->input('father_occupation');
        $student->father_phone = $request->input('father_phone');
        $student->mother_name = $request->input('mother_name');
        $student->mother_occupation = $request->input('mother_occupation');
        $student->mother_phone = $request->input('mother_phone');
        $student->guardian_name = $request->input('guardian_name');
        $student->is_guardian = $request->input('is_guardian');
        $student->guardian_email = $request->input('guardian_email');
        $student->guardian_phone = $request->input('guardian_phone');
        $student->guardian_occupation = $request->input('guardian_occupation');
        $student->guardian_relation = $request->input('guardian_relation');
        $student->guardian_address = $request->input('guardian_address');
        $student->save();

        //update sibling_id field of sibling student record
        if (isset($sibling_info) && $sibling_info->sibling_id == null){
            Students::where('cid', $request->input('cid'))->where('id', $sibling_info->id)->update([
                'sibling_id' => $student->id
            ]);
        }

        User::create([
            'user_id' => $student->id,
            'user_code' => $request->input('user_code'),
            'name' => $request->input('lastname').', '.$request->input('firstname').' '.$request->input('middlename'),
            'role_id' => 5,
            'email' => $request->input('email'),
            'password' => bcrypt('password')
        ]);

        return redirect('students/details')->with('success', 'Student Added Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $singleStudent = Students::find($id);
        return view('students/details/show')->with('singleStudent', $singleStudent);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        //get stored student details
        $student_info = Students::find($request->input('id'));

        //validate file upload
        $this->validate($request, [
            'image' => 'image|nullable|max:1999'
        ]);

        //handle file upload
        if($request->hasFile('image')){
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            //get only filename of new image record
            $filenamenew = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //get only filename of old image record
            $filenameold = pathinfo($student_info->image, PATHINFO_FILENAME);
            //get only extension of new file
            $extension = $request->file('image')->getClientOriginalExtension();
            //update filename with extension
            if (strpos($filenameold, 'no-profile-photo') !== false){
                $fileNameToStore = $this->clean($filenamenew).'_'.time().'.'.$extension;
            }else{
                $fileNameToStore = $filenameold.'.'.$extension;
            }
            //upload image
            $path = $request->file('image')->storeAs('public/media', $fileNameToStore);
        }  

        if (!empty($request->input('sibling_id'))){
            $new_sibling_info = Students::where('cid', $request->input('cid'))->where('id', $request->input('sibling_id'))->first();
            $new_parent_info = Students::where('cid', $request->input('cid'))->where('parent_id', $new_sibling_info->parent_id)->first();            
        }


        if (empty($request->input('sibling_id'))){
            //remove student from any ties to old parent information
            if (!empty($student_info->sibling_id)){
                $parent_id = Students::where('cid', $request->input('cid'))->max('parent_id')+1;
                $parent_info = Students::where('cid', $request->input('cid'))->where('parent_id', $student_info->parent_id)->get();
                //since student is been removed from old parent record, check if old sibling ties is less than 1, if true; then delete parent login access
                if (count($parent_info) <= 1){
                    User::where('user_code', $request->input('user_code'))->where('user_id', $student_info->parent_id)->where('role_id', 6)->delete();
                }
                //create new parent login access
                User::create([
                    'user_id' => $parent_id,
                    'user_code' => $request->input('user_code'),
                    'name' => $request->input('guardian_name'),
                    'role_id' => 6,
                    'email' => $request->input('guardian_email'),
                    'password' => bcrypt('password')
                ]);                                     
            }else{
                $parent_id = $student_info->parent_id;
            }
        }elseif ($new_parent_info->parent_id != $student_info->parent_id){
            $old_parent_info = Students::where('cid', $request->input('cid'))->where('parent_id', $student_info->parent_id)->get();
            if (count($old_parent_info) <= 1){
                User::where('user_code', $request->input('user_code'))->where('user_id', $student_info->parent_id)->where('role_id', 6)->delete();
            }
            Students::where('cid', $request->input('cid'))->where('id', $student_info->sibling_id)->update([
                'sibling_id' => ''
            ]); 
            $parent_id = $new_parent_info->parent_id;       
        }else{
            //update sibling id of both students
            Students::where('cid', $request->input('cid'))->where('id', $student_info->sibling_id)->update([
                'sibling_id' => $request->input('id')
            ]);            
            $sibling_info = Students::where('id', $request->input('sibling_id'))->first();
            $parent_id = $sibling_info->parent_id;
            //update parent login access
            User::where('user_id', $parent_id)->where('user_code', $request->input('user_code'))->where('role_id', 6)->update([
                'user_id' => $parent_id,
                'name' => $request->input('guardian_name'),
                'email' => $request->input('guardian_email')
            ]);
        }

        $student_info->class_id = $request->input('class');
        $student_info->section_id = $request->input('section');
        $student_info->parent_id = $parent_id;
        $student_info->admission_no = $request->input('admission_no');
        $student_info->lastname = $request->input('lastname');
        $student_info->firstname = $request->input('firstname');
        $student_info->middlename = $request->input('middlename');
        $student_info->gender = $request->input('gender');
        $student_info->mobileno = $request->input('mobileno');
        $student_info->dob = $request->input('dob');
        $student_info->email = $request->input('email');
        if($request->hasFile('image')){
            $student_info->image = $fileNameToStore;
        }
        $student_info->admission_date = $request->input('admission_date');
        $student_info->blood_group = $request->input('blood_group');
        $student_info->sibling_id = $request->input('sibling_id');
        $student_info->father_name = $request->input('father_name');
        $student_info->father_occupation = $request->input('father_occupation');
        $student_info->father_phone = $request->input('father_phone');
        $student_info->mother_name = $request->input('mother_name');
        $student_info->mother_occupation = $request->input('mother_occupation');
        $student_info->mother_phone = $request->input('mother_phone');
        $student_info->guardian_name = $request->input('guardian_name');
        $student_info->is_guardian = $request->input('is_guardian');
        $student_info->guardian_email = $request->input('guardian_email');
        $student_info->guardian_phone = $request->input('guardian_phone');
        $student_info->guardian_occupation = $request->input('guardian_occupation');
        $student_info->guardian_relation = $request->input('guardian_relation');
        $student_info->guardian_address = $request->input('guardian_address');
        $student_info->save();

        User::where('user_id', $request->input('id'))->where('user_code', $request->input('user_code'))->where('role_id', 5)->update([
            'name' => $request->input('lastname').', '.$request->input('firstname').' '.$request->input('middlename'),
            'email' => $request->input('email')
        ]);

        return redirect('students/details')->with('success', 'Student Updated Successfully!');    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $siblings = Students::where('parent_id', $request->input('parent_id'))->where('cid', $request->input('cid'))->get();
        if (count($siblings) > 1){
            Students::where('id', $request->input('id'))->delete();
            User::where('user_id', $request->input('id'))->where('user_code', $request->input('user_code'))->where('role_id', 5)->delete();
        }else{
            Students::where('id', $request->input('id'))->delete();
            User::where('user_id', $request->input('id'))->where('user_code', $request->input('user_code'))->where('role_id', 5)->delete();
            User::where('user_id', $request->input('parent_id'))->where('user_code', $request->input('user_code'))->where('role_id', 6)->delete();            
        }

        return redirect('students/details')->with('success', 'Student Deleted Successfully!');
    }

    public function clean($string) 
    {
       $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.

       return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
    }
}
