<?php

namespace App\Http\Controllers;

use App\Models\User;
// use App\Models\Bukti;
use App\Models\Infaq;
use App\Models\Rayon;
use App\Models\Tagihan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Builder;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function login()
    {
        return view('login');
    }

    public function auth(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            if (Auth::user()->role == 'admin') {
                return redirect()->route('dashboard.admindashboard.index')->with('berhasilLogin', 'a');
            } else {
                return redirect()->route('dashboard.userdashboard.userdash')->with('berhasilLogin', 'b');
            }
        }
        return redirect()->back()->with('login', 'b');
    }

    public function admin()
    {
        $infaq  = Infaq::all();
        if($infaq){
            //? INFO : Request
            $request = 0;
            foreach($infaq as $b){
                if($b->status == 'pending'){
                    $request += 1;
                }
            }
            //? INFO : Tunggakan
            $tunggakan = 0;
            foreach($infaq as $i){
                $tunggakan += $i['tunggakan'];
            }
            //? INFO : Total Dana
            $totalDana = 0;
            foreach($infaq as $i){
                $totalDana += $i['nominal'];
            }
        }
        return view('dashboard.admindashboard.index')->with([
            'tunggakan' => $tunggakan,
            'request' => $request,
            'totalDana' => $totalDana
        ]);
    }

    public function infaq(Request $request)
    {
        $search = $request->input('search');

        $infaq = Infaq::with('user')->where('status', '=', 'pending')->get();

        return view('dashboard.admindashboard.infaq')->with([
            'users' => $infaq
        ]);
    }

    public function verifikasi()
    {
        $users = Infaq::with('user')->where('status', '!=', 'pending')->orderByDesc('updated_at')->get();

        return view('dashboard.admindashboard.verifikasi', compact('users'));
    }

    public function search(Request $request)
    {
        $search = $request->input('search');

        $query = Infaq::with('user')->where('status', '=', 'pending');

        if ($search) {
            $query->where(function ($queryBuilder) use ($search) {
                $queryBuilder->where('nominal', 'like', '%' . $search . '%')
                    ->orWhere('user.nama', 'like', '%'. $search. '%');
                    // ->orWhereHas('role.subRole.rayon', function ($q) use ($search) {
                    //     $q->where('nama_rayon', 'like', '%' . $search . '%');
                    // })
                    // ->orWhereHas('role.subRole.infaq.rombel', function ($q) use ($search) {
                    //     $q->where('rombel', 'like', '%' . $search . '%');
                    // })
                    // ->orWhereHas('role.subRole.infaq', function ($q) use ($search) {
                    //     $q->where('nominal', 'like', '%' . $search . '%');
                    // });
            });
        }

        $users = $query->get();
        if($users->count() > 0) {
            $output = '';
            foreach($users as $user){
                $output.=
                    '<tr>
                        <td>
                            '.$user->user->nama.'
                        </td>
                        <td>
                            '.$user->user->nis.'
                        </td>
                        <td>
                            '.$user->user->rayon->nama_rayon.'
                        </td>';
                        foreach ($user->role->subRole->infaq as $user_user){
                            $output.=
                            '<td>
                                '.$user_user->rombel->rombel.'
                            </td>
                            <td>
                                '.$user_user->nominal.'
                            </td>';
                        }
                        $output.=
                        '<td>
                            <div class="button-container">
                                <button type="button" class="btn-terima" href="#">
                                    <i class="fa-solid fa-check"></i>
                                </button>
                                <button type="button" class="btn-tolak" href="#">
                                    <i class="fa-solid fa-xmark" ></i>
                                </button>
                                <button type="button" class="btn-detail" data-toggle="modal" data-target="#modalUser'.$user->id.'" style="cursor: pointer;">
                                    <i class="fa-solid fa-expand" style="margin-right: 10px"></i> Detail
                                </button>

                                <!-- The Modal -->
                                <div class="modal" id="modalUser'.$user->id.'" style="z-index:9999">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h1 class="modal-title" style="font-family: '.'Poppins'.', sans-serif; font-size: 19px; font-weight: 900; color: #00233D;">Detail Pembayaran</h1>
                                            <button type="button" class="close" data-dismiss="modal">×</button>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body" style="color: #00233D; font-family: '.'Poppins'.', sans-serif;">
                                            <div class="row" style="margin-top: 30px; margin-bottom: 30px; text-align: center;">
                                                <div class="col">
                                                    <img src="../../assets/img/tf.png" style="width: 350px; height: auto;">
                                                </div>
                                            <div class="col">
                                                <p style="text-align: left; font-weight: 500; font-size: 14px; margin-bottom: 4px;">Nama pengirim : Raditya Arya Wiguna</p>
                                                <p style="text-align: left; font-weight: 500; font-size: 14px; margin-bottom: 4px;">Tanggal Pembayaran : 15 Mei 2023</p>
                                                <p style="text-align: left; font-weight: 500; font-size: 14px; margin-bottom: 4px;">Nama bank : BCA</p>
                                                <p style="text-align: left; font-weight: 500; font-size: 14px; margin-bottom: 30px;">Bulan Pembayaran : Mei 2023</p>

                                                <p style="text-align: left; font-weight: 900; font-size: 14px; margin-bottom: 4px;">Catatan :</p>
                                                <p style="text-align: left; font-weight: 500; font-size: 14px; margin-bottom: 50px;">Pembayaran infaq untuk bulan mei ya admin</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </td>
        </tr>';
        }
        }else {
            $output =
            '<tr>
                <td colspan="5">Tidak ada data yang ditemukan</td>
            </tr>';
        }
        return response($output);
    }


    public function dataSiswa(Request $request)
    {
        $rayon = Rayon::all();
        $query = User::where('role', '!=', 'admin');
        $tagihan = Tagihan::all();

        if ($request->input("filter")) {
            $selectedRayonId = $request->input("filter");
            $query->whereHas('rayon.nama_rayon', function ($q) use ($selectedRayonId) {
                $q->where('id', $selectedRayonId);
            });
        }

        $user = $query->get();

        return view('dashboard.admindashboard.siswa', compact('user', 'rayon', 'request', 'tagihan'));

    }

    public function student()
    {
        return view('dashboard.userdashboard.userdash');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/')->with('logout', 'a');
    }

    public function validateInfaq(Request $request, $id)
    {
        $user = Infaq::find($id);
        $arrayBulan = [
            ' Januari ',
            ' Februari ',
            ' Maret ',
            ' April ',
            ' Mei ',
            ' Juni ',
            ' Juli ',
            ' Agustus ',
            ' September ',
            ' Oktober ',
            ' November ',
            ' Desember ',
        ];
        // Cari bulan1
        $teks1 = Str::before($user->waktu_pembayaran, ' - ');
        $trim1 = trim($teks1);
        $pecah1 = explode(" ", $trim1);
        $bulan1 = " ". $pecah1[0] ." ";

        // Cari bulan2
        $teks2 = Str::after($user->waktu_pembayaran, ' - ');
        $trim2 = trim($teks2);
        $pecah2 = explode(" ", $trim2);
        $bulan2 = " ". $pecah2[0] ." ";

        $n1 = Tagihan::where('user_id', $user->user_id)->where('bulan', $bulan1)->get('id');
        foreach($n1 as $a){ $n1 = $a->id; }; // Karena $n1 itu array, jadi kita ambil idnya aja
        $n2 = Tagihan::where('user_id', $user->user_id)->where('bulan', $bulan2)->get('id');
        foreach($n2 as $a){ $n2 = $a->id; }; // Karena $n2 itu array, jadi kita ambil idnya aja
        $arrayTagihan[] = null;

        for($n1; $n1 <= $n2; $n1++){
            if($request->status == 'success'){
                Tagihan::where('id', $n1)->update([
                    'status' => 'success',
                ]);
            }else{
                Tagihan::where('id', $n1)->update([
                    'status' => 'unpaid',
                ]);
            }
        }

        $user->update([
            'status' => $request->status,
        ]);

        return redirect()->back();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
