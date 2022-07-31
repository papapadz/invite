<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Assignment;

class ModuleController extends Controller
{
    public function login(Request $request) {
        
        $retVal = [
            'user' => null,
            'state' => false
        ];
        
        if($request->has('code')) {
            $user = User::where('code',$request->code)->first();
            if($user) {
                $retVal['user'] = $user->personInfo;
                $retVal['state'] = true;
                $retVal['accepted'] = $user->accepted;
            }
        }
        
        return $retVal;
    }

    public function assignment(Request $request) {
        return Assignment::where('person',$request->person)->with('item')->first();
    }

    public function answer(Request $request) {
        User::where('person', $request->person)->update(['accepted'=>$request->answer]);
    }
}
