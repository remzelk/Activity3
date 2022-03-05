<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $students = [
        4200001 => [
            'lastname' => 'Seno',
            'firstname' => 'Chris',
            'birthday' => '1998/02/23',
            'isnewstudent' => True
        ],
        4200011 => [
            'lastname' => 'Ortiz',
            'firstname' => 'Bryan',
            'birthday' => '2001/09/21',
            'isnewstudent' => False
        ]
    ];
    public function index()
    {
        return view('Home.index', ['students'=>$this->students]);
    }
    public function show($id)
    {
        abort_if(!(isset($this->students[$id])), 404);
        return view('Home.show', ['student'=>$this->students[$id]]);
    }
    public function create()
    {
        return view('Home.create');
    }
    public function store(Request $request)
    {
        $lastname = Request()->input('lastname');
        $firstname = Request()->input('firstname');
        $birthday = Request()->input('birthday');
        $students = [
                'lastname' => $lastname,
                'firstname' => $firstname,
                'birthday' => $birthday,
                'isnewstudent' => True
                
            ];
        return view('Home.store', ['student'=>$students]);
    }
    public function edit($id)
    {
        abort_if(!(isset($this->students[$id])), 404);
        return view('Home.edit', ['student'=>$this->students[$id]]);   
    }
    public function update(Request $request, $id)
    {
        $lastname = Request()->input('lastname');
        $firstname = Request()->input('firstname');
        $birthday = Request()->input('birthday');
        $students = [
            $id => [
                'lastname' => $lastname,
                'firstname' => $firstname,
                'birthday' => $birthday,
                'isnewstudent' => $isnewstudent
            ]    
        ];
        return view('Home.store', ['student'=>$this->students[$id]]);
    }
    public function destroy($id)
    {
        $this->students[$id] -> delete();
        return view('Home.index', ['students'=>$this->students]);
    }
    
   
}
