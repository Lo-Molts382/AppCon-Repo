<x-app-layout>

    <x-slot:title>
        Create Post
    </x-slot>

    <div class="py-5"> 
        <div class = "container">
            <div class="row">
                <div class="col-md-12">

                    @if (session('status'))
                        <div class="alert alert-success">{{ session('status') }}</div>
                    @endif

                    <div class="card">
                        <div class="card-header">
                            <h2> Create Post
                                <a href = "{{ url('posts') }}" class="btn btn-primary float-end"> Back </a>
                            </h2>
                        </div>
                        <div class="card-body">
                            <form action="{{ url('posts/create') }}" method="POST">
                                @csrf

                                <div class="mb-3">
                                    <label>User ID</label>
                                    <input type="text" name = "user_id" class="form-control" value = "{{ old('user_id') }}" />
                                    @error('user_id') <span class = "text-danger">{{ $message }}</span>@enderror
                                </div>

                                <div class="mb-3">
                                    <label>Title</label>
                                    <input type="text" name = "title" class="form-control" value = "{{ old('title') }}" />
                                    @error('title') <span class = "text-danger">{{ $message }}</span>@enderror
                                </div>

                                <div class="mb-3">
                                    <label>Content</label>
                                    <textarea name="content" class="form-control" rows="3">{{ old('content') }}</textarea>
                                    @error('content') <span class = "text-danger">{{ $message }}</span>@enderror
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class ="btn btn-primary">Save</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>

</x-app-layout>
