<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HubungiController extends Controller
{
    public function index()
    {
        return view('hubungi');
    }

    public function kirim(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'pesan' => 'required',
            'g-recaptcha-response' => 'required'
        ]);

        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => '6LehGvQrAAAAAI3A625SYPj3ualu7bvcL-_B1e6A',
            'response' => $request->input('g-recaptcha-response'),
        ]);

        $result = $response->json();

        if (!($result['success'] ?? false)) {
            return back()->withErrors(['recaptcha' => 'Verifikasi reCAPTCHA gagal, silakan coba lagi.']);
        }

        // logika simpan data / kirim email di sini
        return back()->with('success', 'Pesan Anda berhasil dikirim!');
    }
}
