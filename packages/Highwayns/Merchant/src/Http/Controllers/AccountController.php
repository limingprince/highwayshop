<?php

namespace Highwayns\Merchant\Http\Controllers;

use Hash;

/**
 * Admin user account controller
 *
 * @author    Jitendra Singh <jitendra@highwayns.com>
 * @copyright 2019 Highwayns Software Tokyo Ltd (http://www.highwayns.com)
 */
class AccountController extends Controller
{
    /**
     * Contains route related configuration
     *
     * @var array
     */
    protected $_config;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->_config = request('_config');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View 
     */
    public function edit()
    {
        $user = auth()->guard('merchantadmin')->user();

        return view($this->_config['view'], compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        $user = auth()->guard('merchantadmin')->user();

        $this->validate(request(), [
            'name' => 'required',
            'email' => 'email|unique:admins,email,' . $user->id,
            'password' => 'nullable|min:6|confirmed',
            'current_password' => 'required|min:6'
        ]);

        $data = request()->input();

        if (! Hash::check($data['current_password'], auth()->guard('merchantadmin')->user()->password)) {
            session()->flash('warning', trans('admin::app.users.users.password-match'));

            return redirect()->back();
        }

        if (! $data['password'])
            unset($data['password']);
        else
            $data['password'] = bcrypt($data['password']);

        $user->update($data);

        session()->flash('success', trans('admin::app.users.users.account-save'));

        return back();
    }
}