<?php

namespace admin\Http\Controllers;

use Illuminate\Http\Request;

use admin\Contactenos;
use admin\Support\Facades\Redirect;
use admin\Http\Requests\ContactenosFormRequest;
use DB;


class ContactenosController extends Controller
{
    public function __contruct()
    {

    }
    public function index(Request $request)
    {
    	if ($request)
    	{
    		$query=trim($request->get('searchText'));
    		$contactenos=DB::table('contactenos')->where('titulo','LIKE','%'.$query.'%')
    		->orderBy('id','desc')
    		->paginate(5);
    		return view('admin.contactenos.index',['contactenos'=>$contactenos,'searchText'=>$query]);
    	}
    }
    public function create ()
    {
    	return view("admin.contactenos.create");
    }
    public function store (ContactenosFormRequest $request)
    {
    	dd($request);
        $contactenos=new Contactenos;
    	$contactenos->titulo=$request->get('titulo');
    	$contactenos->direccion=$request->get('direccion');
    	$contactenos->numtel=$request->get('numtel');
    	$contactenos->correo=$request->get('correo');
    	$contactenos->save();
    	return Redirect::to('.admin/contactenos');
    }
    public function show ($id)
    {
    	return view("admin.contactenos.show",["contactenos"=>Contactenos::findOrFail($id)]);
    }
    public function edit ($id)
    {
    	return view("admin.contactenos.edit",["contactenos"=>Contactenos::findOrFail($id)]);
    }
    public function update (ContactenosFormRequest $request,$id)
    {
    	$contactenos=Contactenos::findOrFail($id);
    	$contactenos->titulo=$request->get('titulo');
    	$contactenos->direccion=$request->get('direccion');
    	$contactenos->numtel=$request->get('numtel');
    	$contactenos->correo=$request->get('correo');
    	$contactenos->update();
    	return Redirect::to('.admin/contactenos');

    }
    public function destroy ($id) /* REVISAR */
    {
    	// $contactenos=Contactenos::findOrFail($id);
    	// $contactenos->condicion='0';
    	// $contactenos->update();
    	// return Redirect::to('.admin/contactenos');
    }

}
