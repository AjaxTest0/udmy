@include('layouts.header')
@include('layouts.header_inc')
@include('layouts.navigation')


@if (auth::check())
<body class="">
    <div class="row m-1">
        <div class="col bg-dark m-1 text-white">    
            <form action="/addcourse" method="POST" class="p-2 m-1">
                <h1 class="bg-dark test-white">Add Course</h1>
                <label for="title">title</label>
                <input type="text" name="name" id="title" class="form-control" required>
                <label for="description">description</label>
                <input type="text" name="description" id="description" class="form-control" required>
                <label for="price">price $</label>
                <input type="number" name="price" id="price" class="form-control" required>
                <button class="btn border p-2 m-1 text-white">+ Add Course</button>
                @csrf
            </form> 
        </div>
         
        {{-- <div class="col bg-dark m-1 text-white">
            <form action="/addsection" method="POST" class="p-2 m-1">
                <h1 class="bg-dark test-white">Add Section</h1>
                <label for="section">section</label>
                <input type="text" name="section" id="section" class="form-control">
                <button class="btn border m-1 text-white">+Section</button>
            </form>   
        </div> --}}
    </div>

    <div class="row m-1">
       {{--  @foreach($shows as $show)
        {{ $show->name }}
        {{ $show->description }}
        {{ $show->price }}$
        @endforeach --}}
    </div>   
</body>
@else
    <h1 class="">You Need to Login</h1>
@endif



@include('layouts.footer')
@include('layouts.footer-inc')

