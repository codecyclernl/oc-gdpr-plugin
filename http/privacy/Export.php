<?php namespace Codecycler\Gdpr\Http\Privacy;

use Auth;
use Renatio\DynamicPDF\Classes\PDF;

class Export
{
    public function pdf()
    {
        $data = [
            'user' => Auth::getUser(),
        ];

        return PDF::loadTemplate('privacy-download-profile', $data)
            ->stream('user-export.pdf');
    }
}