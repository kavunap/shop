@extends('admin.layout')

@section('content')

<div class="intro-y flex items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">
        Add new category
    </h2>
</div>
<div class="grid grid-cols-12 gap-6 mt-5">
    <div class="intro-y col-span-12 lg:col-span-6">
        <!-- BEGIN: Form Layout -->
        <form action="{{ route('categories.store') }}" method="POST">
            @csrf
            <div class="intro-y box p-5">
                <div>
                    <label for="crud-form-1" class="form-label">Category title</label>
                    <input id="crud-form-1" type="text" class="form-control w-full" placeholder="Enter title of category" name="title">
                </div>
                <div class="mt-3">
                    <label>Active Status</label>
                    <div class="mt-2">
                        <input type="checkbox" class="form-check-switch">
                    </div>
                </div>
                <div>
                    <label for="crud-form-1" class="form-label">Category title</label>
                    <textarea name="content" class="form-control"></textarea>
                </div>
                <div class="text-right mt-5">
                    <a href="/admin"><button type="button" class="btn btn-outline-secondary w-24 mr-1">Cancel</button></a>
                    <button type="submit" class="btn btn-primary w-24">Save</button>
                </div>
            </div>
        </form>
        <!-- END: Form Layout -->
    </div>
</div>
@endsection