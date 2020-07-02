<?php

namespace App\Http\Controllers;


use App\Models\Eloquent\BoardMember;
use App\Models\Eloquent\EventGallery;
use App\Models\Eloquent\JobPosting;
use App\Models\Eloquent\NewsEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class FrontendController extends Controller
{

    public function aboutUs()
    {
        return view("pages.home");
    }

    public function newsEvents()
    {
        $events = NewsEvent::query()
            ->orderBy("id", "DESC")
            ->paginate(8);

        return view("pages.news-events")->with(["events" => $events]);
    }

    public function eventDetail($id)
    {
        $event = NewsEvent::find($id);
        return view("pages.event-details")->with(["event" => $event]);
    }

    public function mediaGallery()
    {
        $galleries = EventGallery::query()
            ->orderBy("id", "DESC")
            ->paginate(8);

        return view("pages.media-gallery")->with(["galleries" => $galleries]);
    }

    public function boardMembers()
    {
        $boardMembers = BoardMember::query()->paginate(8);
        return view("pages.board-members")
            ->with(["board_members" => $boardMembers]);
    }

    public function contactUs()
    {
        return view("pages.contact-us");
    }

    public function sendEmail(Request $request)
    {
        $request = $request->all();
        $validator = Validator::make($request, [
            "name" => "required",
            "email" => "required|email",
            "subject" => "required",
            "message" => "required",
        ]);
        if ($validator->fails()) {
            return redirect("/contact-us")->with(["errors" => $validator->errors()]);
        }

        $data = [
            "name" => $request["name"],
            "subject" => $request["subject"],
            "email" => $request["email"],
            "message" => $request["message"],
            "to_name" => "Pakistan Chapter Admin",
            "to_email" => env("CONTACT_EMAIL")
        ];
        Mail::send([], [], function ($mail) use ($data) {
            $mail->to($data["to_email"], $data["to_name"])
                ->subject($data["subject"]);
            $mail->from($data["email"], $data["name"]);
            $mail->setBody($data["message"], 'text/html');
        });
        return redirect("contact-us")->with('message', 'success|Thank you, Your inquiry is very important for us. Our team contact you soon.');;
    }

    public function jobOpportunities()
    {
        $jobs = JobPosting::query()
            ->orderBy("id", "DESC")
            ->paginate(8);
        return view("pages.job-opportunities")->with(["jobs" => $jobs]);
    }

    public function jobDetails($id)
    {
        $jobDetails = JobPosting::find($id);
        return view("pages.job-details")->with(["job" => $jobDetails]);
    }

    public function joinUs()
    {
        return view("pages.join-us");
    }
}