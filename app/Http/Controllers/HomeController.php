<?php

namespace App\Http\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $students = [
        4200001 => [
            'Last_Name' => 'Seno',
            'First_Name' => 'Chris',
            'Birthday' => '1998/02/23',
            'isnewstudent' => True
        ],
        4200011 => [
            'Last_Name' => 'Ortiz',
            'First_Name' => 'Bryan',
            'Birthday' => '2001/09/21',
            'isnewstudent' => False
        ]
    ];
    public function index()
    {
        return view('record.index', ['students'=>$this->students]);
    }
    public function show($id)
    {
        abort_if(!(isset($this->students[$id])), 404);
        return view('record.show', ['student'=>$this->students[$id]]);
    }
    public function create()
    {
        return view('record.create');
    }
    public function store(Request $request)
    {
        $Last_Name = Request()->input('Last_Name');
        $First_Name = Request()->input('First_Name');
        $Birthday = Request()->input('Birthday');
        $students = [
                'Last_Name' => $Last_Name,
                'First_Name' => $First_Name,
                'Birthday' => $Birthday,
                'isnewstudent' => True
                
            ];
        return view('record.store', ['student'=>$students]);
    }
    public function edit($id)
    {
        abort_if(!(isset($this->students[$id])), 404);
        return view('record.edit', ['student'=>$this->students[$id]]);   
    }
    public function update(Request $request, $id)
    {
        $Last_Name = Request()->input('Last_Name');
        $First_Name = Request()->input('First_Name');
        $Birthday = Request()->input('Birthday');
        $students = [
            $id => [
                'Last_Name' => $Last_Name,
                'First_Name' => $First_Name,
                'Birthday' => $Birthday,
                'isnewstudent' => $isnewstudent
            ]    
        ];
        return view('record.store', ['student'=>$this->students[$id]]);
    }
    public function destroy($id)
    {
        $this->students[$id] -> delete();
        return view('record.index', ['students'=>$this->students]);
    }
}