<x-head titleName="포스트인덱스">

    <x-nav />
    <div class="container">
        <h1>인덱스 페이지...</h1>

        <div class="main-content mt-5 mx-5">
            <div class="card">
                <div class="card-header">
                    all posts
                    <a class="btn btn-sm btn-success" href="{{ route('posts.create') }}">생성</a>
                    <a class="btn btn-sm btn-dark" href="#">삭제</a>
                </div>

                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">
                                    사진
                                </th>
                                <th scope="col">제목</th>
                                <th scope="col">설명</th>
                                <th scope="col">카테고리</th>
                                <th scope="col">날짜</th>
                                <th scope="col">비고</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            @foreach ($posts as $post)
                                <tr>
                                    <th scope="row">{{ $post->id }}</th>
                                    <td><img src="{{ asset($post->image) }}" width="80"></td>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ $post->description }}</td>
                                    <td>{{ $post->category_id }}</td>
                                    <td>{{ date('Y-m-d', strtotime($post->created_at)) }}</td>
                                    <td>
                                        <a class="btn btn-sm btn-primary"
                                            href="{{ route('posts.show', $post->id) }}">show</a>
                                        <a class="btn btn-sm btn-primary"
                                            href="{{ route('posts.edit', $post->id) }}">수정</a>
                                        <form action="{{route('posts.destroy', $post->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn-sm btn-danger btn">삭제</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</x-head>
