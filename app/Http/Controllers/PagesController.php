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
        return view('pages.about');
    }

    public function getContact()
    {
        return view('pages.contact');
    }
    
}