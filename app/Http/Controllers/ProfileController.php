<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\RegisterController;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!auth()->user()) {

            request()->merge(['password' =>'calebuniv','password_confirmation' =>'calebuniv']);
            (new RegisterController)->register(request());

            auth()->user()->profile()->updateOrCreate([
                'age' => request()->age,
                'd_o_b' => request()->d_o_b,
                'phone' => request()->phone,
                'address' => request()->address,
                'blood_group' => request()->blood_group,
                'genotype' => request()->genotype,
                'allergy' => request()->allergy,
                ]);

        }else{
            auth()->user()->update(request()->except(["_token"]));
            auth()->user()->profile()->updateOrCreate(['user_id' => auth()->id()],[
                'age' => request()->age,
                'd_o_b' => request()->d_o_b,
                'phone' => request()->phone,
                'address' => request()->address,
                'blood_group' => request()->blood_group,
                'genotype' => request()->genotype,
                'allergy' => request()->allergy,
                ]);

                foreach (request()->file() as $file) {

                    Storage::makeDirectory(auth()->id());
                    $name = $file->getClientOriginalName();
                    $path = Storage::putFileAs('public/'.auth()->id(), new File($file->path()),$name);
                    $data = array('path' =>Storage::url($path));
                    auth()->user()->profile->image()
                    ->updateOrCreate(['imageable_type'=>'\App\Model\Profile', 'imageable_id' => auth()->user()->profile->id],
                    $data);

                }
        }

        return back();
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
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }


}
