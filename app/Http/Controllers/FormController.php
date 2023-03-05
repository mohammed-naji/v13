<?php
// strict_type=1
namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
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
}
