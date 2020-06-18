<?php

namespace App\Http\Controllers;

use App\Barang;
use App\Customer;
use App\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index(Request $request)
    {
        $customer = Customer::all();
        $barang = Barang::all();
        $data = Transaksi::orderBy('id', 'DESC')->paginate(5);
        return view('transaksi.index', compact('data','customer','barang'))
            ->with('i', ($request->input('page', 1) -1) *5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customer = Customer::get()->all();
        $barang = Barang::get()->all();
        return view('transaksi.create' , compact('customer','barang'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'id_customer' => 'required',
            'id_barang' => 'required',
            'tanggal' => 'required',
        ]);
        $input = $request->all();

        $transaksi = Transaksi::create($input);
        $transaksi->id_customer = Customer::get('id');
        $transaksi->id_barang = Barang::get('id');

        return redirect()->route('transaksi.index')
            ->with('success','transaksi Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $transaksi = Transaksi::find($id);
        $barang = Barang::get()->all();
        $customer = Customer::get()->all();
        return view('transaksi.show',compact('transaksi'))->with('transaksi',$transaksi);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $transaksi = Transaksi::find($id);
        $customer = Customer::get()->all();
        $barang = Barang::get()->all();
        return view('transaksi.edit', compact('transaksi','customer','barang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'id_customer' => 'required',
            'id_barang' => 'required',
            'tanggal' => 'required',
        ]);

        $input = $request->all();

        $transaksi = Transaksi::find($id);
        $transaksi->id_customer = Customer::get('id');
        $transaksi->id_barang = Barang::get('id');
        $transaksi->update($input);

        return redirect()->route('transaksi.index')
            ->with('success','transaksi updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Transaksi::find($id)->delete();
        return redirect()->route('transaksi.index')
            ->with('success', 'transaksi Deleted');
    }
}
