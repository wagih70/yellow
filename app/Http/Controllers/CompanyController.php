<?php

namespace App\Http\Controllers;

use App\Area;
use App\Category;
use App\City;
use App\Company;
use App\Http\Requests\CompanyRequest;

class CompanyController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $companies = Company::paginate(10);;
        return view('list',compact('companies'));
    }

    public function create()
    {
    	$categories = Category::all();
    	$cities = City::all();
    	return view('add',compact('categories','cities'));
    }

    public function store(CompanyRequest $request)
    {
    	$company = new Company;

    	if($file = $request->hasFile('image')) {
            
            $file = $request->file('image') ;
            
            $fileName = $file->getClientOriginalName() ;
            $destinationPath = public_path().'/images/' ;
            $file->move($destinationPath,$fileName);
            $company->image = $fileName ;
        }

        $company->name = $request->name;
        $company->category = $request->inputCategory;
        $company->phone_number = $request->inputPhone;
        $city = City::where("id", $request->inputCity)->value('name');
        $company->city = $city;
        $area = Area::where("id", $request->inputArea)->value('name');;
        $company->area = $area;
        $company->save();

        return redirect()->back()->with('status', 'Company is saved successfully!');
    }

    public function getAreas($id)
    {
        $areas = Area::where("city_id",$id)->get();
        return $areas;
    }

    public function edit($id)
    {
    	$categories = Category::all();
    	$cities = City::all();
    	$company = Company::findOrFail($id);
    	return view('edit',compact('company','categories','cities'));
    }

    public function update(CompanyRequest $request, $id)
    {
    	$company = Company::findOrFail($id);

    	if($file = $request->hasFile('image')) {
            
            $file = $request->file('image') ;
            
            $fileName = $file->getClientOriginalName() ;
            $destinationPath = public_path().'/images/' ;
            $file->move($destinationPath,$fileName);
            $company->image = $fileName ;
        }

        $company->name = $request->name;
        $company->category = $request->inputCategory;
        $company->phone_number = $request->inputPhone;
        $city = City::where("id", $request->inputCity)->value('name');
        $company->city = $city;
        $area = Area::where("id", $request->inputArea)->value('name');;
        $company->area = $area;
        $company->update();

         return redirect()->back()->with('status', 'Company is updated successfully!');
    }

    public function destroy($id)
    {
        $company = Company::findOrFail($id);
        $company->delete();
        return redirect('/'); 
    }

}
