@include('header.headerafter')
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
                <div class="input-group">
                    <input type="text" class="form-control" aria-label="Sizing example input" placeholder="Type Word Here..." aria-describedby="inputGroup-sizing-default">
                    <button type="button" class="btn primary-color-web" style="color: white;">Search</button>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="custom-devider"></div>
        </div>
    </div>
@include('footer.footer')
