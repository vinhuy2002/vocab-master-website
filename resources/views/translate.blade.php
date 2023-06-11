@include('header.header')
<div class="container">
    <div class="row mt-5">
        <div class="col">
            <h3>Translate</h3>
        </div>
    </div>
    <div class="row mt-5 align-items-center justify-content-center ">
        <div class="col-5 text-center">
                <h5 id="language1">English</h5>
                <div class="input-group">
                    <textarea class="form-control" aria-label="With textarea" rows="8" style="resize: none" placeholder="Type here to translate..." id="sentencesSearch" name="sentencesSearch"></textarea>
                </div>
        </div>
        <div class="col-1 align-items-center" id="switchArrow">
            <img src="{{ asset('images/arrow.png') }}" alt="" width="90%" height="100%">
        </div>
        <div class="col-5 text-center">
            <h5 id="language2">Vietnamese</h5>
            <div class="input-group">
                <textarea class="form-control" aria-label="With textarea" rows="8" style="resize: none" disabled id="result" name="result"></textarea>
            </div>
        </div>
    </div>

</div>

@include('footer.footer')
<script>
    $(document).ready(function(){

        // liveTransVi();
        // liveTransEn();
        let dataOut = null;
        function liveTransVi(query = ''){
            $.ajax({
                url: "{{ route('trans.resultvi') }}",
                method: 'GET',
                data:{query: query},
                dataType: 'json',
                success: function(data){
                    // dataOut = data.text;
                    $('#result').text(data.text);
                }
            })
        }

        function liveTransEn(query = ''){
            $.ajax({
                url: "{{ route('trans.resulten') }}",
                method: 'GET',
                data:{query: query},
                dataType: 'json',
                success: function(data){
                    // dataOut = data.text;
                    $('#result').text(data.text);
                }
            })
        }

        $(document).on('keyup','#sentencesSearch', function(){
            var query = $(this).val();
            if (($('#language1').text() == 'English') && ($('#language2').text() == 'Vietnamese') ){
                liveTransVi(query);
                // $('#result').text(dataOut);
            } else {
                liveTransEn(query);
                // $('#result').text(dataOut);
            }
        });

        $('#switchArrow').click(function(){
            if ($('#language1').text() == 'English'){
                $('#language1').text('Vietnamese');
                $('#language2').text('English');
            } else {
                $('#language1').text('English');
                $('#language2').text('Vietnamese');
            }
        });
    });
</script>
