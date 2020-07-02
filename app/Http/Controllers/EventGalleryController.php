<?php

namespace App\Http\Controllers;

use App\Models\Eloquent\EventGallery;
use App\Models\Eloquent\EventGalleryImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventGalleryController extends Controller
{
    public function getAllGalleries(Request $request)
    {
        $galleries = EventGallery::query()
            ->paginate(10);
        return view("pages.admin.admin_galleries")
            ->with(["data" => $galleries]);
    }

    public function loadEditView($view, $id)
    {
        if ($view === "create") {
            return view("pages.admin.create_update_gallery")
                ->with(["gallery" => []]);
        } else {
            $gallery = EventGallery::find($id);
            return view("pages.admin.create_update_gallery")
                ->with(["gallery" => $gallery]);
        }
    }

    public function saveGallery(Request $request)
    {
        $request = $request->all();
        $gallery = new EventGallery(
            [
                "title" => $request["title"] ?? null,
                "description" => $request["description"] ?? null
            ]
        );
        $gallery->save();
        if (!empty($gallery->id)) {
            return redirect("/admin/galleries")
                ->with('message', 'success|Congregations! Create success fully.');
        }
        return view("pages.admin.admin_galleries")
            ->with('message', 'danger|Whoops! Something went wrong.');
    }

    public function updateGallery($id, Request $request)
    {
        $gallery = EventGallery::find($id);
        if ($gallery->update($request->all())) {
            return redirect("/admin/galleries")
                ->with('message', 'success|Congregations! Update success fully.');
        }
        return view("pages.admin.admin_galleries")
            ->with('message', 'danger|Whoops! Something went wrong.');
    }

    public function destroyGallery($id)
    {
        $gallery = EventGallery::find($id);
        $gallery->delete();
        return redirect("/admin/galleries")
            ->with('message', 'success|Congregations! Delete success fully.');
    }

    public function getGalleryImages($gallery_id)
    {
        $galleryImages = EventGalleryImage::query()
            ->where(["egi_id" => $gallery_id])
            ->get();
        return view("pages.admin.curd_gallery_images")
            ->with(["galleryImages" => $galleryImages, "gallery_id" => $gallery_id]);
    }

    public function createGalleryImage($gallery_id, Request $request)
    {
        $request->validate([
            'image_url' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $imageName = "gallery_".time() . '.' . $request->image_url->extension();
        $request->image_url->move(public_path('images'), $imageName);
        $galleryImages = new EventGalleryImage();
        $galleryImages->egi_id = $gallery_id;
        $galleryImages->img_url = $imageName;
        $galleryImages->save();

        return redirect("/admin/gallery-image/{$gallery_id}/images")
            ->with('message', 'success|Congregations! Delete success fully.');
    }

    public function deleteGalleryImage($gallery_id, $image_id)
    {
        $galleryImage = EventGalleryImage::find($image_id);
        $galleryImage->delete();
        return redirect("/admin/gallery-image/{$gallery_id}/images")
            ->with('message', 'success|Congregations! Delete success fully.');
    }
}
