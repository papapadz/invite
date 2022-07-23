<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

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
                $retVal['user'] = $user;
                $retVal['state'] = true;
            }
        }
        
        return $retVal;
    }
}
