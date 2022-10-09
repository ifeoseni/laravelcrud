<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\People;
use App\Models\Location;

class PeopleController extends Controller
{
    public function peopleList(){
        $people = People::get();
        return view('people',compact('people'));
    }
    public function addPeople(){
       $location = Location::get();
        return view('add-people',compact('location'));
    }

    public function save(Request $request){
        $savePerson = new People;
        $savePerson->name = $request->name;
        $savePerson->jobrole = $request->jobrole;
        $savePerson->location = $request->location;
        $savePerson->age = $request->age;
        $savePerson->save();
        return "Saved";
    }

    public function editPeople($id){
        $person = People::where('id','=',$id)->first();
        return view('edit-people',compact('person'));
    }

    public function updatePeople(Request $request){
        $id = $request->id;

        $name = $request->name;
        $jobrole = $request->jobrole;
        $location = $request->location;
        $age = $request->age;
        
         People::where('id','=',$id)->update([
            'name' => $name,
            'jobrole' => $jobrole,
            'location' => $location,
            'age' => $age
         ]);
         return view('people');
    }
    public function deletePeople($id){
        $person = People::where('id','=',$id)->delete();
        $people = People::get();
        $systemreply = "Successfully deleted";
        return view('people',compact('systemreply','people'));
    }
}
