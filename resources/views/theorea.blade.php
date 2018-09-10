@extends('master')
@section('title', 'თეორიის გამოცდა')

@section('stylesheet')
<style>
	.page-banner-area {
	    background-image: url({{ asset('images/static/exam.jpg') }}) !important;
	    padding: 228px 0 150px;
		padding-bottom: 50px;
	}
	.single-blog ul{
		list-style: square; 
		margin: auto; 
		padding-left: 40px;
	}
	.single-blog ol{
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
				<h1>თეორიული გამოცდა</h1>
				<ul>
					<li><a href="{{ url('/') }}">მთავარი</a></li>
					<li><span>თეორიული გამოცდა</span></li>
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
					<h4 class="blog-title">ნებისმიერი კატეგორიის მართვის უფლების მისაღებ თეორიულ გამოცდაზე დასაშვებად კანდიდატმა უნდა წარადგინოს შემდეგი დოკუმენტები:</h4>
					
					<div class="blog-description">

						<ul>
							<li>განცხადება (ივსება ადგილზე);</li>
							<li>ჯანმრთელობის მდგომარეობის შესახებ ცნობა (ფორმა IV 100/ა);</li>
							<li>პირადობის მოწმობა;</li>
							<li>კანონით გათვალისწინებული საფასურის გადახდის დამადასტურებელი ქვითრები. (მართვის უფლების მისაღებ გამოცდაზე დაშვების საფასური - 40 ლარი; მართვის მოწმობის საფასური - 15 ლარი);</li>
							<li>სატრანსპორტო საშუალების იმ კატეგორიის შესაბამისი სწავლების დამადასტურებელი მოწმობა, რომელზეც გავლილია პროფესიული მომზადება ან გადამზადება ("A" და "B" კატეგორიის სატრანსპორტო საშუალებათა მართვის უფლების მისაღებად დასაშვებია მძღოლობის კანდიდატთა დამოუკიდებელი მომზადება).</li>
						</ul>
						
   

						<blockquote>
							<p>არასრულწლოვანი მოქალაქისთვის (17 წლის)</p>
						</blockquote>
						<p>წარსადგენი დოკუმენტები:</p>
						<ol>
							<li>განცხადება (ივსება ადგილზე);</li>
							<li>ჯანმრთელობის მდგომარეობის შესახებ ცნობა (ფორმა IV 100/ა);</li>
							<li>პირადობის მოწმობა;</li>
							<li>დაბადების მოწმობის დედანი (ან ასლი ნოტარიულად დამოწმებული);</li>
							<li>მშობელი (ან მშობლის თანხმობა ნოტარიულად დამოწმებული);</li>
							<li>საჯარო სკოლის მოწმობა ან ავტოსკოლის მოწმობა;</li>
							<li>საფასურის გადახდის დამადასტურებელი ქვითრები (პირველადი დაშვების საფასური - 15 ლარი).</li>
						</ol>

						<blockquote>
							<p>სტუდენტის სტატუსის მქონე მოქალაქისთვის(18 წლის)</p>
						</blockquote>
						<p>წარსადგენი დოკუმენტები:</p>
						<ol>
							<li>განცხადება (ივსება ადგილზე);</li>
							<li>ჯანმრთელობის მდგომარეობის შესახებ ცნობა (ფორმა IV 100/ა);</li>
							<li>პირადობის მოწმობა (ID ბარათი, სტუდენტის სტატუსით);</li>
							<li>საფასურის გადახდის დამადასტურებელი ქვითრები (პირველადი დაშვების საფასური - 15 ლარი).</li>
						</ol>

						<br>
						<p style="    font-weight: 700;; color: #222;">    კანდიდატს საშუალება აქვს გამოცდისთვის განკუთვნილი ტესტი "ტესტის გავლა" სასურველ ენაზე ჩააბაროს, მათ შორის: ქართულ, აფხაზურ, ოსურ, ინგლისურ, თურქულ, აზერბაიჯანულ, სომხურ და რუსულ ენაზე.</p>
						<p style="    font-weight: 700;; color: #222;">  თეორიული გამოცდის წარმატებით ჩაბარების შემთხვევაში კანდიდატს საშუალება აქვს 30 დღის განმავლობაში, 7 დღეში ერთხელ გავიდეს პრაქტიკულ გამოცდაზე (ფასიანი გასვლა ულიმიტოა), ხოლო თეორიულ გამოცდაზე ჩაჭრის შემთხვევაში, განმეორებით გამოცდაზე დაიშვება 7 დღის შემდეგ, საფასურის თავიდან გადახდის შემთხვევაში.</p>

					</div>
				</div>
			</div>
			
		</div>
	</div>
</div>
<div class="" style="height: 100px;"></div>


@endsection

