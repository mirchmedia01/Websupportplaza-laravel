<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Inquiry</title>
</head>
<body style="margin: 0; padding: 0; background: #f4f6f8; font-family: Arial, Helvetica, sans-serif; color: #1f2937;">
    <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="background: #f4f6f8; padding: 24px 0;">
        <tr>
            <td align="center">
                <table role="presentation" width="600" cellpadding="0" cellspacing="0" style="max-width: 600px; width: 100%; background: #ffffff; border-radius: 8px; overflow: hidden;">
                    <tr>
                        <td style="background: #0ea5e9; padding: 20px 28px; color: #ffffff;">
                            <h1 style="margin: 0; font-size: 20px;">New Website Inquiry</h1>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 28px;">
                            <table role="presentation" width="100%" cellpadding="6" cellspacing="0" style="font-size: 15px;">
                                <tr>
                                    <td style="width: 120px; font-weight: bold;">Name</td>
                                    <td>{{ $inquiry->name ?: '—' }}</td>
                                </tr>
                                <tr>
                                    <td style="font-weight: bold;">Email</td>
                                    <td><a href="mailto:{{ $inquiry->email }}" style="color: #0ea5e9;">{{ $inquiry->email }}</a></td>
                                </tr>
                                <tr>
                                    <td style="font-weight: bold;">Phone</td>
                                    <td>{{ $inquiry->phone ?: '—' }}</td>
                                </tr>
                                <tr>
                                    <td style="font-weight: bold;">Service</td>
                                    <td>{{ $inquiry->service ?: '—' }}</td>
                                </tr>
                                <tr>
                                    <td style="font-weight: bold; vertical-align: top;">Message</td>
                                    <td style="white-space: pre-line;">{{ $inquiry->message ?: '—' }}</td>
                                </tr>
                                <tr>
                                    <td style="font-weight: bold;">Page Source</td>
                                    <td>{{ $inquiry->page_source ?: '—' }}</td>
                                </tr>
                                <tr>
                                    <td style="font-weight: bold;">Submitted</td>
                                    <td>{{ $inquiry->created_at?->format('M j, Y g:i A') ?? '—' }}</td>
                                </tr>
                            </table>
                            <p style="margin: 24px 0 0; font-size: 13px; color: #6b7280;">
                                Reply directly to this email to respond to {{ $inquiry->name ?: 'the sender' }}.
                            </p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
