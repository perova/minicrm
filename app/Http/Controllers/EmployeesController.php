<?php

namespace App\Http\Controllers;
use App\Employee;
use App\Company;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
{
    $this->middleware('auth');}

    public function index()
    {
        $data = Employee::latest()->paginate(10);
        $companies = Company::all();
        return view('employees.index', compact('data', 'companies'))
                ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {		
    	$companies = Company::pluck('name', 'id');
        return view('employees.create',compact('companies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name'    =>  'required',
            'last_name'     =>  'required',
            'company_id'	=>	'required'
            
        ]);

       
        $form_data = array(
            'first_name'     =>   $request->first_name,
            'last_name'      =>   $request->last_name,
            'email'			 =>   $request->email,
            'phone'			 =>   $request->phone,
            'company_id'   => $request->company_id
        );

       Employee::create($form_data);


        return redirect('employees')->with('success', 'Data Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Employee::findOrFail($id);
        return view('employees.view', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Employee::findOrFail($id);
        $companies = Company::all();
        return view('employees.edit', compact('data','companies'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $request->validate([
                'first_name'    =>  'required',
                'last_name'     =>  'required',
                'email'     =>  'required',
                'phone'     =>  'required',
                'company_id'     =>  'required',

                
            ]);

      $form_data = array(
            'first_name'    =>  $request->first_name,
            'last_name'     =>  $request->last_name,
            'email'         =>  $request->email,
            'phone'         =>  $request->phone,
            'company_id'    =>  $request->company_id,
        );

     

       Employee::whereId($id)->update($form_data);
        return redirect('employees')->with('success', 'Data is successfully updated');


    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Employee::findOrFail($id);
        $data->delete();
        return redirect('employees')->with('success', 'Data is successfully deleted');
    }
}


