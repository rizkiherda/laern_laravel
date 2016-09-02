<?php
/**
 * Rizki Herdatullah
 * Web Developer, Front-End Designer, and Project Manager
 */

/**
 * Created by PhpStorm.
 * User: Rizki Herdatullah
 * Date: 9/3/2016
 * Time: 1:29 AM
 */

# This is for make controller just run only on the directory of it belong
namespace App\Http\Controllers;

class PagesController extends Controller {
    # Use get, post, put, etc on every method
    public function getIndex()
    {
        return view('pages.welcome');
    }

    public function getAbout()
    {
        $first = 'Rizki';
        $last = 'Herdatullah';

        $fullname = $first . " " . $last;
        $email = "rizkiherda@gmail.com";
        $data = [];
        $data ['email'] = $email;
        $data['fullname'] = $fullname;
        return view('pages.about')->withData($data); # This is the easiest way to to send a variable to views
    }

    public function getContact()
    {
        return view('pages.contact');
    }

}