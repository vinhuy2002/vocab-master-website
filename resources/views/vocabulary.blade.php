@include('header.header')
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
                        <button type="submit" class="btn primary-color-web" style="color: white;">Search</button>
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
                    @foreach ($data as $item)
                    {{-- {{ dd($item) }} --}}
                        <h2>{{ $item['word'] }}</h2>
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
@include('footer.footer')
