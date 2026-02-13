<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Reply</title>
</head>
<body>
    <p>Hi {{ $faq->name }},</p>

    <p><b>Email:</b> {{ $faq->email }}</p>
    <p><b>Phone:</b> {{ $faq->phone ?? 'N/A' }}</p>

    <p>We received your question:</p>
    <blockquote>{{ $faq->question }}</blockquote>

    <br>
    <p>Regards,<br>
    MyTaxZone Support</p>
</body>
</html>
