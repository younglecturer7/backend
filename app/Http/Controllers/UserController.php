<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Interfaces\UserInterface;
use App\Models\User;
use App\Traits\HttpResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{
    use HttpResponse;

    //declare variables
    private $userRepository;

    /**
     * Construct default variables.
     */
    function __construct(UserInterface $user)
    {
        $this->userRepository = $user;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'data' => $this->userRepository->showAllUsers()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        $validatedUser = $request->validated();
        return response()->json([
            'data' => $this->userRepository->storeUser($validatedUser)
        ]);

    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $user = $request->route('user');
        return response()->json([
            'data' => $this->userRepository->showSingleUser($user)
        ]);
    }

    /**
     * Show auth user
     */
    public function showAuthUser()
    {
        return response()->json([ 'data' => $this->userRepository->showAuthUser() ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreUserRequest $request)
    {
        $details = $request->validated();
        $id = $request->route('user');
        $this->userRepository->updateUser($id, $details);
        return $this->success(['id' => $id], 'Users detail updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $this->userRepository->deleteSingleUser($user->id);
        return $this->success(['id' => $user->id], 'Users deleted successfully');
    }

}
