@extends('layouts.layouts')
@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <h3>Vocabulary</h3>
            </div>
        </div>
        <div class="row justify-content-center align-items-center mt-5">
            <div class="col-1">
                <img src="{{ asset('images/logo-app.png') }}" style="width: 50px; height: 50px;" />
            </div>
            <div class="col">
                <form method="POST" action='{{ route('vocab.trans') }}'>
                    @csrf
                    <div class="input-group">
                        <input type="text" class="form-control" aria-label="Sizing example input" placeholder="Type Word Here..." aria-describedby="inputGroup-sizing-default" id="word" name="word" value="{{ $word }}">
                        <button type="submit" class="btn primary-color-web" style="color: white;" id="searchBtn">Search</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row mt-5">
            <div class="custom-devider"></div>
        </div>
        <div class="row mt-1 mb-1">
            <div class="col" style="width: 100%; height: 100%; word-wrap: break-word;">
                    @if ($data != null)
                        @if (session()->has('id'))
                            <span class="fa fa-star" id="bookmark"></span>
                        @endif
                    @foreach ($data as $item)
                    {{-- {{ dd($item) }} --}}
                        <h2 id="wordTest">{{ $item['word'] }}</h2>
                        <p>{{ $item['phonetic'] }}</p>

                        @foreach ($item['meanings'] as $means)
                            <h2>{{ $means['partOfSpeech'] }}</h2>

                            @foreach ($means['definitions'] as $mean)
                                <p>{{ $mean['definition'] }}</p>
                            @endforeach

                        @endforeach

                        <h2>Sources:</h2>
                        @foreach ($item['sourceUrls'] as $source)
                            <p>{{ $source }}</p>
                        @endforeach
                    @endforeach
                    @else
                        <h3>{{ $data }}</h3>
                    @endif
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script>
        $(document).ready(function(){

            const userId = {{ session('id') }}
            $("#wordTest").click(function () {
                if (!$('#bookmark').hasClass("checked") && userId != null){
                    $("#bookmark").addClass("checked");
                    addBookmark();
                }
            });

            function addBookmark(){
                $.ajax({
                    url: "{{ route('bookmarkAdd') }}",
                    method: 'GET',
                    data:{
                        id_user: userId,
                        word: $("#word").val(),
                    },
                    dataType: 'json',
                    success: function(data){
                }
                });
            }
        });



    </script>
@endpush
