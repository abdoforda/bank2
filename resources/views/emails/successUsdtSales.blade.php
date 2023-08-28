<h2>
    @lang('Dear client, thank you for the request!')
</h2>

<div class="mt-4">
<p>@lang('See your transaction details')</p>
<p>Trace ID: <strong>{{ $randomString }}</strong></p>
<p>Name: <strong>{{ $name }}</strong></p>
<p>Account number: <strong>{{ $user_id }}</strong></p>
<p>Email: <strong>{{ $email }}</strong></p>
<p>Phone: <strong>{{ $phone }}</strong></p>
<p>Amount: <strong>{{ $uu }} USD</strong></p>
<p>Kindly make sure to enter the information below accurately to avoid delays.</p>
@php
    // Parse the URL to get the path
$path = parse_url($image, PHP_URL_PATH);

// Get the file extension using pathinfo
$fileExtension = pathinfo($path, PATHINFO_EXTENSION);

@endphp
@if($fileExtension == 'pdf')
    <a href="{{ $image }}" target="_blank" class="btn btn-primary">@lang('Download pdf file')</a>
@else
<img src="{{ $image }}" style="max-width: 100%;" >
@endif
</div>