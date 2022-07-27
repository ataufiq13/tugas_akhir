<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Jenis;
use App\Models\Pesanan;
use App\Models\Tracking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class PesananController extends Controller
{
    protected $menu = 'Pesanan';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menu = $this->menu;
        $menu_active = 'Data Pesanan';
        $data = Pesanan::with('jenis', 'user')->orderBy('tanggal_pesan', 'desc')->get();
        $theads = array('tanggal', 'jenis', 'harga', 'satuan', 'total', 'status', 'tracking', 'user');

        return view('pages.admin.pesanan.index', compact('data', 'data', 'menu', 'menu_active', 'theads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menu = $this->menu;
        $menu_active = 'Tambah Pesanan';
        $data_jenis = Jenis::get();
        $data_user = User::where('role_id', '!=', 2)->get();

        return view('pages.admin.pesanan.create', compact('menu', 'menu_active', 'data_jenis', 'data_user'));
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
            'desainer' => ['required', 'string', 'max:255'],
            'tanggal_pesan' => ['required', 'date'],
            'satuan' => ['required', 'integer'],
            'jenis_id' => ['required', 'integer'],
            'user_id' => ['required', 'integer'],
        ])->validate();

        $jenis_id = $request->jenis_id;
        $jenis = Jenis::find($jenis_id);
        $total_bayar = $request->satuan * $jenis->harga;
        $tracking = Tracking::where('id', $jenis_id)->first();

        $pesanan = Pesanan::create([
            'desainer' => $request->desainer,
            'tanggal_pesan' => Carbon::parse($request->tanggal_pesan)->format('Y-m-d'),
            'satuan' => $request->satuan,
            'total_bayar' => $total_bayar,
            'status' => 'Belum',
            'tracking' => $tracking->proses,
            'bukti_bayar' => '',
            'jenis_id' => $request->jenis_id,
            'user_id' => $request->user_id,
        ]);

        return redirect(route('pesanan-admin.show', $pesanan->id))->with('success', 'Data Berhasil Ditambahkan');
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
        $menu_active = 'Detail Pesanan';
        $data = Pesanan::find($id);

        return view('pages.admin.pesanan.show', compact('menu', 'menu_active', 'data'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function tracking($id)
    {
        $menu = $this->menu;
        $menu_active = 'Tracking Pesanan';
        $data = Pesanan::find($id);
        $data_tracking = Tracking::where('jenis_id', $data->jenis_id)->get();

        return view('pages.admin.pesanan.tracking', compact('data', 'data_tracking', 'menu', 'menu_active'));
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
        $menu_active = 'Ubah Pesanan';
        $data = Pesanan::find($id);
        $data_jenis = Jenis::get();
        $data_user = User::get();
        $data_tracking = Tracking::where('jenis_id', $data->jenis_id)->get();

        return view('pages.admin.pesanan.edit', compact('menu', 'menu_active', 'data', 'data_jenis', 'data_tracking', 'data_user'));
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
            'desainer' => ['required', 'string', 'max:255'],
            'tanggal_pesan' => ['required', 'date'],
            'satuan' => ['required', 'integer'],
            'status' => ['required', 'string'],
            'tracking' => ['required', 'string'],
            'jenis_id' => ['required', 'integer'],
            'user_id' => ['required', 'integer'],
        ])->validate();

        $jenis_id = $request->jenis_id;
        $jenis = Jenis::find($jenis_id);
        $total_bayar = $request->satuan * $jenis->harga;

        $pesanan = Pesanan::where('id', $id)
            ->update([
                'desainer' => $request->desainer,
                'tanggal_pesan' => Carbon::parse($request->tanggal_pesan)->format('Y-m-d'),
                'satuan' => $request->satuan,
                'total_bayar' => $total_bayar,
                'status' => $request->status,
                'tracking' => $request->tracking,
                'bukti_bayar' => '',
                'jenis_id' => $request->jenis_id,
                'user_id' => $request->user_id,
            ]);

        return redirect(route('pesanan-admin.show', $id))->with('success', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Pesanan::find($id);
        $data->delete();
        return redirect('pesanan-admin')->with('success', 'Data Berhasil Dihapus');
    }
}
