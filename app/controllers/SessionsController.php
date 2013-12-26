<?php

class SessionsController extends \BaseController {

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return View::make('sessions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $attempt = Auth::attempt([
            'username' => Input::get('username'),
            'password' => Input::get('password')
        ], !!Input::get('remember', false));

        if ($attempt) {
            return Redirect::intended('/');
        }

        return Redirect::back()
            ->withInput()
            ->with('flash_message', 'Login failed.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return Response
     */
    public function destroy()
    {
        Auth::logout();

        return Redirect::home();
    }

}
