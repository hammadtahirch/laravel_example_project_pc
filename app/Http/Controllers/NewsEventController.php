<?php

namespace App\Http\Controllers;

use App\Models\Eloquent\NewsEvent;
use Illuminate\Http\Request;

class NewsEventController extends Controller
{
    public function getAllNewsEvents(Request $request)
    {
        $newsEvents = NewsEvent::query()->paginate(10);
        return view("pages.admin.admin_news_events")
            ->with(["data" => $newsEvents]);
    }

    public function loadEditView($view, $id)
    {
        if ($view === "create") {
            return view("pages.admin.create_update_news_event")
                ->with(["news_event" => []]);
        } else {
            $newsEvent = NewsEvent::find($id);
            return view("pages.admin.create_update_news_event")
                ->with(["news_event" => $newsEvent]);
        }
    }

    public function saveNewsEvent(Request $request)
    {
        $request = $request->all();
        $newsEvent = new NewsEvent($request);
        $newsEvent->save();

        if (!empty($newsEvent->id)) {
            return redirect("/admin/news-events")
                ->with('message', 'success|Congregations! Create success fully.');
        }
        return view("pages.admin.admin_news_events")
            ->with('message', 'danger|Whoops! Something went wrong.');
    }

    public function updateNewsEvent($id, Request $request)
    {
        $newsEvent = NewsEvent::find($id);
        if ($newsEvent->update($request->all())) {
            return redirect("/admin/news-events")
                ->with('message', 'success|Congregations! Update success fully.');
        }
        return view("pages.admin.admin_news_events")
            ->with('message', 'danger|Whoops! Something went wrong.');
    }

    public function destroyNewsEvent($id)
    {
        $newsEvent = NewsEvent::find($id);
        $newsEvent->delete();
        return redirect("/admin/news-events")
            ->with('message', 'success|Congregations! Delete success fully.');
    }
}