<?php

namespace App\Http\Controllers;
use App\Company;
use Illuminate\Http\Request;

class CompaniesController extends Controller
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
        $data = Company::latest()->paginate(5);
        return view('companies.index', compact('data'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('companies.create');
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
            'name'    =>  'required',
            'email'    =>  'required',
            'website'  =>  'required',
            'image'    =>  'required|image|max:2048'
        ]);

        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);
        $form_data = array(
            'name'       =>   $request->name,
            'email'      =>   $request->email,
            'website'    =>   $request->website,
            'image'      =>   $new_name
        );

        Company::create($form_data);

        return redirect('companies')->with('success', 'Data Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Company::findOrFail($id);
        return view('companies.view', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Company::findOrFail($id);
        return view('companies.edit', compact('data'));
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
        $image_name = $request->hidden_image;
        $image = $request->file('image');
        if($image != '')
        {
            $request->validate([
                'name'    =>  'required',
                'email'    =>  'required',
                'website'  =>  'required',
                'image'    =>  'image|max:2048',
                
            ]);
            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $image_name);
        }
        else
        {
            $request->validate([
                'name'    =>  'required',
                'email'     =>  'required'
            ]);
        }

        $form_data = array(
            'name'    =>  $request->name,
            'email'     =>  $request->email,
            'website'     =>  $request->website,
            'image'         =>  $image_name,
         
        );

        Company::whereId($id)->update($form_data);
        return redirect('companies')->with('success', 'Data is successfully updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Company::findOrFail($id);
        $data->delete();
        return redirect('companies')->with('success', 'Data is successfully deleted');
    }
}
