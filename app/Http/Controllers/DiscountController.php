<?php

namespace App\Http\Controllers;

use App\Http\Requests\DiscountRequest;
use Illuminate\Http\Request;
use App\Models\Discount;

class DiscountController extends Controller
{
    public function index() {
        $discounts = Discount::all();
        return view('admin.discount.list',compact('discounts'));
    }

    public function create() {
        return view('admin.discount.create');
    }

    public function store(DiscountRequest $request) {
        $discount = new Discount([
            'amount' => $request->input('amount'),
            'description' => $request->input('description'),
            'start_time' => $request->input('start_time'),
            'expire_time' => $request->input('expire_time')
        ]);

        $discount->save();

        return redirect()->route('discount.index')->with('success','تخفیف با موفقیت ایجاد شد!');
    }
 
    public function show($id) {

    }

    public function edit($id) {
        $discount = Discount::findOrFail($id);
        return view('admin.discount.edit', compact('discount'));
    }

    public function update(DiscountRequest $request,$id) {
        $discount = Discount::findOrFail($id);
        $discount->update([
            'amount' => $request->input('amount'),
            'description' => $request->input('description'),
            'start_time' => $request->input('start_time'),
            'expire_time' => $request->input('expire_time')
        ]);

        return redirect()->route('discount.index')->with('success','تخفیف با موفقیت ویرایش گردید!');
    }

    public function destroy($id) {
        $discount = Discount::find($id);
        $discount->delete();
        return redirect()->route('discount.index')->with('success','حذف تخفیف با موفقیت انجام گردید!');
    }
}
