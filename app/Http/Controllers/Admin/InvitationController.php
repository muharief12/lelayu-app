<?php

namespace App\Http\Controllers;

use App\Http\Requests\Invitation as RequestsInvitation;

use App\Models\Invitation;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $invitations = Invitation::with(['user'])->get();

        return view('dashboard.index', compact('invitations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RequestsInvitation $request)
    {
        $data = $request->all();
        Invitation::create($data);

        return redirect()->route('dashboard.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, $id)
    {
        $invitation = Invitation::with(['user'])->findOrFail($id);
        // $ripAt = $invitation['rip_date']->isoFormat('dddd, D MMMM Y');
        // // "Minggu, 28 Juni 2020"
        $dt = Carbon::create($invitation->rip_date);
        $rip_day = $dt->isoFormat('dddd');
        $rip_date = $dt->isoFormat('D MMMM Y');
        $burialTime = Carbon::create($invitation->burial_time)->isoFormat('HH:mm');
        $ripTime = Carbon::create($invitation->rip_time)->isoFormat('HH:mm');

        $families = explode(",",$invitation->abandoned_family);


        return view('dashboard.show', compact('invitation', 'rip_date', 'rip_day', 'ripTime', 'burialTime', 'families'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id)
    {
        $invitation = Invitation::with(['user'])->where('users_id', Auth::user()->id)->findOrFail($id);

        return view('dashboard.edit', compact('invitation'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $item = Invitation::findOrFail($id);
        $item->update($data);

        return redirect()->route('dashboard.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Invitation $invitation)
    {
        $invitation->delete();

        return redirect()->route('dashboard.index');
    }
}
