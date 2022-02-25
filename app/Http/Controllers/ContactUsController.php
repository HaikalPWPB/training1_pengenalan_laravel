<?php

namespace App\Http\Controllers;

use App\Http\Requests\KirimPesanRequest;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function formContactUs() {
        $data['judul'] = 'Contact Us';

        return view('contact-us.form', $data);
    }

    public function kirimPesan(KirimPesanRequest $request) {
        $contactUs = new ContactUs;
        $contactUs->nama = $request->nama;
        $contactUs->email = $request->email;
        $contactUs->pesan = $request->pesan;
        $contactUs->save();

        return redirect()->route('form-contact-us')->with('success', 'Berhasil Mengirim Pesan, Harap Untuk Menunggu Informasi Dari Admin!');
    }
}
