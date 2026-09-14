<?php
namespace App\Http\Controllers;
use App\Support\CourseCatalog;
use App\Support\Glossary;
use App\Support\QuizBank;
use Illuminate\Http\Request;
class LearningController extends Controller
{
    public function home() { $lessons=CourseCatalog::lessons(); return view('home', compact('lessons')); }
    public function materials(Request $request) {
        $lessons=CourseCatalog::lessons(); $q=trim((string)$request->query('q'));
        if($q!=='') $lessons=array_values(array_filter($lessons,fn($l)=>str_contains(mb_strtolower($l['title'].' '.$l['level'].' '.implode(' ',$l['objectives'])),mb_strtolower($q))));
        return view('materials.index',compact('lessons','q'));
    }
    public function lesson(string $slug) {
        $lessons=CourseCatalog::lessons(); $lesson=CourseCatalog::find($slug); abort_unless($lesson,404);
        $i=array_search($slug,array_column($lessons,'slug'),true);
        $previous=$i>0?$lessons[$i-1]:null; $next=$i<count($lessons)-1?$lessons[$i+1]:null;
        return view('materials.show',compact('lesson','previous','next'));
    }
    public function practicum() { return view('practicum', ['lessons'=>CourseCatalog::lessons()]); }
    public function quiz() { return view('quiz', ['questions'=>QuizBank::questions()]); }
    public function glossary(Request $request) {
        $items=Glossary::items(); $q=trim((string)$request->query('q'));
        if($q!=='') $items=array_filter($items,fn($v,$k)=>str_contains(mb_strtolower($k.' '.$v),mb_strtolower($q)),ARRAY_FILTER_USE_BOTH);
        return view('glossary',compact('items','q'));
    }
    public function playground() { return view('playground'); }
    public function about() { return view('about'); }
}
