<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\SiteProfile;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SiteProfileController extends Controller
{

    public function index(): View
    {
        return view('admin.pages.site-profile.index', [
            'profile' => SiteProfile::first()
        ]);
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


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'address' => 'required',
            'email' => 'required|email',
            'mobile' => 'required',
            'facebook' => 'required',
            'twitter' => 'required',
            'instagram' => 'required',
            'youtube' => 'required',
            'location' => 'required',
            'editor1' => 'required',
        ]);

        $profile = SiteProfile::select('id')->first();
        $profile = SiteProfile::findorFail($profile->id);

        $profile->update([
            'title'       => $request->title,
            'description' => $request->editor1,
            'location'    => $request->location,
            'address'     =>  $request->address,
            'mobile'      =>  $request->mobile,
            'email'       =>  $request->email,
            'facebook'    =>  $request->facebook,
            'Youtube'     =>  $request->youtube,
            'Twitter'     => $request->twitter,
            'Instagram'   =>  $request->instagram,
        ]);

        return back()
            ->With('message', 'Site Profile updated successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SiteProfile  $siteProfile
     * @return \Illuminate\Http\Response
     */
    public function show(SiteProfile $siteProfile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SiteProfile  $siteProfile
     * @return \Illuminate\Http\Response
     */
    public function edit(SiteProfile $siteProfile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SiteProfile  $siteProfile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SiteProfile $siteProfile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SiteProfile  $siteProfile
     * @return \Illuminate\Http\Response
     */
    public function destroy(SiteProfile $siteProfile)
    {
        //
    }
}
