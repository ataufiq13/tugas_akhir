<?php

namespace App\Http\Controllers\Admin;

use App\Models\Jenis;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class JenisController extends Controller
{

    protected $menu = 'Jenis Product';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menu = $this->menu;
        $menu_active = 'Data Jenis Product';
        $data = Jenis::with('product')->get();
        $data_product = Product::all();
        $theads = array('nama', 'jenis', 'ukuran', 'harga');

        return view('pages.admin.product.index', compact('data', 'data_product', 'menu', 'menu_active', 'theads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menu = $this->menu;
        $menu_active = 'Tambah Jenis';
        $data_product = Product::get();
        return view('pages.admin.product.create-jenis', compact('menu', 'menu_active', 'data_product'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = Validator::make($request->all(), [
            'product_id' => ['required', 'integer', 'max:255'],
            'jenis' => ['required', 'string', 'max:255'],
            'ukuran' => ['required', 'string', 'max:255'],
            'harga' => ['required', 'integer'],
        ])->validate();

        // dd($data);

        Jenis::create($validated);

        return redirect('product/jenis')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $menu = $this->menu;
        $menu_active = 'Ubah Jenis';
        $data = Jenis::find($id);
        $data_product = Product::get();
        return view('pages.admin.product.edit-jenis', compact('menu', 'menu_active', 'data', 'data_product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = Validator::make($request->all(), [
            'product_id' => ['required', 'integer', 'max:255'],
            'jenis' => ['required', 'string', 'max:255'],
            'ukuran' => ['required', 'string', 'max:255'],
            'harga' => ['required', 'integer'],
        ])->validate();

        // dd($data);

        Jenis::where('id', $id)
            ->update($validated);

        return redirect('product/jenis')->with('success', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Jenis::find($id);
        $data->delete();
        return redirect('product/jenis')->with('success', 'Data Berhasil Dihapus');
    }
}
