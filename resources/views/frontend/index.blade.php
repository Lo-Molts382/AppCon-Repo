<x-app-layout>

    <x-slot:title>
        Index Page 
    </x-slot>

    <div class="py-5">
        <div class="container">
            <h2> Welcome to my Index Page! </h1>
        </div>
    </div>

    <x-slot:scripts>
        <script>
            console.log('script area');
        </script> 
    </x-slot>

</x-app-layout>
