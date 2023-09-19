<x-head titleName="포스트 생성">
    <x-nav />
    <h1>포스트 show</h1>
    <div class="main-content mt-5 mx-5">
        <div class="card">
            <div class="card-header">
                show posts
                <a class="btn btn-sm btn-success" href="{{ route('posts.index') }}">back</a>
                {{-- <a class="btn btn-sm btn-dark" href="#">삭제</a> --}}
            </div>

            <div class="card-body">
                <form action="">
                    @csrf
                    <div class="form-group">
                        <label for="">사진</label>
                        <input type="file" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">제목</label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">카테고리</label>
                       <select name="" id="" class="form-control">
                        <option value="">test1</option>
                        <option value="">test2</option>
                        <option value="">test3</option>
                       </select>
                    </div>

                    <div class="form-group">
                        <label for="">설명</label>
                        <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
                    </div>

                    <div class="form-group mt-3">
                        <button class="btn btn-primary">제출</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-head>
