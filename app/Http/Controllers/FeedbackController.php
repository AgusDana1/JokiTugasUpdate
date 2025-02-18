<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class FeedbackController extends Controller
{
    public function sendFeedback(Request $request)
    {
        // validasi kiriman user
        $request->validate([
            'name' => 'required',
            'message' => 'required',
        ]);

        // Mengecek email user
        $user = Auth::user();

        // memasukan ke data dari kiriman user
        $data = [
            'name' => $request->name,
            'email' => $user->email,
            'user_message' => $request->message,
        ];

        // mengirimkan ke email admin hasil dari inputan user yang telah dimasukan ke variable data
        Mail::send('emails.feedback', $data, function ($mail) use ($data) {
            $mail->to('galverzxxy@gmail.com')
                ->subject('Feedback Baru dari Pengguna')
                ->replyTo($data['email']);
        });

        // memberikan return berhasil bahwa feedback berhasil dikirim
        return back()->with('success', 'Feedback berhasil dikirim!');
    }
}
