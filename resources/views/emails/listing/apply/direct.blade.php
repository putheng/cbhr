@component('mail::message')
# {{ $listing->company->name }}

{{ $listing->title }}.

@component('mail::button', ['url' => route('listing.show', $listing)])
View Listing
@endcomponent

<ul>
    <li>{{ $apply->username }}</li>
@foreach($apply->files as $file)
    <li>
        <a href="{{ route('file.download') }}?hash={{ $file->download }}">{{ $file->name }}</a>
    </li>
@endforeach
</ul>

<br><br><br>
Thanks,<br>
{{ config('app.name') }}
@endcomponent
