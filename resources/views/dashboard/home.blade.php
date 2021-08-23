@extends('dashboard.layout')

@section('content')
        <!-- Remove everything INSIDE this div to a really blank page -->
        <div id="tabs-1" class="container my-6 md:max-w-2xl bg-gray-100 dark:bg-gray-500 shadow-lg py-2 px-2 mx-auto">

            <h2 class="uppercase text-center font-bold text-2xl text-gray-600">Site settings</h2>
            
            <form action="{{ route('admin-update')}}" method="post">
                @csrf
                
                <input type="text" name="site-name" value="{{ $config['site-name'] }}" placeholder="Site name" class="w-full rounded p-2 my-2 font-mono outline-none" id="">
                <input type="text" name="site-title" value="{{ $config['site-title'] }}" placeholder="Site title" class="w-full rounded p-2 my-2 font-mono outline-none" id="">
                <input type="text" name="site-url" value="{{ $config['site-url'] }}" placeholder="Site URL" class="w-full rounded p-2 my-2 font-mono outline-none" id="">
                <input type="text" name="favicon-url" value="{{ $config['favicon-url'] }}" placeholder="Favicon URL" class="w-full rounded p-2 my-2 font-mono outline-none" id="">
                <input type="text" name="meta-title" value="{{ $config['meta-title'] }}" placeholder="Meta Title" class="w-full rounded p-2 my-2 font-mono outline-none" id="">
                <textarea  name="meta-description"  placeholder="Meta description" rows="10" class="w-full rounded p-2 my-2 font-mono outline-none" id="">{{ $config['meta-description'] }}</textarea>
                <label for="search-engine-index">Search engine indexing:</label>
                <br>
                <select name="search-engine-index"  > 
                    <option value="false">OFF</option>
                    <option value="selected" value="true" {{ $config['search-engine-index'] ?? '' }}>On</option>
                </select>
                
                
            <h2 class="uppercase text-center font-bold text-2xl text-gray-600">Homepage settings</h2>
            
            <input type="text" name="image" value="{{ $home['image']}}" placeholder="Image URL" class="w-full rounded p-2 my-2 font-mono outline-none" id="">
            <input type="text" name="title" value="{{ $home['title']}}" placeholder="Title" class="w-full rounded p-2 my-2 font-mono outline-none" id="">
            <input type="text" name="tagline" value="{{ $home['tagline']}}" placeholder="Tagline" class="w-full rounded p-2 my-2 font-mono outline-none" id="">
            <textarea  name="content"  placeholder="Content" rows="10" class="w-full rounded p-2 my-2 font-mono outline-none" id="">{{ $home['content']}}</textarea>
            <input type="text" name="phone" value="{{ $home['phone']}}" placeholder="Phone number" class="w-full rounded p-2 my-2 font-mono outline-none" id="">
            <input type="text" name="email" value="{{ $home['email']}}" placeholder="Email address" class="w-full rounded p-2 my-2 font-mono outline-none" id="">
          
            
    
    
            {{-- save button  --}}
            <input type="submit" class="py-2 px-4 cursor-pointer text-white font-bold tracking-lg block text-center bg-green-600 hover:bg-green-500 transition mx-auto rounded-lg shadow-lg" value="Save">
    
    
            </form>
        </div>
        <div id="tabs-2" style="padding: 3rem; background-color: lightgreen"></div>
@endsection