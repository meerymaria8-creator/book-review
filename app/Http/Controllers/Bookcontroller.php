<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Http\Requests\Bookrequest;
class BookController extends Controller
{
    public function index()
    {
        $books = Book::latest()->get();
        return view('books.index', compact("books"));
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(bookrequest $request)
        //الريكويست محفوظ فيها البيانات الي جاءت من الفورم
    {   $data = $request->validated();
        //الفاليديت استدعيناه يتحقق لي من الرولز الي بالريكويست بوك كلاس  ويحفظهم داخل داتا المتغير
        Book::create($data);
        //ننشئ سجل حديد في الموديل في قاعدة البيانات في الجدول بوك وحننسيرتها للتتيبل وتنحفظ هناك
        return redirect()->route('books.index')->with('create', 'Book created successfully!');
        // الريديكت هون لحتى بعد ما المستخدم خلص من الكريات بوك يرجع لصفحة البوكس كلهم
        //والويذ عشان نعطي المستخدم لرسالة انه تمت العملية بنجاح
        
    }
    public function show($id){
        $book=Book::fileinode($id);
        //نروح لقاعدة البيانات البوك ونبحث عن كتاب برقمه الايدي تاعه از باراميتر
        //فايند اور فيل اذا لقو الكتاب يعرضوه واذا لا 404 نوت فاوند
        return view ('books.show', compact('book'));
        //نعرض البانات على الشو 
        //الكومبكت داله تحول المتغيرات لمصفوفة حتى نقدر نرسلها للفيو بسهولة 
        
    }
}
