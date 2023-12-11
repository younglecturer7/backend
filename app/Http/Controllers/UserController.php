<?php

namespace App\Http\Controllers;

use App\Interfaces\UserInterface;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
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
        return view('home', [
            'users' => $this->userRepository->showAllUsers()
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
    public function store(Request $request)
    {
        return view('create', [
            'newUser' => $request->all()
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
