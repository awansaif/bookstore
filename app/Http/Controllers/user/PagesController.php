<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\BoardMember;
use App\Models\Faq;
use App\Models\FaqCategory;
use App\Models\Gift;
use App\Models\GiftCategory;
use App\Models\News;
use App\Models\PdfOrder;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function PdfOrderShowPage()
    {
        return view('web.pages.pdforder.index');
    }
    public function PlacePdfOrder(Request $request)
    {
        $request->validate([
            'file' => ['required', 'mimes:pdf,docx'],
            'pages' => ['required'],
            'size'  => ['required'],
            'color' => ['required'],
            'qty'   => ['required'],
        ]);

        PdfOrder::Create([
            'file' => $this->fileUpload('pdf-orders/', $request->file('file')),
            'pages' => $request->pages,
            'size'  => $request->size,
            'color' => $request->color,
            'qty'   => $request->qty
        ]);

        return back()
            ->with('message', 'Pdf order placed successfully');
    }
    public function all_gifts()
    {
        return view('web.pages.gift.index', [
            'gifts' => Gift::orderBy('title', 'ASC')->paginate(12),
            'categories' => GiftCategory::withCount('gifts')->orderBy('name', 'ASC')->get()
        ]);
    }

    public function gift($category)
    {
        $categoryId = GiftCategory::where('slug', $category)->first();
        return view('web.pages.gift.index', [
            'gifts' => Gift::with('category')->where('gift_category_id', $categoryId->id)->orderBy('id', 'desc')->paginate(12),
            'categories'  => GiftCategory::withCount('gifts')->get(),
        ]);
    }
    public function ShowGiftPage()
    {
        return view('web.pages.gift.index', [
            'gifts' => Gift::orderBy('title', 'ASC')->paginate(12),
            'categories' => GiftCategory::withCount('gifts')->orderBy('name', 'ASC')->get()
        ]);
    }
    public function showContactUsPage()
    {
        return view('web.pages.contact-us.index');
    }

    public function ShowNewsPage()
    {
        return view('web.pages.news.index', [
            'news' => News::orderBy('id', 'DESC')->get()
        ]);
    }
    public function ShowSingleNews($slug)
    {
        return view('web.pages.news.show', [
            'slug' => $slug
        ]);
    }
    public function showAboutUsPage()
    {
        return view('web.pages.about-us.index', [
            'members' => BoardMember::orderBy('id', 'DESC')->get()
        ]);
    }
    public function ShowFaqPage($cat)
    {
        if ($cat != 'all') {
            $slug = FaqCategory::where('slug', $cat)->first();
            return view('web.pages.faq.index', [
                'categories' => FaqCategory::orderBy('id', 'DESC')
                    ->get(),
                'faqs' => Faq::where('faq_category_id', $slug->id)
                    ->orderBy('id', 'DESC')
                    ->get()
            ]);
        }
        return view('web.pages.faq.index', [
            'categories' => FaqCategory::orderBy('id', 'DESC')->get(),
            'faqs' => Faq::orderBy('id', 'DESC')->get()
        ]);
    }
}
