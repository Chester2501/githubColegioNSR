<x-app-layout>
    <div class="container py-8">
        <h1 class="text-4xl font-bold  text-gray-600">{{$post->name}}</h1>

        <div class="text-lg text-green-500 mb-2">{{$post->extract}} </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            {{--contenido principsl--}}
            <div class=" lg:grid-cols-2">
                <figure>
                    <img class=" w-full h-80 object-cover object-center" src="{{Storage::url($post->image->url)}}" alt="">
                </figure>
                <div class=" text-base  text-green-500 mt-4">
                    {{$post->body}}
                </div>
            </div>

             <aside>
            <h1 class=" text-2xl font-bold  text-gray-600 mt-4">
                Mas en {{$post->categoria->name}}
            </h1>
              <ul>
                  @foreach ($similares as $similar)
                       <li class=" mb-4">
                           <a class="flex" href="{{route('posts.show',$similar)}}">
                              
                             <img class=" w-36 h-20 object-cover object-center"  src="{{Storage::url($similar->image->url)}}" alt="">

                             <samp class="ml-2 text-gray-600">{{$similar->name}}</samp>
                           
                           </a>

                       </li>
                  @endforeach
                 
              </ul>
           </aside>

        </div>

        
    </div>
</x-app-layout>