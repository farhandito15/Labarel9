<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        return view('customer.index', [
            'customer' => Customer::all(),
        ]);
    }

    public function create()
    {
        return view('customer.create');
    }

    public function store(Request $request)
    {
        try {
            Customer::create($request->only([
                'nama',
                'no_ktp',
                'no_hp',
                'gender',
                'alamat',
            ]));
        } catch (\Throwable $th) {
            return redirect()->with('error', 'Gagal menambahkan data: ' . $th->getMessage());
        }

        return redirect()->back()->with('success', 'Berhasil menambahkan data');
    }

    public function edit(Customer $customer)
    {
        return view('customer.edit', [
            'customer' => $customer,
        ]);
    }

    public function update(Customer $customer, Request $request)
    {
        try {
            $customer->update($request->only([
                'nama',
                'no_ktp',
                'no_hp',
                'gender',
                'alamat',
            ]));
        } catch (\Throwable $th) {
            return redirect()->with('error', 'Gagal memperbarui data: ' . $th->getMessage());
        }

        return redirect()->back()->with('success', 'Berhasil memperbarui data');
    }

    public function destroy(Customer $customer)
    {
        try {
            $customer->delete();
        } catch (\Throwable $th) {
            return redirect()->with('error', 'Gagal menghapus data: ' . $th->getMessage());
        }

        return redirect()->back()->with('success', 'Berhasil menghapus data');
    }
}
