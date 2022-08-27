<?php

namespace App\Http\Controllers;


use App\Models\Berita;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class DashboardBeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.posts.index', [
            'title' => 'My Post',
            'data_posts' => Berita::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.posts.create', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|min:4|max:255',
            'slug' => 'required|max:255|unique:beritas',
            'category_id' => 'required',
            'body' => 'required'
        ]);

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);

        Berita::create($validatedData);

        return redirect('/dashboard/beritas')->with('success', 'Post Artikal baru berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Berita  $berita 
     * @return \Illuminate\Http\Response
     */
    public function show(Berita $berita)
    {
        if ($berita->author->id !== auth()->user()->id) {
            abort(403);
        }
        return view('dashboard.posts.show', [
            'post' => $berita
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function edit(Berita $berita)
    {
        return view('dashboard.posts.edit', [
            'post' => $berita,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Berita $berita)
    {
        $rules = ([
            'title' => 'required|min:4|max:255',
            'category_id' => 'required',
            'body' => 'required'
        ]);

        if ($request->slug != $berita->slug) {
            $rules['slug'] = 'required|unique:beritas';
        }

        $validatedData =  $request->validate($rules);

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);

        Berita::where('id', $berita->id)->update($validatedData);

        return redirect('/dashboard/beritas')->with('success', 'Post baru berhasil di update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function destroy(Berita $berita)
    {
        Berita::destroy($berita->id);

        return redirect('/dashboard/beritas')->with('success', 'Post telah dihapus');
    }

    public function checkSlug($slug)
    {
        if (Berita::where('slug', $slug)->count() > 0) return true;
        else return false;
    }

    public function generateSlug($title, $count)
    {
        $slug = Str::slug($title . '-' . $count, '-');

        if ($this->checkSlug($slug)) $slug = $this->generateSlug($title, $count + 1);

        return $slug;
    }

    public function createSlug(Request $request)
    {

        $slug = Str::slug($request->title, '-');

        if ($this->checkSlug($slug)) $slug = $this->generateSlug($request->title, 1);

        return response()->json(['slug' => $slug]);
    }
}
