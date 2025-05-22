<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\File;

class CacheController extends Controller
{
    public function clear(Request $request)
    {
        // Security: Restrict with token or auth
        if ($request->query('token') !== 'your-secret-token') {
            abort(403, 'Unauthorized');
        }

        try {
            // Clear application cache
            Cache::flush();
            Artisan::call('cache:clear');

            // Clear view cache
            $viewCachePath = storage_path('framework/views');
            if (File::exists($viewCachePath)) {
                foreach (File::files($viewCachePath) as $file) {
                    File::delete($file);
                }
            }

            // Clear config cache
            $configCachePath = base_path('bootstrap/cache/config.php');
            if (File::exists($configCachePath)) {
                File::delete($configCachePath);
            }

            return response()->json(['status' => 'success', 'message' => 'Cache and configuration cleared successfully!']);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()], 500);
        }
    }
}