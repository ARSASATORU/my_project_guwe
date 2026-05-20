<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Campaign;

class CampaignController extends Controller
{
    public function index()
    {
        $campaigns = Campaign::all();

        return view('campaign.index', compact('campaigns'));
    }

    public function create()
    {
        return view('campaign.index');
    }

    public function store(Request $request)
    {
        $request->validate([

            'title' => 'required',

            'description' => 'required',

            'target_donation' => 'required|numeric',

            'collected_donation' => 'required|numeric',

            'deadline' => 'required'

        ]);

        Campaign::create([

            'title' => $request->title,

            'description' => $request->description,

            'target_donation' => $request->target_donation,

            'collected_donation' => $request->collected_donation,

            'deadline' => $request->deadline

        ]);

        return redirect('/campaign')
            ->with('success', 'Campaign berhasil ditambahkan');
    }

    public function edit($id)
    {
        $edit = Campaign::findOrFail($id);

        $campaigns = Campaign::all();

        return view('campaign.index', compact('edit', 'campaigns'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([

            'title' => 'required',

            'description' => 'required',

            'target_donation' => 'required|numeric',

            'collected_donation' => 'required|numeric',

            'deadline' => 'required'

        ]);

        $campaign = Campaign::findOrFail($id);

        $campaign->update([

            'title' => $request->title,

            'description' => $request->description,

            'target_donation' => $request->target_donation,

            'collected_donation' => $request->collected_donation,

            'deadline' => $request->deadline

        ]);

        return redirect('/campaign')
            ->with('success', 'Campaign berhasil diupdate');
    }

    public function destroy($id)
    {
        Campaign::destroy($id);

        return redirect('/campaign')
            ->with('success', 'Campaign berhasil dihapus');
    }
}