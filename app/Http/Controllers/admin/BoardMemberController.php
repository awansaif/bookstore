<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\BoardMember;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BoardMemberController extends Controller
{

    public function index(): View
    {
        return view('admin.pages.board-member.index', [
            'members' => BoardMember::orderBy('id', 'DESC')->get()
        ]);
    }


    public function create(): View
    {
        return view('admin.pages.board-member.create');
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
            'name' => 'required',
            'designation' => 'required',
            'image'    => 'required|image'
        ]);

        BoardMember::create([
            'name' => $request->name,
            'designation' => $request->designation,
            'image'    => $this->fileUpload('images/', $request->file('image'))
        ]);

        return back()
            ->with('message', 'Board Member added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BoardMember  $boardMember
     * @return \Illuminate\Http\Response
     */
    public function show(BoardMember $boardMember)
    {
        //
    }


    public function edit(BoardMember $boardMember): View
    {
        return view('admin.pages.board-member.edit', [
            'member' => $boardMember
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BoardMember  $boardMember
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BoardMember $boardMember)
    {
        $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'image'    => 'nullable|image'
        ]);

        $boardMember->update([
            'name' => $request->name,
            'designation' => $request->designation,
            'image'    => $request->file('image') ? $this->fileUpload('images/', $request->file('image')) : $boardMember->image
        ]);

        return back()
            ->with('message', 'Board Member updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BoardMember  $boardMember
     * @return \Illuminate\Http\Response
     */
    public function destroy(BoardMember $boardMember)
    {
        $boardMember->delete();
        return back()
            ->with('message', 'Board Member removed successfully');
    }
}
