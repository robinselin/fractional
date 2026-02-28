<div style="font-family: monospace; max-width: 600px; margin: 0 auto; padding: 24px;">
    <h2 style="font-size: 18px; margin-bottom: 24px;">New Qualifier Submission</h2>

    <table style="width: 100%; border-collapse: collapse;">
        <tr>
            <td style="padding: 8px 12px; font-weight: bold; border-bottom: 1px solid #e5e7eb;">Role</td>
            <td style="padding: 8px 12px; border-bottom: 1px solid #e5e7eb;">{{ $submission->role }}</td>
        </tr>
        <tr>
            <td style="padding: 8px 12px; font-weight: bold; border-bottom: 1px solid #e5e7eb;">Looking for</td>
            <td style="padding: 8px 12px; border-bottom: 1px solid #e5e7eb;">{{ $submission->engagement_type }}</td>
        </tr>
        <tr>
            <td style="padding: 8px 12px; font-weight: bold; border-bottom: 1px solid #e5e7eb;">Stage</td>
            <td style="padding: 8px 12px; border-bottom: 1px solid #e5e7eb;">{{ $submission->stage }}</td>
        </tr>
        <tr>
            <td style="padding: 8px 12px; font-weight: bold; border-bottom: 1px solid #e5e7eb;">Worked with fractional before</td>
            <td style="padding: 8px 12px; border-bottom: 1px solid #e5e7eb;">{{ $submission->buying_history }}</td>
        </tr>
        <tr>
            <td style="padding: 8px 12px; font-weight: bold; border-bottom: 1px solid #e5e7eb;">Bottleneck</td>
            <td style="padding: 8px 12px; border-bottom: 1px solid #e5e7eb;">{{ $submission->bottleneck ?? '—' }}</td>
        </tr>
        <tr>
            <td style="padding: 8px 12px; font-weight: bold; border-bottom: 1px solid #e5e7eb;">Timing driver</td>
            <td style="padding: 8px 12px; border-bottom: 1px solid #e5e7eb;">{{ $submission->timing_driver }}</td>
        </tr>
        @if($submission->email)
        <tr>
            <td style="padding: 8px 12px; font-weight: bold; border-bottom: 1px solid #e5e7eb;">Email</td>
            <td style="padding: 8px 12px; border-bottom: 1px solid #e5e7eb;"><a href="mailto:{{ $submission->email }}">{{ $submission->email }}</a></td>
        </tr>
        @endif
        <tr>
            <td style="padding: 8px 12px; font-weight: bold;">Submitted</td>
            <td style="padding: 8px 12px;">{{ $submission->created_at->format('M j, Y g:i A') }}</td>
        </tr>
    </table>
</div>
