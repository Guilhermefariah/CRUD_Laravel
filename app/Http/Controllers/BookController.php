<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Models\Models\ModelBook;

class BookController extends Controller
{
    private $objBook;

    public function __construct()
    {
        $this->objBook = new ModelBook();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $book=$this->objBook->paginate();
        return view('index', compact('book'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BookRequest $request)
    {
        $cad=$this->objBook->create([
            'title'=>$request->title,
            'pages'=>$request->pages,
            'price'=>$request->price,
        ]);
        if ($cad){
            return redirect('books');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $book=$this->objBook->find($id);
        return view('show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $book=$this->objBook->find($id);
        return view('create', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BookRequest $request, string $id)
    {
        $this->objBook->where(['id'=>$id])->update([
            'title'=>$request->title,
            'pages'=>$request->pages,
            'price'=>$request->price,
        ]);
        return redirect('books');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $del = $this->objBook->destroy($id);
        return ($del) ? "sim" : "nao";
    }
}
