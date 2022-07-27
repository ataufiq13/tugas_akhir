<?php

namespace App\Http\Controllers\Admin;

use App\Models\Jenis;
use App\Models\Tracking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class TrackingController extends Controller
{
    protected $menu = 'Tracking Product';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menu = $this->menu;
        $menu_active = 'Data Tracking Product';
        // $data = Tracking::with('jenis')->get()->groupBy('jenis_id');
        $data = DB::table('trackings')
            ->select('jenis_id', DB::raw('count(*) as total'))
            ->groupBy('jenis_id')
            ->get();
        // dd($data);
        $theads = array('jenis', 'ukuran', 'total tracking');

        return view('pages.admin.tracking.index', compact('data', 'menu', 'menu_active', 'theads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menu = $this->menu;
        $menu_active = 'Tambah Tracking Product';
        $data_jenis = Jenis::get();
        return view('pages.admin.tracking.create', compact('data_jenis', 'menu', 'menu_active'));
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
            'jenis_id' => ['required', 'integer', 'max:11'],
            'proses' => ['required', 'string', 'max:255'],
        ])->validate();

        // dd($data);

        Tracking::create($validated);

        return redirect('tracking')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $menu = $this->menu;
        $menu_active = 'Detail Tracking Product';
        $data = Tracking::where('jenis_id', $id)->get();

        return view('pages.admin.tracking.show', compact('data', 'menu', 'menu_active'));
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
        $menu_active = 'Ubah Tracking Product';
        $data = Tracking::find($id);
        $data_jenis = Jenis::get();
        return view('pages.admin.tracking.edit', compact('data', 'data_jenis', 'menu', 'menu_active'));
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
            'jenis_id' => ['required', 'integer', 'max:11'],
            'proses' => ['required', 'string', 'max:255'],
        ])->validate();

        Tracking::where('id', $id)
            ->update($validated);

        return redirect('tracking/' . $validated['jenis_id'])->with('success', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Tracking::find($id);
        $data->delete();
        return redirect()->back()->with('success', 'Data Berhasil Dihapus');
    }
}
