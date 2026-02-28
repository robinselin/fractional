<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreQualifierRequest;
use App\Mail\QualifierSubmitted;
use App\Models\QualifierSubmission;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Mail;

class QualifierController extends Controller
{
    public function store(StoreQualifierRequest $request): JsonResponse
    {
        $submission = QualifierSubmission::create($request->validated());

        Mail::to('robin@fractional.sh')->send(new QualifierSubmitted($submission));

        return response()->json(['message' => 'Submission received.'], 201);
    }
}
