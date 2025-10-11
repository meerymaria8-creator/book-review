<?php

namespace App\Http\Controllers;
use App\Models\Reviews;
use Illuminate\Http\Request;

class Reviewcontroller extends Controller
{
     public function index()
    {
        return view('reviews.index');
    }

    //الداله ستور تستقبل البيانات الي جاي من الفورم وتخذنها في قادة البيانات 
    public function store(Request $request)
    //الكائن ريكويست يحتوي على كل البيانات الي ارسلها المستخدم للفورم
    {
        $data = $request->validate([
            'content' => 'required|string|max:300'
        ]);
        Reviews::create([
            'content' => $data['content'],
            'book_id' => $request['book_id'],
            'author' => 'Yazeed',
        ]);

        return redirect()->route('books.show', $request['book_id'])->with('create', 'Review added successfully!');
    }

    public function destroy(Request $request, string $id)
    {
        $review = Reviews::findOrFail($id);
        $review->delete();
        return redirect()->route('books.show', $request['book_id'])->with('delete', 'Review deleted successfully!');
    }
}
