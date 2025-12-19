<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PageView;
use App\Models\Blog;
use App\Models\Product;
use App\Models\Sop;
use Carbon\Carbon;

class AdminController extends Controller
{
    /**
     * Show admin dashboard
     */
    public function index()
    {
        // Get view statistics
        $totalViews = PageView::getTotalViews();
        $todayViews = PageView::getTodayViews();
        $weekViews = PageView::getWeekViews();
        $monthViews = PageView::getMonthViews();

        // Get content counts
        $totalProducts = Product::count();
        $totalBlogs = Blog::count();
        $totalSops = Sop::count();

        // Get daily views for last 7 days
        $chartLabels = [];
        $chartData = [];

        for ($i = 6; $i >= 0; $i--) {
            $date = Carbon::now()->subDays($i)->format('Y-m-d');
            $chartLabels[] = Carbon::now()->subDays($i)->format('D, M j');

            $viewCount = PageView::whereDate('viewed_at', $date)->count();
            $chartData[] = $viewCount;
        }

        return view('pages.admin.dashboardadmin', compact(
            'totalViews',
            'todayViews',
            'weekViews',
            'monthViews',
            'totalProducts',
            'totalBlogs',
            'totalSops',
            'chartLabels',
            'chartData'
        ));
    }

    /**
     * Show statistics page
     */
    public function statistics()
    {
        // Get view statistics
        $totalViews = PageView::getTotalViews();
        $todayViews = PageView::getTodayViews();
        $weekViews = PageView::getWeekViews();
        $monthViews = PageView::getMonthViews();

        // Get popular pages
        $popularPages = PageView::getPopularPages(10);

        // Get daily views for last 30 days
        $dailyViews = PageView::selectRaw('DATE(viewed_at) as date, COUNT(*) as views')
            ->where('viewed_at', '>=', Carbon::now()->subDays(29)->startOfDay())
            ->groupBy('date')
            ->orderBy('date')
            ->get();

        // Get monthly views for current year
        $monthlyViews = PageView::selectRaw('MONTH(viewed_at) as month, COUNT(*) as views')
            ->whereYear('viewed_at', Carbon::now()->year)
            ->groupBy('month')
            ->orderBy('month')
            ->get();

        return view('pages.admin.statistics', compact(
            'totalViews',
            'todayViews',
            'weekViews',
            'monthViews',
            'popularPages',
            'dailyViews',
            'monthlyViews'
        ));
    }
}
