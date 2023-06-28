<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MainPageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companies = Company::paginate(10);
        return view('mainpage.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mainpage.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name'=>'required|max:255',
            'email'=>'required|email:dns',
            'logo' => 'required|image|mimes:jpg,bmp,png|dimensions:min_width=100,min_height=100',
            'website'=>'required'
        ]);

        if ($request->hasFile('logo')) {
            $logo = $request->file('logo');
            $fileName = time() . '_' . $logo->getClientOriginalName();
            $logo->storeAs('public', $fileName);
            $validatedData['logo'] = $fileName;
        }

        Company::create($validatedData);

        return redirect('/mainpage')->with('success','New company has added');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $company = Company::find($id);
        return view('mainpage.edit',compact('company'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'name'=>'required|max:255',
            'email'=>'required|email:dns',
            'logo' => 'nullable|image|mimes:jpg,bmp,png|dimensions:min_width=100,min_height=100',
            'website'=>'required'
        ]);
    
        $company = Company::find($id);
    
        $company->update($validatedData);
    
        if ($request->hasFile('logo')) {
            if ($company->logo) {
                Storage::delete($company->logo);
            }
            
            $logo = $request->file('logo');
            $fileName = time() . '_' . $logo->getClientOriginalName();
            $logo->storeAs('public', $fileName);
            $company->logo = $fileName;
        }
    
        $company->save();
    
        return redirect('/mainpage')->with('success','Company updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $company = Company::find($id);

        if($company->logo)
        {
            Storage::delete('public/' . $company->logo);
        }

        $company->delete();

        return redirect('/mainpage')->with('success','Company deleted successfully');
    }
}
