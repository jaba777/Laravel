<?php

namespace App\Http\Controllers; // Make sure to use the correct namespace

use Illuminate\Http\Request;
use App\Http\Requests\CreateUserRequest;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $users = User::all();

        return response()->json([
            'users' => $users
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(CreateUserRequest $request)
    {
        $userData= $request->validated();

        $findUser= User::where('email',$userData['email'])->first();
        if($findUser){
           return response()->json(['message' => 'this is already find'], 401);
        }

        $userData['password'] = Hash::make($userData['password']);
        $user = User::create($userData);
        Log::info($user);

        return response()->json([
            'user'=>$user
        ],200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateUserRequest $request)
    {
         $userData= $request->validated();

        $userData['password'] = Hash::make($userData['password']);
        $user = User::create($userData);
        Log::info($user);

        return response()->json([
            'user'=>$user
        ],200);
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
