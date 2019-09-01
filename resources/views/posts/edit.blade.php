@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Update a Post</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('posts.update', $post) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label>IMAGE</label>
                                <input type="file"  name="image" class="form-control @error('image') is-invalid @enderror" value="{{ old('image') }}" placeholder="Enter Title">
                                {!! $errors->has('image') ? '<div class="invalid-feedback"><strong>Pilih Sebuah Gambar !</strong></div>' : ''!!}
                            </div>
                            <div class="form-group">
                                <label>TITLE</label>
                                <input type="text"  name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', $post->title) }}" placeholder="Enter Title">
                                {!! $errors->has('title') ? '<div class="invalid-feedback"><strong>Masukkan Title !</strong></div>' : ''!!}
                            </div>
                            <div class="form-group">
                                <label>CONTENT</label>
                                <textarea name="content" class="form-control @error('content') is-invalid @enderror my-editor">{!! old('content', $post->content) !!}</textarea>
                                {!! $errors->has('content') ? '<div class="invalid-feedback"><strong>Masukkan Isi Content !</strong></div>' : ''!!}
                            </div>
                            <button type="submit" class="btn btn-md- btn-success">UPDATE</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>
        var editor_config = {
            path_absolute : "/",
            selector: "textarea.my-editor",
            plugins: [
                "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table contextmenu directionality",
                "emoticons template paste textcolor colorpicker textpattern"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
            relative_urls: false,
            file_browser_callback : function(field_name, url, type, win) {
                var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
                var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

                var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
                if (type == 'image') {
                    cmsURL = cmsURL + "&type=Images";
                } else {
                    cmsURL = cmsURL + "&type=Files";
                }

                tinyMCE.activeEditor.windowManager.open({
                    file : cmsURL,
                    title : 'Filemanager',
                    width : x * 0.8,
                    height : y * 0.8,
                    resizable : "yes",
                    close_previous : "no"
                });
            }
        };

        tinymce.init(editor_config);
    </script>
@endsection
