<?php

namespace App\Http\Controllers;

use Illuminate\View\Factory;
use Illuminate\Foundation\Application;
use Illuminate\Contracts\View\View;

/**
 * Class LecturesController
 *
 * @package App\Http\Controllers
 */
class LecturesController extends Controller
{
    /**
     * LecturesController constructor.
     *
     * This controller requires basic authentication for all its methods.
     */
    public function __construct()
    {
        $this->middleware('auth.basic'); // Basic authentication middleware
    }

    /**
     * Display the lectures navigation view.
     *
     * @return View|Application|Factory
     */
    public function index(): View|Application|Factory
    {
        return view('lectures.lectures-nav');
    }

    /**
     * Display the interview guide.
     *
     * @return View
     */
    public function interviewGuide(): View
    {
        return view('lectures.interview-guide');
    }
}
