<x-layout.main>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1>Category: {{ $category->name }}</h1>
                <hr>
                @forelse ($posts as $post)
                    <x-post :post="$post" />
                @empty
                    <p>No posts yet.</p>
                @endforelse
            </div>
            <div class="col-md-4">
                <x-sidebar />
            </div>
        </div>
    </div>
</x-layout.main>