@extends('layouts.app')

@section('title', '首頁 | ')

@section('content')
<div class="jumbotron" style="text-align: center;">
	<h1>Puzzort</h1>
</div>

<h1>Puzzort的特色</h1>
<div class="row" style="text-align: center; font-size: 20px;">
	<div class="col-sm-4">
		<img src="{{ asset('img/feature_1.png') }}" class="img-responsive" style="margin: auto;">
		<p>實體教具將演算流程具體化。</p>
	</div>
	<div class="col-sm-4">
		<img src="{{ asset('img/feature_2.png') }}" class="img-responsive" style="margin: auto;">
		<p>圖文及影片說明，幫助學習者的理解。</p>
	</div>
	<div class="col-sm-4">
		<img src="{{ asset('img/feature_3.png') }}" class="img-responsive" style="margin: auto;">
		<p>使用低成本材料。</p>
	</div>
</div>
<div class="row" style="text-align: center; font-size: 20px;">
	<div class="col-sm-4">
		<img src="{{ asset('img/feature_4.png') }}" class="img-responsive" style="margin: auto;">
		<p>App上結合OCR和AR，幫助使用者解題。</p>
	</div>
	<div class="col-sm-4">
		<img src="{{ asset('img/feature_5.png') }}" class="img-responsive" style="margin: auto;">
		<p>加上規則限制，給予正確觀念。</p>
	</div>
	<div class="col-sm-4">
		<img src="{{ asset('img/feature_6.png') }}" class="img-responsive" style="margin: auto;">
		<p>數據蒐集回報給老師學習狀況。</p>
	</div>
</div>
<h1>Puzzort的背景與動機</h1>
<div class="row" style="text-align: center; font-size: 20px;">
	<div class="col-sm-6">
		<img src="{{ asset('img/motivation_1.png') }}" class="img-responsive" style="margin: auto;">
		<p>演算法的過程繁複。</p>
	</div>
	<div class="col-sm-6">
		<img src="{{ asset('img/motivation_2.png') }}" class="img-responsive" style="margin: auto;">
		<p>只是閱讀課本，沒有深刻印象。</p>
	</div>
</div>
<div class="row" style="text-align: center; font-size: 20px;">
	<div class="col-sm-6">
		<img src="{{ asset('img/motivation_3.png') }}" class="img-responsive" style="margin: auto;">
		<p>理解錯誤，造成觀念錯誤。</p>
	</div>
	<div class="col-sm-6">
		<img src="{{ asset('img/motivation_4.png') }}" class="img-responsive" style="margin: auto;">
		<p>中小學推行程式設計。</p>
	</div>
</div>


@endsection
