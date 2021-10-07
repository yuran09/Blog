@props(['post' => $post])

<div>
    <div class="mb-4">
        <a href="{{route('users.posts', $post->user)}}" class="font-bold">
            {{$post->user->name}}
        </a>
        <span class="text-grey-600 text-sm">
            {{$post->user->created_at->diffForHumans()}}
        </span>
        <p class="mb-1">
            {{$post->body}}
        </p>

            @can('delete', $post)
                <form action="{{route('posts.destroy', $post)}}" method="post" class="mr-1">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-blue-500">Delete Post</button>
                </form>
            @endcan


        <div class="flex items-center">
            @auth
                @if(!$post->likedby(auth()->user()))
                    <form action="{{route('posts.likes', $post)}}" method="post" class="mr-1">
                        @csrf
                        <button type="submit" class="text-blue-500">Like</button>
                    </form>
                @else
                    <form action="{{route('posts.likes.destroy', $post)}}" method="post" class="mr-1">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-blue-500">Unlike</button>
                    </form>
                @endif
            @endauth
            <span>
                {{$post->likes->count()}} {{Str::plural('like', $post->likes->count())}}
            </span>
        </div>
    </div>
</div>
