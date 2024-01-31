<x-app-layout>

    <x-slot:title>
        Posts
    </x-slot>

    <div class="py-5"> 
        <div class = "container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header" style = "background-color:rgb(202, 238, 242);">
                            <h2> Posts
                                <a href = "{{ url('posts/create') }}" class="btn btn-primary float-end"> Add Post </a>
                            </h2>
                        </div>
                        <div class="card-body" >
                        
                            <table class = "table table-bordered table-hover">
                                <thead>
                                    <tr class = "table-info">
                                        <th>ID</th>
                                        <th>User_ID</th>
                                        <th>Title</th>
                                        <th>Content</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($posts as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->user_id}}</td>
                                        <td>{{$item->title}}</td>
                                        <td>{{$item->content}}</td>
                                        <td>
                                            <a href="{{ url('posts/'.$item->id.'/edit') }}" class = "btn btn-success mx-1">Edit</a>
                                            <a href="{{ url('posts/'.$item->id.'/delete') }}" class = "btn btn-danger mx-1">Delete</a>
                                            <!-- ADD CONFIRMATORY MESSAGE IF YOU HAVE EXTRA TIME -->
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </div>

</x-app-layout>
