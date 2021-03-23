

@extends('layouts.main')
@push('styles')
    <!-- include libraries(jQuery, bootstrap) -->
{{--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">--}}
{{--    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>--}}
{{--    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">--}}
    <link href="https://cdn.quilljs.com/1.3.7/quill.snow.css" rel="stylesheet">

@endpush
@section('content')
    @ray('create post')

    <div class="container mx-auto px-4 py-6 text-lg leading-9">

        <div class="grid text-sm md:text-lg md:grid-cols-4 place-items-center md:gap-1 gap-1 grid-cols-2 rounded-xl bg-pink-100 p-4 md:p-6 mb-6 md:mb-12">
            <div class="hover:text-pink-700"><a href="https://laravel.com" target="_blank"><span class="text-pink-700">#</span>laravel</a></div>
            <div class=""><span class="text-purple-700">#</span>developer</div>
            <div class=""><span class="text-blue-700">#</span>bachelor_degree</div>
            <div class="hover:underline hover:text-blue-700">
                <a href="mailto:lkinable@hotmail.com"><span class="text-red-500">#</span>hire_me!</a>
            </div>
        </div>
        <div class="flex justify-center rounded-xl bg-blue-100 p-4 md:p-6 mb-4 md:mb-12">

{{--            <div id="quill-editor" class="quill-editor h-96">--}}

{{--            </div>--}}
            <div id="editor" class="h-96">
                <p>Hello World!</p>
                <p>Some initial <strong>bold</strong> text</p>
                <p><br></p>
            </div>

        </div>

        {{--        <div class="flex justify-center rounded-xl bg-blue-100 p-4 md:p-6 mb-4 md:mb-12">--}}

        {{--            <form class="rounded-xl bg-blue-100 p-4 md:p-6 mb-4 md:mb-12" method=”POST” action="{{ route('posts.store') }}">--}}
        {{--                @csrf--}}
        {{--                <div class="form-group">--}}
        {{--                    <textarea class="form-control" name="summernote" id="summernote"></textarea>--}}
        {{--                </div>--}}
        {{--                <button type=”submit” class="btn btn-danger btn-block">Save</button>--}}
        {{--            </form>--}}
        {{--        </div>--}}


    </div>

@endsection
@push('scripts')
    <script src="https://cdn.quilljs.com/1.3.7/quill.js"></script>
    <!-- Initialize Quill editor -->
    <script>
        var quill = new Quill('#editor', {
            theme: 'snow'
        });
    </script>


{{--        // const Quill = require("quill/core/quill");--}}
{{--        // const Quill = require("quill");--}}
{{--        // const q = new Quill('.editor-container', {--}}
{{--        //     modules: {--}}
{{--        //         toolbar: [--}}
{{--        //             [{header: [1, 2, false]}],--}}
{{--        //             ['bold', 'italic', 'underline'],--}}
{{--        //             ['image', 'code-block']--}}
{{--        //         ]--}}
{{--        //     },--}}
{{--        //     placeholder: 'Compose an epic...',--}}
{{--        //     theme: 'snow'  // or 'bubble'--}}
{{--        // });--}}

{{--        // const Quill = require("quill/core/quill");--}}
{{--        // new Quill('.quill-editor', {--}}
{{--        //     modules: {--}}
{{--        //         toolbar: [--}}
{{--        //             [{ header: [1, 2, false] }],--}}
{{--        //             ['bold', 'italic', 'underline'],--}}
{{--        //             ['image', 'code-block']--}}
{{--        //         ]--}}
{{--        //     },--}}
{{--        //     placeholder: 'Compose an epic...',--}}
{{--        //     theme: 'snow'  // or 'bubble'--}}
{{--        // });--}}

    {{--    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>--}}
    {{--    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>--}}
    {{--    <!-- summernote css/js -->--}}
    {{--    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>--}}
    {{--    <script type="text/javascript">--}}
    {{--        $('#summernote').summernote({--}}
    {{--            height: 400--}}
    {{--        });--}}
    {{--    </script>--}}


@endpush
