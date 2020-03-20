<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Eloquent\BoardMember;

class BoardMemberController extends Controller
{
    public function getAllBoardMembers(Request $request)
    {
        $boardMembers = BoardMember::query()->paginate(10);
        return view("pages.admin.admin_board_members")
            ->with(["data" => $boardMembers]);
    }

    public function loadEditView($view, $id)
    {
        if ($view === "create") {
            return view("pages.admin.create_update_board_member")->with(["member" => []]);;
        } else {
            $boardMember = BoardMember::find($id);
            return view("pages.admin.create_update_board_member")
                ->with(["member" => $boardMember]);
        }
    }

    public function saveBoardMember(Request $request)
    {
        $request = $request->all();
        $boarMember = new BoardMember($request);
        $boarMember->save();

        if (!empty($boarMember->id)) {
            return redirect("/admin/board-members")
                ->with('message', 'success|Congregations! Create success fully.');
        }
        return view("pages.admin.admin_board_members")
            ->with('message', 'danger|Whoops! Something went wrong.');
    }

    public function updateBoardMember($id, Request $request)
    {
        $boardMembers = BoardMember::find($id);
        if ($boardMembers->update($request->all())) {
            return redirect("/admin/board-members")
                ->with('message', 'success|Congregations! Update success fully.');
        }
        return view("pages.admin.admin_board_members")
            ->with('message', 'danger|Whoops! Something went wrong.');
    }

    public function destroyBoardMember($id)
    {
        $boardMember = BoardMember::find($id);
        $boardMember->delete();
        return redirect("/admin/board-members")
            ->with('message', 'success|Congregations! Delete success fully.');
    }
}