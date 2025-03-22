<?php

namespace App\Http\Controllers;

use App\Models\BanhMiHtml;
use Illuminate\Http\Request;

class BanhMiController extends Controller
{
    // GET /banhmi
    public function index()
    {
        $banhMis = BanhMiHtml::all();
        return view('banhmi.index', compact('banhMis'));
    }

    // GET /banhmi/{id}/edit
    public function edit($id)
    {
        $banhMi = BanhMiHtml::findOrFail($id);
        return view('layout.edit', compact('banhMi'));
    }

    // PUT /banhmi/{id}
    public function update(Request $request, $id)
    {
        // Validate nếu cần
        // $request->validate([...]);

        $banhMi = BanhMiHtml::findOrFail($id);
        $banhMi->update([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'image_url' => $request->image_url,
            'detail_url' => $request->detail_url
        ]);

        return redirect()->route('banhmi.index')->with('success', 'Cập nhật thành công');
    }

    // DELETE /banhmi/{id}
    public function destroy($id)
    {
        BanhMiHtml::destroy($id);
        return redirect()->route('banhmi.index')->with('success', 'Đã xóa món bánh mì');
    }
}