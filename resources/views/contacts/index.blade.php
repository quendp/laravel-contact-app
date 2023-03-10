@extends('layouts.main')

@section('content')
    <h1>All Contacts</h1>
    <div>
        <a href='{{ route('contacts.create') }}'>Add Contacts</a>

        <?php
        foreach ($contacts as $id => $contact): ?>
        <p>{{ $contact['name'] }} | {{ $contact['phone'] }} | <a href='{{ route('contacts.show', $id) }}'>Show
                Contacts</a></p>
        <?php endforeach?>

    </div>
@endsection