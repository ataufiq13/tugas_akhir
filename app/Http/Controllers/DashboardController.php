<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Jenis;
use App\Models\Pesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $customer = User::where('role_id', 3)->get();
        $total_customer = count($customer);

        $pesanan = Pesanan::get();
        $total_pesanan = count($pesanan);

        // $pesanan_tertinggi = Pesanan::get()->groupBy('jenis_id');
        $pesanan_group = DB::table('pesanans')
            ->select('jenis_id', DB::raw('count(*) as total'))
            ->groupBy('jenis_id')
            ->pluck('jenis_id', 'total');

        $pesanan_tertinggi = max($pesanan_group->toArray());
        $pesanan_jenis = Jenis::find($pesanan_tertinggi);
        // dd($pesanan_jenis);

        return view('dashboard', compact('total_customer', 'total_pesanan', 'pesanan_jenis'));
    }
}
