<?php

namespace App\Http\Controllers;

use Spatie\Browsershot\Browsershot;

class OgImageController extends Controller
{
    public function download(): \Symfony\Component\HttpFoundation\Response
    {
        $image = Browsershot::url(route('og-image'))
            ->windowSize(1200, 630)
            ->deviceScaleFactor(2)
            ->waitUntilNetworkIdle()
            ->screenshot();

        $filename = 'og-image_'.now()->format('Y-m-d_H-i-s').'.png';

        return response($image, 200, [
            'Content-Type' => 'image/png',
            'Content-Disposition' => 'attachment; filename="'.$filename.'"',
        ]);
    }

    public function downloadLinkedin(): \Symfony\Component\HttpFoundation\Response
    {
        $format = request()->query('format', 'horizontal');
        $isSquare = $format === 'square';

        $image = Browsershot::url(route('og-linkedin'))
            ->windowSize(1200, $isSquare ? 1200 : 627)
            ->deviceScaleFactor(2)
            ->waitUntilNetworkIdle()
            ->select($isSquare ? '.ad-card-square' : '.ad-card')
            ->screenshot();

        $suffix = $isSquare ? '1200x1200' : '1200x627';
        $filename = "fractional-linkedin-ad_{$suffix}_".now()->format('Y-m-d_H-i-s').'.png';

        return response($image, 200, [
            'Content-Type' => 'image/png',
            'Content-Disposition' => 'attachment; filename="'.$filename.'"',
        ]);
    }
}
