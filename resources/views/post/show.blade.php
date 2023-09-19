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
                <table class="table table-striped table-bordered border-dark">
                    <tbody>

                        <tr>
                            <td>Id</td>
                            <td>{{$post->id}}</td>
                        </tr>
                        <tr>
                            <td>이미지</td>
                            <td><img src="{{asset($post->image)}}" width="300"></td>
                        </tr>

                        <tr>
                            <td>설명</td>
                            <td>{{$post->description}}</td>
                        </tr>
                        <tr>
                            <td>카테고리Id</td>
                            <td>{{$post->category_id}}</td>
                        </tr>
                        <tr>
                            <td>발행일</td>
                            <td>{{date('Y-m-d', strtotime($post->created_at))}}</td>
                        </tr>

                    </tbody>
                </table>
                </form>
            </div>
        </div>
    </div>
</x-head>
