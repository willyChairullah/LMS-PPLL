<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Models\MemberClass;
use App\Models\Post;
use App\Models\Submission;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClassroomController extends Controller
{
    public function index()
    {
        $user_id = Auth::user()->id;
        $user = User::find($user_id);
        $classrooms = Classroom::with("user")->withCount("members")->where("user_id", $user_id)
            ->orWhereHas("members", function ($q) use ($user_id) {
                $q->where("user_id", $user_id);
            })
            ->get();
        return view("home.index", compact("classrooms"));
    }

    public function create()
    {
        return view("classroom.create");
    }

    public function store(Request $request)
    {
        $validation = $request->validate([
            "name" => "required",
            "description" => "required"
        ]);

        try {
            $validation["user_id"] = Auth::user()->id;
            $validation["code"] = $this->getRandomString(6);
            $validation["color"] = $this->getRandomColor();

            Classroom::create($validation);
            return redirect()->route("home");
        } catch (\Throwable $th) {
            return redirect()->back();
        }
    }
}
