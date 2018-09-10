@extends('master')
@section('title', 'პრაქტიკული გამოცდა')

@section('stylesheet')
<style>
	.page-banner-area {
	    background-image: url({{ asset('images/static/banner-bg.png') }}) !important;
	    padding: 228px 0 150px;
		padding-bottom: 50px;
	}
	.single-blog ul{
		list-style: square; 
		margin: auto; 
		padding-left: 40px;
	}
	blockquote{
		margin-top: 2rem;
		margin-left: 0 !important;
		font-weight: 700;
	}
</style>
@endsection
@section('slider')

<div class="page-banner-area overlay overlay-black overlay-70">
	<div class="container">
		<div class="row">
			<div class="page-banner text-center col-xs-12">
				<h1>პრაქტიკული გამოცდა</h1>
				<ul>
					<li><a href="{{ url('/') }}">მთავარი</a></li>
					<li><span>პრაქტიკული გამოცდა</span></li>
				</ul>
			</div>
		</div>
	</div>
</div>
@endsection
@section('content')


<div class="blog-area bg-white ">
	<div class="container">
		<!-- Gallery Grid -->
		<div class="row">
			<div class="blog-wrapper col-md-12 col-lg-12 col-xs-12">
				<div class="single-blog">
					<br><br>
					
					<div class="blog-description">
						<p>პრაქტიკულ გამოცდაზე დასაშვებად, ნებისმიერი კატეგორიის მართვის მოწმობის მსურველს  უნდა ქონდეს  ჩაბარებული თეორიული გამოცდა, რომლის ჩაბარებიდან 30 დღის განმავლობაში კანდიდატს 7 დღეში ერთხელ შეუძლია პრაქტიკულ ნაწილზე გასვლა. შეზღუდვა არ არის დაწესებული ფასიანი გასვლის შემთხვევებში. გარდა მექანიკური გადაცემათა კოლოფის ავტომობილებისა პრაქტიკული გამოცდის ჩაბარება შესაძლებელია ავტომატურ გადაცემათა კოლოფის ავტომობილზე. იმ შემთხვევაში თუ 30 დღის განმავლობაში ვერ მოხერხდა პრაქტიკული გამოცდის ჩაბარება, კანდიდატი თეორიულ გამოცდას აბარებს თავიდან. </p>

						<p>პრაქტიკული გამოცდის შეფასების წესი: გამოცდის დაწყებამდე მძღოლობის ნებისმიერ კანდიდატს ენიჭება 100 ქულა, რომელსაც საკვალიფიკაციო მოთხოვნების შეუსრულებლობის ან არაჯეროვანი შესრულების შემთხვევაში, აკლდება საჯარიმო ქულები. პრაქტიკული გამოცდა წარმატებით ჩაბარებულად ჩაითვლება, თუ მძღოლობის კანდიდატი არ დააგროვებს 39-ზე მეტ საჯარიმო ქულას.</p>
   

						<blockquote>
							<p>"A" კატეგორიის, აგრეთვე "A1 და B1" ქვეკატეგორიის სატრანსპორტო საშუალების მართვის უფლების მისაღებ პრაქტიკულ გამოცდაზე მძღოლობის კანდიდატი ვალდებულია ჩააბაროს შემდეგი ელემენტები:</p>
						</blockquote>
						<ul>
							<li>რვიანი;</li>
							<li>ზიგზაგი;</li>
							<li>საგაბარიტო წრეში მობრუნება (მხოლოდ "A კატეგორიისა და A1" ქვეკატეგორიისათვის);</li>
							<li>შეზღუდული სიგანის შემოსაბრუნებელი უბანი“ (მხოლოდ "B1" ქვეკატეგორიისათვის);</li>

						</ul>
						<blockquote>
							<p>"B" კატეგორიის სატრანსპორტო საშუალების მართვის უფლების მისაღებ პრაქტიკულ გამოცდაზე მძღოლობის კანდიდატი ვალდებულია ჩააბაროს შემდეგი საკვალიფიკაციო მოთხოვნები:</p>
						</blockquote>
						<ul>
							<li>პარალელური პარკირება;</li>
							<li>ზიგზაგი;</li>
							<li>შეზღუდული სიგანის შემოსაბრუნებელი უბანი(მოძრაობის მიმართულების შეცვლა):</li>
							<li>უკუსვლით პარკირება“ (ბოქსში ავტომობილის უკუსვლით დაყენება);</li>
							<li>რვიანი;</li>
							<li>აღმართიანი უბანი“ („აღმართი“);</li>

						</ul>
						<blockquote>
							<p>"BE, C, CE, D და DE" კატეგორიის, აგრეთვე "C1, C1E, D1 ან D1E"  ქვეკატეგორიის მართვის უფლების მისაღებ პრაქტიკულ გამოცდაზე მძღოლობის კანდიდატმა უნდა გაიაროს შემდეგი ელემენტები:</p>
						</blockquote>
						<ul>
							<li>უკუსვლით პარკირება“;</li>
							<li>აღმართიანი უბანი (აღმართი);</li>
							<li>პლატფორმასთან უკუსვლით დაყენება;</li>
						</ul>
					</div>
				</div>
			</div>			
		</div>
	</div>
</div>
<div class="" style="height: 100px;"></div>


@endsection

