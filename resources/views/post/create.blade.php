<x-head titleName="포스트 생성">
    <x-nav />
    <h1>포스트 create</h1>
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
                <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">사진</label>
                        <input type="file" class="form-control" name="image">
                    </div>

                    <div class="form-group">
                        <label for="">제목</label>
                        <input type="text" class="form-control" name="title">
                    </div>

                    <div class="form-group">
                        <label for="">카테고리</label>
                        <select id="" class="form-control" name="category_id">
                            <option>선택</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach

                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">설명</label>
                        <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
                    </div>

                    <div class="form-group mt-3">
                        <button class="btn btn-primary">제출</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-head>
