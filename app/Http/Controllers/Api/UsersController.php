<?php

namespace Walladog\Http\Controllers\Api;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;
use LucaDegasperi\OAuth2Server\Facades\Authorizer;
use Walladog\Http\Controllers\Controller;
use Walladog\Http\Requests;
use Walladog\User;


class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        Auth::loginUsingId(Authorizer::getResourceOwnerId());

        if(Gate::denies('showall',new User)) {
            return response()->json([ 'error' => 'Usuario no autorizado' ], 401);
        }

        //$users = User::with('detail','location')->get()->paginate(15);;
        return response()->json(User::with('detail.avatar','location','addresses')->paginate(15));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $user_id=Authorizer::getResourceOwnerId(); // Auth user from TOKEN oAuth2
        Auth::loginUsingId($user_id); //Log the user

        $user = User::with('detail','location')->findOrFail($id); //Get the resource
        if(Gate::denies('show',$user)){ //Check policies for User
            return response()->json([ 'error' => 'Unauthorized not found' ], 401);
        }

        //If pass the policies , return the resource
        return $user;

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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

        Auth::loginUsingId(Authorizer::getResourceOwnerId());
        $user = User::with('detail','location')->findOrFail($id); //Get the resource
        if(Gate::denies('update',$user)) {
            return response()->json([ 'error' => 'No tienes permisos para editar este Usuario' ], 401);
        }

        $validator = Validator::make($request->only(['firstname','lastname']), [
            'firstname' => 'string|max:100',
            'lastname' =>  'string|max:100',
        ]);
        if ($validator->fails()) {
            return Response::make([
                'message'   => 'Validation Failed',
                'errors'        => $validator->errors()
            ]);
        }

        $user->firstname = $request->get('firstname');
        $user->save();

        return response()->json($user);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Auth::loginUsingId(Authorizer::getResourceOwnerId());
        $user = User::with('detail','location')->findOrFail($id); //Get the resource
        if(Gate::denies('destroy',$user)) {
            return response()->json([ 'error' => 'No tienes permisos para editar este Usuario' ], 401);
        }
        
        $user->deleted=1;
        $user->save();

        return response()->json($user);
        
    }
}
