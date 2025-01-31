<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TeamMember;
use App\Models\Role;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        return view('roles.index', compact('roles'));
    }

    public function create()
{
    $teamMembers = TeamMember::all(); // Récupérer tous les membres de l'équipe
    return view('roles.create', compact('teamMembers'));
}


public function store(Request $request)
{
    // Validation des données
    $request->validate([
        'name' => 'required|string|max:255',
        'team_member_id' => 'nullable|exists:team_members,id',
    ]);

    // Création du rôle
    $role = Role::create([
        'name' => $request->input('name'),
    ]);

    // Associer un membre de l'équipe (si sélectionné)
    if ($request->input('team_member_id')) {
        $member = TeamMember::findOrFail($request->input('team_member_id'));
        $role->teamMembers()->attach($member->id);
    }

    return redirect()->route('roles.index')->with('success', 'Role created successfully.');
}


    public function edit($id)
{
    $role = Role::findOrFail($id); // Récupérer le rôle à modifier
    $teamMembers = TeamMember::all(); // Récupérer tous les membres de l'équipe

    return view('roles.edit', compact('role', 'teamMembers'));
}


public function update(Request $request, $id)
{
    $role = Role::findOrFail($id);

    // Mettre à jour le nom du rôle
    $role->update([
        'name' => $request->input('name'),
    ]);

    // Associer un membre de l'équipe (si sélectionné)
    if ($request->input('team_member_id')) {
        $member = TeamMember::findOrFail($request->input('team_member_id'));
        $role->teamMembers()->sync([$member->id]); // Associer uniquement ce membre
    } else {
        $role->teamMembers()->detach(); // Retirer les associations
    }

    return redirect()->route('roles.index')->with('success', 'Role updated successfully.');
}


    public function destroy(Role $role)
    {
        $role->delete();

        return redirect()->route('roles.index')->with('success', 'Role deleted successfully.');
    }
}
