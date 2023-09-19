<x-head titleName="포스트 생성">
    <x-nav />
    <h1>포스트 edit</h1>
    <div class="main-content mt-5 mx-5">
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger">{{ $error }}</div>
            @endforeach
        @endif
        <div class="card">
            <div class="card-header">
                all posts
                <a class="btn btn-sm btn-success" href="{{ route('posts.index') }}">back</a>
                {{-- <a class="btn btn-sm btn-dark" href="#">삭제</a> --}}
            </div>

            <div class="card-body">
                <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <img src="{{ asset($post->image) }}" width="80">
                        <label for="">사진</label>
                        <input type="file" class="form-control" name="image">
                    </div>

                    <div class="form-group">
                        <label for="">제목</label>
                        <input type="text" class="form-control" value="{{ $post->title }}" name="title">
                    </div>

                    <div class="form-group">
                        <label for="">카테고리</label>
                        <select name="category_id" id="" class="form-control">
                            <option value="">선택하세요</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                    {{ $category->id == $post->category_id ? 'selected' : '' }}>{{ $category->name }}
                                </option>
                            @endforeach

                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">설명</label>
                        <textarea id="" cols="30" rows="10" class="form-control" value="" name="description">{{ $post->description }}</textarea>
                    </div>

                    <div class="form-group mt-3">
                        <button class="btn btn-primary">제출</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-head>
