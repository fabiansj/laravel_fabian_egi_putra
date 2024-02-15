<?php

namespace App\Http\Controllers;

use App\Models\pasien;
use App\Models\Pengguna;
use App\Models\rumahsakit;
use Illuminate\Contracts\View\View as ViewView;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;


class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('index');
    }

    public function showDashboard()
    {
        $rumahsakit = rumahsakit::All();
        return view('dashboard', compact('rumahsakit'));
    }

    public function showDataPasien()
    {
        $pasien = pasien::All();
        return view('tampildatapasien', compact('pasien'));
    }


    public function showCreateDataPasien()
    {
        return view('tambahdatapasien');
    }

    public function showCreateDataRumahSakit()
    {
        return view('tambahdatarumahsakit');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $username = $request->input('username');
        $password = $request->input('password');

        $user = Pengguna::where('username', $username)->where('password', $password)->first();

        if ($user) {
            auth()->login($user);
            $request->session()->regenerate();
            return redirect()->route('dashboard');
        } else {
            return redirect()->route('login')->with('error', 'Username atau password salah');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login');
    }

    public function saveDataRS(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);

        rumahsakit::create([
            'nama_rumahsakit'     => $request->nama,
            'alamat'   => $request->alamat,
            'email'   => $request->email,
            'phone'   => $request->phone,
        ]);

        return redirect()->route('dashboard')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function showEditRS(string $id): View
    {
        $rumahsakit = rumahsakit::findorfail($id);
        return view('editdatarumahsakit', compact('rumahsakit'));
    }

    public function editDataRS(string $id, Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);

        $rumahsakit = rumahsakit::findorfail($id);

        $rumahsakit->update([
            'nama_rumahsakit'   => $request->nama,
            'alamat'            => $request->alamat,
            'email'             => $request->email,
            'phone'             => $request->phone,
        ]);

        return redirect()->route('dashboard')->with('success', 'Data telah diupdate');
    }

    public function deleteRS(Request $request, $id)
    {
        // Your logic to delete data goes here
        // ...

        // You can return a response if needed
        return response()->json(['message' => 'Data deleted successfully']);
    }

    public function saveDataPasien(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'rumah_sakit_id' => 'required',
        ]);

        pasien::create([
            'nama_pasien'     => $request->nama,
            'alamat'   => $request->alamat,
            'email'   => $request->email,
            'phone'   => $request->phone,
            'rumah_sakit_id' => $request->rumah_sakit_id
        ]);

        return redirect()->route('dashboard')->with(['success' => 'Data Berhasil Disimpan!']);
    }
}
