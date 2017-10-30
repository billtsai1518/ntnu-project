@extends('layouts.app')

@section('title', '首頁 | ')

@section('content')
<div class="jumbotron" style="margin: 50px 0 100px 0;">
    <div class="row">
        <div class="col-sm-5">
            <img src="{{ asset('img/puzzort_logo.png') }}" class="img-responsive" style="margin: auto;">
        </div>
        <div class="col-sm-7">
        	<p style="font-size: 50px; margin-left: 0.6em;">Puzzort 拼塊兒</p>
            <p>一款前所未有的排序演算法教具，結合了實體教具、Android、OCR、以及教師端網頁管理系統。</p>
            <p>Puzzort可幫助學生學習Quick Sort和Merge Sort這兩種複雜的排序演算法。</p>
        </div>
    </div>
</div>

<div class="row" style="text-align: center;">
    <div class="col-sm-12">
        <h1>教材特色</h1>
    </div>
</div>
<div class="row" style="text-align: center; font-size: 20px;">
	<div class="col-sm-4">
		<img src="{{ asset('img/feature_1.png') }}" class="img-responsive" style="margin: auto;">
		<p>實體教具將<br>演算流程具體化</p>
	</div>
	<div class="col-sm-4">
		<img src="{{ asset('img/feature_2.png') }}" class="img-responsive" style="margin: auto;">
		<p>圖文及影片說明<br>幫助學習者的理解</p>
	</div>
	<div class="col-sm-4">
		<img src="{{ asset('img/feature_3.png') }}" class="img-responsive" style="margin: auto;">
		<p>使用低成本材料<br>讓偏鄉國中都能使用</p>
	</div>
</div>
<div class="row" style="text-align: center; font-size: 20px;">
	<div class="col-sm-4">
		<img src="{{ asset('img/feature_4.png') }}" class="img-responsive" style="margin: auto;">
		<p>App上結合OCR<br>幫助使用者解題</p>
	</div>
	<div class="col-sm-4">
		<img src="{{ asset('img/feature_5.png') }}" class="img-responsive" style="margin: auto;">
		<p>加上規則限制<br>給予正確觀念</p>
	</div>
	<div class="col-sm-4">
		<img src="{{ asset('img/feature_6.png') }}" class="img-responsive" style="margin: auto;">
		<p>數據蒐集回報給<br>老師學習狀況</p>
	</div>
</div>

<div class="row" style="text-align: center; padding-top: 100px;">
    <div class="col-sm-12">
        <h1>背景與動機</h1>
    </div>
</div>
<div class="row" style="text-align: center; font-size: 20px;">
	<div class="col-sm-6">
		<img src="{{ asset('img/motivation_1.png') }}" class="img-responsive" style="margin: auto;">
		<p>演算法的過程繁複</p>
	</div>
	<div class="col-sm-6">
		<img src="{{ asset('img/motivation_2.png') }}" class="img-responsive" style="margin: auto;">
		<p>只是閱讀課本<br>沒有深刻印象</p>
	</div>
</div>
<div class="row" style="text-align: center; font-size: 20px;">
	<div class="col-sm-6">
		<img src="{{ asset('img/motivation_3.png') }}" class="img-responsive" style="margin: auto;">
		<p>理解錯誤<br>造成觀念錯誤</p>
	</div>
	<div class="col-sm-6">
		<img src="{{ asset('img/motivation_4.png') }}" class="img-responsive" style="margin: auto;">
		<p>中學推行運算思維</p>
	</div>
</div>


@endsection
