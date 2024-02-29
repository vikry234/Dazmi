<?php

namespace App\Http\Controllers;

use App\Models\Sarana;
use Illuminate\Http\Request;

class saranasController extends Controller
{
    public function index()
    {
        return view('admin.saranas.index', [
            'saranas' => Sarana::Latest()->get()
        ]);
    }

    public function create()
    {
        return view('admin.saranas.create');
    }


    public function store(Request $request)
    {
        $rules = [
            'image' => 'required|max:1000|mimes:jpg,jpeg,png,webp',
            'judul' => 'required',
            'desc' => 'required'
        ];

        $messages = [
            'image.required' => 'Image wajib diisi!',
            'judul.required' => 'Judul wajib diisi!',
            'desc.required' => 'Desc wajib diisi!',
        ];

        $this->validate($request, $rules, $messages);

        $fileName = time() . '.' . $request->image->extension();
        $request->file('image')->storeAs('public/saranas', $fileName);

        Sarana::create([
            'judul' => $request->judul,
            'image' => $fileName,
            'desc' => $request->desc,
        ]);

        return redirect(route('saranas'))->with('success', 'photo saranas berhasil di simpan');
    }

    public function update(Request $request, $id)
    {
        $saranas = Sarana::find($id);

        $rules = [
            'judul' => 'required',
            'image' => 'nullable|max:1000|mimes:jpg,jpeg,png',
            'desc' => 'required',
        ];

        $messages = [
            'judul.required' => 'Judul wajib diisi!',
            'image.mimes' => 'Format gambar harus jpg, jpeg, atau png.',
            'desc.required' => 'Deskripsi wajib diisi!',
        ];

        $this->validate($request, $rules, $messages);

        // Jika ada image baru, simpan dan hapus file lama
        if ($request->hasFile('image')) {
            $fileName = time() . '.' . $request->image->extension();
            $request->file('image')->storeAs('public/saranas', $fileName);
            if (\File::exists('storage/saranas/' . $saranas->image)) {
                \File::delete('storage/saranas/' . $saranas->image);
            }
        } else {
            // Jika tidak ada image baru, gunakan nama file lama
            $fileName = $saranas->image;
        }

        // Update data
        $saranas->update([
            'judul' => $request->judul,
            'image' => $fileName, // Gunakan nama file baru atau lama
            'desc' => $request->desc
        ]);

        return redirect(route('saranas'))->with('success', 'Foto sarana berhasil diperbarui');
    }


    public function destroy($id)
    {
        $saranas = Sarana::find($id);
        if (\File::exists('storage/saranas/' . $saranas->image)) {
            \File::delete('storage/saranas/' . $saranas->image);
        }

        $saranas->delete();

        return redirect(route('saranas'))->with('success', 'photo saranas berhasil di hapus');
    }
}
