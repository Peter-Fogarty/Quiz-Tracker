<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreQuizRequest;
use App\Http\Requests\UpdateQuizRequest;
use App\Models\Player;
use App\Models\Quiz;

class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("quiz.index")->with('quizzes', Quiz::all());
    }

    public function dashboard()
    {
        $count = Quiz::count();
        return view('dashboard')
            ->with('numberOfQuizzes', $count)
            ->with('average', number_format((float)Quiz::sum('place')/$count), 2)
            ->with('averageScore', number_format((float)Quiz::sum('score')/$count), 2)
            ->with('numberOfWins', Quiz::where('place', 1)->count())
            ->with('numberOfSeconds', Quiz::where('place', 2)->count())
            ->with('numberOfThirds', Quiz::where('place', 3)->count());
    }

    public function players()
    {
        $players = Player::all();
        $results = collect();
        foreach ($players as $player) {
            $score = number_format((float)$player->quizzes()->average('score'), 2);
            $appearances = $player->quizzes()->count();
            $best = $player->quizzes()->orderBy('place', 'asc')->first()->place;
            $results->push((object)['name' => $player->name, 'best' => $best, 'appearances' => $appearances, 'score' => $score]);
        }
        $results = $results->sortBy('score', null, true);
        return view('quiz.player')
        ->with('results', $results)
            ;
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreQuizRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreQuizRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function show(Quiz $quiz)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function edit(Quiz $quiz)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateQuizRequest  $request
     * @param  \App\Models\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateQuizRequest $request, Quiz $quiz)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quiz $quiz)
    {
        //
    }
}
