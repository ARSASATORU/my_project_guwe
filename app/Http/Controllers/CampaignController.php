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
        Campaign::create($request->all());

        return redirect('/campaign');
    }

    public function edit($id)
    {
        $edit = Campaign::findOrFail($id);

        $campaigns = Campaign::all();

        return view('campaign.index', compact('edit', 'campaigns'));
    }

    public function update(Request $request, $id)
    {
        $campaign = Campaign::findOrFail($id);

        $campaign->update($request->all());

        return redirect('/campaign');
    }

    public function destroy($id)
    {
        Campaign::destroy($id);

        return redirect('/campaign');
    }
}