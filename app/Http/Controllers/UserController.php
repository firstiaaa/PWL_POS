<?php 
 
namespace App\Http\Controllers; 
 
use App\Models\UserModel; 
use App\DataTables\UserDataTable;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Hash; 
 
class UserController extends Controller 
{ 
    public function index(UserDataTable $dataTable) 
    { 
        return $dataTable->render('user.index'); 
    } 
    public function create() { 
        return view('user.create');  
     } 
  
     public function store(Request $request)
{
    // Melakukan validasi data
    $request->validate([
        'username' => 'required',
        'nama' => 'required',
        'password' => 'required',
        'level_id' => 'required|exists:m_level,level_id',
    ]);

    // Simpan data pengguna ke dalam basis data
    UserModel::create([
        'username' => $request->username,
        'nama' => $request->nama,
        'password' => Hash::make($request->password),
        'level_id' => $request->level_id,
    ]);

    return redirect()->route('user.index')->with('success', 'User berhasil ditambahkan');
}

 
    public function edit($id) 
    { 
        $user = UserModel::find($id); 
        return view('user.edit', ['data' => $user]); 
    } 
 
    public function edit_simpan($id, Request $request) 
{ 
    $request->validate([
        'username' => 'required',
        'nama' => 'required',
        'password' => 'required',
        'level_id' => 'required|exists:m_level,level_id',
    ]);

    $user = UserModel::find($id);

    $user->username = $request->username;
    $user->nama = $request->nama;
    $user->password = Hash::make($request->password);
    $user->level_id = $request->level_id;

    $user->save();

    return redirect()->route('user.index')->with('success', 'Data pengguna berhasil diperbarui');
}
 
    public function delete($id) 
    { 
        $user = UserModel :: find($id); 
        $user->delete(); 
 
        return redirect('/user'); 
    } 

    // public function index()
    // {
    //   $user = UserModel::all();
    //    return view('user', ['data' => $user]);
    // }

    // public function tambah()
    // {
    //     return view('user_tambah');
    // }

    // public function tambah_simpan(Request $request)
    // {
    //     UserModel::create([
    //         'username' => $request->username,
    //         'nama' => $request->nama,
    //         'password' => Hash::make('$request->password'),
    //         'level_id' => $request->level_id
    //     ]);
    //     return redirect('/user');
    //     return view('user_tambah');
    // }
    // public function ubah ($id)
    // {
    //     $user = UserModel::find($id);
    //     return view('user_ubah', ['data' => $user]);
    // }
    // public function ubah_simpan($id, Request $request)
    // {
    //     $user = UserModel::find($id);

    //     $user->username = $request->username;
    //     $user->nama = $request->nama;
    //     $user->password = Hash::make('$request->password');
    //     $user->level_id = $request->level_id;

    //     $user->save();
    //     return redirect('/user');
    // }
    // public function hapus($id)
    // {
    //     $user = UserModel::find($id);
    //     $user->delete();

    //     return redirect('/user');
    // }

    // // public function index()
    // // {
    // //     $user = UserModel::with('level')->get();
    // //     dd($user);
    // // }

    // public function index ()
    // {
    //     $user = UserModel::with('level')->get();
    //     return view('user', ['data' => $user]);
    // }





    // //fillable
    // public function tambah_simpan(Request $request)
    // {
    //     UserModel::create([
    //         'username' => 'manager-dua',
    //         'nama' => 'manager 2',
    //         'password' => Hash::make('12345'),
    //         'level_id' => 2
    //     ]);
    //     return redirect('/user');
    // }
    // //not found exceptions
    // public function index2()
    // {
    //     $user = UserModel::findOrFail((1));
    //     return view('user',['data' => $user]);
    // }
    // //Retreiving or Creating Models
    // public function index3()
    // {
    //     $user = UserModel::firstOrCreate(
    //         [
    //         'username' => 'manager',
    //         'nama' => 'manager'
    //         ],
    //     );
    //     return view('user', ['data'=>$user]);}

}