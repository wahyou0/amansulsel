<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        if($user = Auth::user()){
            if ($user->level == '1') {
                return redirect()->intended('map');
            } elseif ($user->level == '2') {
                return redirect()->intended('dashboard');
            }
        }

        return view('login');
    }

    public function proseslogin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ],
            [
                'username.required' => 'Username tidak boleh kosong',
                'password.required' => 'Password tidak boleh kosong',
            ]    
        );

        $kredensial = $request->only('username','password');

        if(Auth::attempt($kredensial)) {
            $request->session()->regenerate();
            $user = Auth::user();
            if ($user->level == '1') {
                return redirect()->intended('map');
            } elseif ($user->level == '2') {
                return redirect()->intended('dashboard');
            }

            return redirect()->intended('/');
        }

        return back()->withErrors([
            'username' => 'username atau password anda salah',
        ])->onlyInput('username');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }

    public function register(Request $request) 
    {
        return view('register');
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'username' => 'required|unique:users,username',
            'email' => 'required|email',
            'password' => 'required|min:6',
        ],
            [
                'username.required' => 'Username tidak boleh kosong',
                'username.unique' => 'Username sudah terdaftar gunakan username yang lain',  
                'email.required' => 'email tidak boleh kosong',  
                'email.email' => 'format salah, tambahkan @, contoh@exsample.com',
                'password.required' => 'password tidak boleh kosong',
                'password.min' => 'password minimal 6 karakter',
                
            ],  
        );

        User::create([
            'name' => $request['name'],
            'username' => $request['username'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'level' => $request['level'],
        ]);

        $kredensial = $request->only('username','password');

        if(Auth::attempt($kredensial)) {
            $request->session()->regenerate();
            $user = Auth::user();
            if ($user->level == '1') {
                return redirect()->intended('map');
            } elseif ($user->level == '2') {
                return redirect()->intended('dashboard');
            }

            return redirect()->intended('/');
        }

        return back()->withErrors([
            'username' => 'username atau password anda salah',
        ])->onlyInput('username');
    }

    public function daftarUser()
    {
        $user = User::all();

        return view('admin.user.index', compact('user'));
    }

    public function destroy($id)
    {
        $data = User::find($id);
        if ($data->delete()) {
            return redirect('daftar-user')->with('success', 'User Telah di Hapus');
        } else {
            return back()->with(['Gagal', 'hapus User gagal']);
        }
    }

    public function register_user()
    {
        return view('register_user');
    }

    public function create_user(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'username' => 'required|unique:users,username',
            'email' => 'required|email',
            'password' => 'required|min:6',
        ],
            [
                'username.required' => 'Username tidak boleh kosong',
                'username.unique' => 'Username sudah terdaftar gunakan username yang lain',  
                'email.required' => 'email tidak boleh kosong',  
                'email.email' => 'format salah, tambahkan @, contoh@exsample.com',
                'password.required' => 'password tidak boleh kosong',
                'password.min' => 'password minimal 6 karakter',
                
            ],  
        );

        User::create([
            'name' => $request['name'],
            'username' => $request['username'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'level' => $request['level'],
        ]);

        $kredensial = $request->only('username','password');

        if(Auth::attempt($kredensial)) {
            $request->session()->regenerate();
            $user = Auth::user();
            if ($user->level == '1') {
                return redirect()->intended('map');
            } elseif ($user->level == '2') {
                return redirect()->intended('dashboard');
            }

            return redirect()->intended('/');
        }

        return back()->withErrors([
            'username' => 'username atau password anda salah',
        ])->onlyInput('username');
    }

}
