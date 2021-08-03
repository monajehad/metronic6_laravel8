<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreAdminRequest;
use App\Http\Requests\Admin\UpdateAdminRequest;
use App\Models\User;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index(){

        if (request()->expectsJson()) {

            $admins = User::orderBy('updated_at','desc')->metronicPaginate();

            return response()->json($admins)->setStatusCode(200);
        }
      //  $roles = Role::active()->get();
        return view('users.admin.index',get_defined_vars());

    }
    public function store(StoreAdminRequest $request){
        $inputs = $request->all();
        $user = User::create($inputs);
        if($request->img){
            $user->img = uploadImage($request->img,User::MEDIA_PATH,'500');
            $user->save();
        }
        return sendResponse(true, 'add_data',  $user, 200);
    }
    public function update(UpdateAdminRequest $request){
        $inputs = $request->except([ 'password']);
        if ($request['password']) {
            $pass = Hash::make($request->password);
            $inputs = array_merge($inputs, ['password' => $pass]);
        }
        $user = User::findOrFail($request->user_id);
        $user->update($inputs);

        if($request->img){
            $user->img = uploadImage($request->img,User::MEDIA_PATH,'400','', $user->img??'');
        }


        $user->save();
        $user->syncRoles($request->roles); //حد roles المحدددة

        return sendResponse(true, 'update_data',  $user, 200);
    }


    public function delete(Request $request){
        $data = User::findOrFail($request->id)->delete();
        return sendResponse(true, null, null , 200);
    }

    public function multiDelete(Request $request){
        $data = User::whereIn('id',$request->id)->delete();
        return sendResponse(true, null, null , 200);
    }



    public function updateStatus(Request $request)
    {
        $key = $request->key;
        $data = User::findOrFail($request->id);
        $data->$key = $request->status == "true" ? Carbon::now() : NULL ;
        $data->save();
        return sendResponse(true, 'status_changed', null , 200);
    }
}
