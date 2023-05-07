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
                <input type="text" class="form-control" aria-label="Sizing example input"
                    placeholder="Type Word Here..." aria-describedby="inputGroup-sizing-default">
                <button type="button" class="btn primary-color-web" style="color: white;">Search</button>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="custom-devider"></div>
    </div>
    <div class="row mt-3 mb-3">
        <div class="col" style="width: 100%; height: 100%; word-wrap: break-word;">
            <p style="white-space: pre-wrap">animal lænıməl/
động vật

Danh từ (noun)
In scientific usage, a multicellular organism that is usually mobile, whose cells are not encased in a rigid cell wall (distinguishing it from plants and fungi) and which derives energy solely from the consumption of other organisms (distinguishing it from plants).
Theo cách sử dụng khoa học, một sinh vật đa bào thường di động, có tế bào không được bao bọc trong thành tế bào cứng (phân biệt với thực vật và nấm) và chỉ lấy năng lượng từ việc tiêu thụ các sinh vật khác (phân biệt với thực vậy). Ví dụ:
A cat is an animal, not a plant. Humans are also animals, under the scientific definition, as we are not plants.
Con mèo là động vật, không phải thực vật. Con người cũng là động vật, theo định nghĩa khoa học, chúng ta không phả là thực vật.
Từ đồng nghĩa:
beast
beast
creature
brute
                </p>
        </div>
    </div>
</div>
@include('footer.footer')
