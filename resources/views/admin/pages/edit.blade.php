@extends('layouts.admin')

@section('title', $isCreate ? 'Create Page' : 'Edit Page')
@section('header', $isCreate ? 'Create Page' : 'Edit Page')

@section('content')
<div class="panel mb-3">
    <h2>{{ $isCreate ? 'Create New Page' : 'Update Page' }}</h2>
    <p class="mb-0">Use plain language fields. Save draft first, then switch to published when ready.</p>
</div>

<form method="post" action="{{ $isCreate ? route('admin.pages.store', ['brand' => $brandKey]) : route('admin.pages.update', ['id' => $page['id'], 'brand' => $brandKey]) }}">
    @csrf
    @if(!$isCreate)
        @method('put')
    @endif

    <div class="panel mb-3">
        <h2>Page Basics</h2>
        <div class="form-grid">
            <div><label>Page ID (lowercase, hyphen)</label><input name="id" value="{{ old('id', $page['id'] ?? '') }}"></div>
            <div><label>Page Title</label><input name="title" value="{{ old('title', $page['title'] ?? '') }}"></div>
            <div><label>Slug</label><input name="slug" value="{{ old('slug', $page['slug'] ?? '') }}"></div>
            <div><label>Status</label><input name="status" value="{{ old('status', $page['status'] ?? 'draft') }}"></div>
            <div><label>Template</label><input name="template" value="{{ old('template', $page['template'] ?? 'standard-page') }}"></div>
        </div>
    </div>

    <div class="panel mb-3">
        <h2>SEO Controls</h2>
        <div class="form-grid">
            <div class="full"><label>SEO Title</label><input name="seo[title]" value="{{ old('seo.title', $page['seo']['title'] ?? '') }}"></div>
            <div class="full"><label>Meta Description</label><input name="seo[description]" value="{{ old('seo.description', $page['seo']['description'] ?? '') }}"></div>
            <div><label>OG Title</label><input name="seo[og_title]" value="{{ old('seo.og_title', $page['seo']['og_title'] ?? '') }}"></div>
            <div><label>OG Description</label><input name="seo[og_description]" value="{{ old('seo.og_description', $page['seo']['og_description'] ?? '') }}"></div>
            <div class="full"><label>Focus Keywords (comma-separated)</label><input name="seo[focus_keywords]" value="{{ old('seo.focus_keywords', $page['seo']['focus_keywords'] ?? '') }}"></div>
        </div>
    </div>

    <button class="btn btn-primary">{{ $isCreate ? 'Create Page' : 'Save Changes' }}</button>
</form>
@endsection
