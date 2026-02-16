@extends('layouts.admin')

@section('title', $module['title'].' | Admin')
@section('header', $module['title'])

@section('content')
    <section class="panel">
        <h2>{{ $module['title'] }}</h2>
        <p class="text-muted mb-0">{{ $module['description'] }}</p>
    </section>

    <section class="cards-grid mt-3">
        @foreach($module['sections'] as $sectionTitle => $items)
            <article class="panel">
                <h2>{{ $sectionTitle }}</h2>
                <ul class="admin-list mb-0">
                    @foreach($items as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>
            </article>
        @endforeach
    </section>

    <section class="panel mt-3">
        <h2>Preview Actions</h2>
        <div class="action-pills">
            <span class="badge text-bg-light border">Save Draft</span>
            <span class="badge text-bg-light border">Request Approval</span>
            <span class="badge text-bg-light border">Publish</span>
            <span class="badge text-bg-light border">Export</span>
        </div>
    </section>
@endsection
