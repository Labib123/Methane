<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Material;
use App ;
class MaterialController extends Controller
{

    public function __construct()
    {
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Show all Materials from the database and return to view
        $material = Material::all();
        return view('show-materials',['material'=>$material]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Return view to create employee
        return view('create-material');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request,[
            'name' => 'required|max:255|min:4',
            'description' => 'required|min:10',
            'pointsPerKg' => 'required|integer'

        ]);
        //Persist the employee in the database
        //form data is available in the request object
        $material = new Material();
        $user = Auth()->user() ; 
        //input method is used to get the value of input with its
        //name specified
        $material->name = $request->input('name');
        $material->description = $request->input('description');
        $material->pointsPerKg = $request->input('pointsPerKg');
        $material->user_id = $user->id; 
        $material->save(); //persist the data
        return redirect()->route('material.index')->with('info','Materia Added Successfully');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Find the employee
        $material = Material::find($id);
        return view('edit-material',['m'=> $material]);
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
        //Retrieve the employee and update

        $this->validate($request,[
            'name' => 'required|max:255|min:4',
            'description' => 'required|min:10',
            'pointsPerKg' => 'required|integer'

        ]);

        $material = Material::find($request->input('id'));
        $material->name = $request->input('name');
        $material->description = $request->input('description');
        $material->pointsPerKg = $request->input('pointsPerKg');
        $material->user_id = $request->input('uderId'); 
        $material->save(); //persist the data
        return redirect()->route('material.index')->with('info','Material Updated Successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Retrieve the employee
        $material = Material::destroy($id);
        //delete
        return redirect()->route('material.index')->with('success', 'Material deleted!');
    }
}