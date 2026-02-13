@extends('layouts.admin')

@section('title', 'Page Management')
@section('header', 'Page Management')

@section('content')
@if(session('status'))
    <div class="alert alert-success">{{ session('status') }}</div>
@endif

<div class="panel mb-3 d-flex justify-content-between align-items-center">
    <div>
        <h2 class="mb-1">Website Pages</h2>
        <p class="mb-0">Manage page content, slug, publish status, and SEO fields from one place.</p>
    </div>
    <a class="btn btn-primary" href="{{ route('admin.pages.create', ['brand' => $brandKey]) }}">Create Page</a>
</div>

<div class="panel">
    <table>
        <thead>
        <tr>
            <th>Title</th>
            <th>Slug</th>
            <th>Status</th>
            <th>Template</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @forelse($pages as $page)
            <tr>
                <td>{{ $page['title'] }}</td>
                <td>{{ $page['slug'] }}</td>
                <td><span class="status">{{ ucfirst($page['status']) }}</span></td>
                <td>{{ $page['template'] }}</td>
                <td>
                    <a href="{{ route('admin.pages.edit', ['id' => $page['id'], 'brand' => $brandKey]) }}">Edit</a>
                    <form method="post" action="{{ route('admin.pages.destroy', ['id' => $page['id'], 'brand' => $brandKey]) }}" style="display:inline-block;margin-left:8px;">
                        @csrf
                        @method('delete')
                        <button class="btn btn-sm btn-outline-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr><td colspan="5">No pages found.</td></tr>
        @endforelse
        </tbody>
    </table>
</div>
@endsection
