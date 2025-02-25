<?php

namespace App\Http\Controllers;

use App\Models\TeamMember;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::with('teamMembers')->get(); // Récupère chaque rôle avec les membres associés
        $teamMembers = TeamMember::with('roles')->get(); // Récupère tous les membres avec leurs rôles
    return view('team.index', compact('roles', 'teamMembers'));
    }

    public function manageteam()
    {
        $teamMembers = TeamMember::all();
        return view('admin.manageteam', compact('teamMembers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('team.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'description' => 'nullable|string',
            'profile_picture' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $teamMember = new TeamMember();
        $teamMember->name = $request->name;
        $teamMember->role = $request->role;
        $teamMember->description = $request->description;

        if ($request->hasFile('profile_picture')) {
            $teamMember->addMedia($request->file('profile_picture'))->toMediaCollection('profile_picture');
        }

        $teamMember->save();

        return redirect()->route('admin.manageteam')->with('success', 'Team member added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TeamMember  $teamMember
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $teamMember = TeamMember::with('roles', 'posts')->findOrFail($id);
        return view('team.show', compact('teamMember'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TeamMember  $teamMember
     * @return \Illuminate\Http\Response
     */
    public function edit(TeamMember $teamMember)
    {
        return view('team.edit', compact('teamMember'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TeamMember  $teamMember
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TeamMember $teamMember)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'description' => 'nullable|string',
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $teamMember->name = $request->name;
        $teamMember->role = $request->role;
        $teamMember->description = $request->description;

        if ($request->hasFile('profile_picture')) {
            Storage::delete($teamMember->profile_picture);
            $teamMember->addMedia($request->file('profile_picture'))->toMediaCollection('profile_picture');
        }

        $teamMember->save();

        return redirect()->route('admin.manageteam')->with('success', 'Team member updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TeamMember  $teamMember
     * @return \Illuminate\Http\Response
     */
    public function destroy(TeamMember $teamMember)
    {
        $teamMember = TeamMember::findOrFail($id);
        
        // Suppression de l'image de profil si elle existe
        if ($teamMember->profile_picture) {
            Storage::delete($teamMember->profile_picture);
        }

        $teamMember->delete();
        return redirect()->route('admin.manageteam')->with('success', 'Team member deleted successfully');
    }
}

