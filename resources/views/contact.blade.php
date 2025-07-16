@php
    $contactLists = [
        ["title" => "Instagram", "value" => "https://www.instagram.com/kuh.rmdhn/"],
        ["title" => "Tiktok", "value" => "https://www.tiktok.com/@kuhrmdhn.dev"],
    ];

    $contactLength = count($contactLists);
@endphp
<x-layout>
    @if ($contactLength > 1)
        <p>I have {{$contactLength}} Contacts</p>
    @endif
    @foreach ($contactLists as $contact)
        <p>
            Here is My
            <a href="{{ $contact["value"] }}">{{$contact["title"]}}</a>
        </p>
    @endforeach
</x-layout>