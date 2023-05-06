@include('header.headerafter')
<div class="container">
    <div class="row mt-5">
        <div class="col">
            <h3>Translate</h3>
        </div>
    </div>
    <div class="row mt-5 align-items-center justify-content-center ">
        <div class="col-5 text-center">
            <h5>English</h5>
            <div class="input-group">
                <textarea class="form-control" aria-label="With textarea" rows="8" style="resize: none" placeholder="Type here to translate..."></textarea>
            </div>
        </div>
        <div class="col-1 align-items-center">
            <img src="{{ asset('images/arrow.png') }}" alt="" width="90%" height="100%">
        </div>
        <div class="col-5 text-center">
            <h5>Vietnamese</h5>
            <div class="input-group">
                <textarea class="form-control" aria-label="With textarea" rows="8" style="resize: none"  disabled></textarea>
            </div>
        </div>
    </div>
</div>
@include('footer.footer')