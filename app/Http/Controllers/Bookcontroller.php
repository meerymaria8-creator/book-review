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
        $book=Book::findOrFail($id);
        //نروح لقاعدة البيانات البوك ونبحث عن كتاب برقمه الايدي تاعه از باراميتر
        //فايند اور فيل اذا لقو الكتاب يعرضوه واذا لا 404 نوت فاوند
        return view ('books.show', compact('book'));
        //نعرض البانات على الشو 
        //الكومبكت داله تحول المتغيرات لمصفوفة حتى نقدر نرسلها للفيو بسهولة 
        //ال$بوك يحتوي على كل الداتا فيلد الي بالداتا بيس لكتاب معين وبيرسلها للفيو
        
    }
    public function edit($id){
        $book = Book::findOrFail($id);
        return view('books.edit', compact('book'));
    }
    //الدالة هاي بتسقبل الريكويست  البيانات الي جايه  من الكلاس والاي دي رقم الكتاب 
    public function update(Bookrequest $request, string $id){
        $validated = $request->validated();
        // يتحقق من البيانات وصحتها كفاليديت 
        //، بعد التحقق بيرجع البيانات كمصفوفة 
        $book = Book::findOrFail($id);
        //بيبحث في قاعدة البيانات عن الكتاب برقم الي دي تاعه ويتاكد لو موجود ويتخزن في هذا المتغير 
        // ولو مش موجود 404
        $book->update($validated);
        // هون عملية الابديت باخذهم من الفاليديت ويحدثهم في قاعدة البيانات 
        return redirect()->route('books.index')->with('update', 'Book updated successfully!');
        //هون بيرجع المستخدم لصفحة البوك مع راسله نجاح الابديت 
    }
    // هاي الداله تحذف لي كتاب لما المستخخدم يضغط حذف  تستقبل رقم الكتاب 
    public function destroy($id){
        $book = Book::findOrFail($id);
        //تدور على الكتاب قي القاعدة البيانات  وتخذنه في المتغير بوك لو موجود ولو مشش موجود 404
        $book->delete();
        //عمليه حذف الكتاب 
        return redirect()->route('books.index')->with('delete', 'Book deleted successfully!');

    }
}
