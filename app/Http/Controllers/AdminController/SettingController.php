<?php

namespace App\Http\Controllers\AdminController;

use App\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class SettingController extends Controller
{
    /**
     * get the main date of site to view or update it
     *
     * @return void
     */
    public function index()
    {
        $settings = Setting::first();
        return view('admin.settings.index', compact('settings'));
    }

    /**
     * update settings to the storage
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'email'         => 'nullable|email',
            'phone'         => 'required|starts_with:00966',
            'payment_value' => 'required|numeric',
        ]);
        $record = Setting::find(1);
        $record->update([
            'phone'         => $request->phone ?? $record->phone,
            'email'         => $request->email ?? $record->email,
            'payment_value' => $request->payment_value ?? $record->payment_value,
        ]);
        return back()->with('success', 'تم حفظ البيانات بنجاح');
    }
}