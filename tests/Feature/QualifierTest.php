<?php

use App\Mail\QualifierSubmitted;
use Illuminate\Support\Facades\Mail;

function validSubmission(array $overrides = []): array
{
    return array_merge([
        'role' => 'Founder/CEO',
        'engagement_type' => 'Co-founder who builds',
        'stage' => 'Pre-revenue',
        'buying_history' => 'No, first time',
        'bottleneck' => 'Too many meetings',
        'timing_driver' => 'Hard deadline',
        'email' => 'test@example.com',
    ], $overrides);
}

it('stores a qualifier submission', function () {
    Mail::fake();

    $this->postJson('/qualifier', validSubmission())
        ->assertCreated()
        ->assertJson(['message' => 'Submission received.']);

    $this->assertDatabaseHas('qualifier_submissions', [
        'role' => 'Founder/CEO',
        'engagement_type' => 'Co-founder who builds',
        'stage' => 'Pre-revenue',
        'buying_history' => 'No, first time',
        'bottleneck' => 'Too many meetings',
        'timing_driver' => 'Hard deadline',
        'email' => 'test@example.com',
    ]);

    Mail::assertSent(QualifierSubmitted::class, function ($mail) {
        return $mail->hasTo('robin@fractional.sh');
    });
});

it('stores a submission without bottleneck', function () {
    Mail::fake();

    $this->postJson('/qualifier', validSubmission(['bottleneck' => null]))
        ->assertCreated();

    $this->assertDatabaseHas('qualifier_submissions', [
        'role' => 'Founder/CEO',
        'bottleneck' => null,
    ]);
});

it('requires all fields except bottleneck', function (string $field) {
    $data = validSubmission();
    unset($data[$field]);

    $this->postJson('/qualifier', $data)
        ->assertUnprocessable()
        ->assertJsonValidationErrors($field);
})->with(['role', 'engagement_type', 'stage', 'buying_history', 'timing_driver']);

it('rejects invalid role values', function () {
    $this->postJson('/qualifier', validSubmission(['role' => 'Intern']))
        ->assertUnprocessable()
        ->assertJsonValidationErrors('role');
});

it('rejects invalid engagement type values', function () {
    $this->postJson('/qualifier', validSubmission(['engagement_type' => 'Free work']))
        ->assertUnprocessable()
        ->assertJsonValidationErrors('engagement_type');
});

it('rejects invalid stage values', function () {
    $this->postJson('/qualifier', validSubmission(['stage' => '$100M ARR']))
        ->assertUnprocessable()
        ->assertJsonValidationErrors('stage');
});

it('rejects invalid buying history values', function () {
    $this->postJson('/qualifier', validSubmission(['buying_history' => 'Maybe']))
        ->assertUnprocessable()
        ->assertJsonValidationErrors('buying_history');
});

it('rejects invalid timing driver values', function () {
    $this->postJson('/qualifier', validSubmission(['timing_driver' => 'Next year']))
        ->assertUnprocessable()
        ->assertJsonValidationErrors('timing_driver');
});

it('rejects invalid email', function () {
    $this->postJson('/qualifier', validSubmission(['email' => 'not-an-email']))
        ->assertUnprocessable()
        ->assertJsonValidationErrors('email');
});

it('shows the contact section on the welcome page', function () {
    $this->get('/')
        ->assertSuccessful()
        ->assertSee('Let\'s talk.', false)
        ->assertSee('Book a Call', false);
});
