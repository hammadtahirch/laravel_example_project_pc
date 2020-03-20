<?php

namespace App\Http\Controllers;

use App\Models\Eloquent\JobPosting;
use Illuminate\Http\Request;

class JobPostingController extends Controller
{
    public function getAllJobs(Request $request)
    {
        $jobs = JobPosting::query()->paginate(10);
        return view("pages.admin.admin_jobs")
            ->with(["data" => $jobs]);
    }

    public function loadEditView($view, $id)
    {
        if ($view === "create") {
            return view("pages.admin.create_update_jobs")
                ->with(["job" => []]);
        } else {
            $job = JobPosting::find($id);
            return view("pages.admin.create_update_jobs")
                ->with(["job" => $job]);
        }
    }

    public function saveJob(Request $request)
    {
        $request = $request->all();
        $job = new JobPosting($request);
        $job->save();

        if (!empty($job->id)) {
            return redirect("/admin/jobs")
                ->with('message', 'success|Congregations! Create success fully.');
        }
        return view("pages.admin.admin_jobs")
            ->with('message', 'danger|Whoops! Something went wrong.');
    }

    public function updateJob($id, Request $request)
    {
        $job = JobPosting::find($id);
        if ($job->update($request->all())) {
            return redirect("/admin/jobs")
                ->with('message', 'success|Congregations! Update success fully.');
        }
        return view("pages.admin.admin_jobs")
            ->with('message', 'danger|Whoops! Something went wrong.');
    }

    public function destroyJob($id)
    {
        $job = JobPosting::find($id);
        $job->delete();
        return redirect("/admin/jobs")
            ->with('message', 'success|Congregations! Delete success fully.');
    }
}