<?php
// strict_type=1
namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class FormController extends Controller
{
    public function form1()
    {
        return view('forms.form1');
    }

    public function form1_data(Request $request)
    {
        // dd( $request->name );
        $name = $request->name;

        return "Welcome $name";
    }

    // public function FunctionName(Type $var = null)
    // {
    //     ??

    //     ( Condition ) ? true : false ;
    // }

    public function form2()
    {
        return view('forms.form2');
    }

    public function form2_data(Request $request)
    {
        // dd($request->all());
        $name = $request->name;
        $age = $request->age;

        return view('forms.form2_data', compact('name', 'age'));
    }

    public function form3()
    {
        return view('forms.form3');
    }

    public function form3_data(RegisterRequest $request)
    {
        // dd($request->all());
        // Peroson $aay[];

        // Validation Methods
        // 1. Request Validation
        // 2. Validator Class
        // 3. File Request

        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required',
        //     'age' => 'required',
        //     'password' => 'required|confirmed',
        //     'gender' => 'required',
        //     'education' => 'required',
        //     'bio' => 'required',
        // ]);

        // Validator::make($request->all(),
        //     [
        //         'name' => 'required|min:4',
        //         'email' => 'required',
        //         'age' => 'required',
        //         'password' => 'required|confirmed',
        //         'gender' => 'required',
        //         'education' => 'required',
        //         'bio' => 'required',
        //     ],
        //     [
        //         'name.required' => 'حقل الاسم مطلوب',
        //         'name.min' => 'يجب اكمال الاسم',
        //         'email.required' => 'حقل الايميل مطلوب جدا جدا',
        //     ]
        // )->validate();


        dd($request->all());
    }

    public function form4()
    {
        return view('forms.form4');
    }

    public function form5()
    {
        return view('forms.form5');
    }

    public function form5_data(Request $request)
    {
        // dd($request->all());

        // mkdir('uploads');
        // i354353256238543453253_zina.jpg
        // $imagename = rand() . time() . '_' . $request->file('image')->getClientOriginalName();

        $imgname = $request->file('image')->getClientOriginalName();

        if(file_exists(public_path('uploads/'.$imgname))) {
            return 'File alrady exists';
        }


        $request->file('image')->move( public_path('uploads'), $imgname );
    }

    public function contact()
    {
        return view('forms.contact');
    }

    public function contact_data(Request $request)
    {
        dd($request->all());

        Mail::to('test@gmail.com');
    }
}
