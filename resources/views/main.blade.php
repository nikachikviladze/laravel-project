@extends('master')
@section('title', 'მთავარი')
@section('stylesheet')
<style>
    .btn{
        line-height: 24px !important;
        padding: 3px 10px 3px 30px !important;
    }
</style>
@endsection
@section('slider')
@include('layouts.slider')

@endsection
@section('content')


<!-- Feature Area
============================================ -->
<div id="feature-area" class="feature-area bg-gray pt-90 pb-90">
    <div class="container">
        <!-- Section Title -->
        <div class="row">
            <div class="section-title text-center col-xs-12 mb-45">
                <h3 class="heading">სერვისები</h3>
                <div class="excerpt">
                    <p>რატომ ჩვენ? ჩვენი ავტოსკოლა არის გამოცდილი და გამოჩეული არსებულ ბაზარზე</p>
                </div>
                <i class="icofont icofont-traffic-light"></i>
            </div>
        </div>
        <div class="row">
            <!-- Left Feature -->
            <div class="feature-wrapper feature-left text-right col-md-4 col-xs-12">
                <div class="single-feature">
                    <div class="icon"><i class="icofont icofont-file-spreadsheet"></i></div>
                    <div class="text fix">
                        <h4>სწრაფი კურსი</h4>
                        <p>ლორემ იპსუმ არქაულად გაბრდღვიალებული შემოწმება მაწანწალებსა ბარემ ყავარჯნის, შეუთვალა, ზოგის ვიხსენებდი.</p>
                    </div>
                </div>
                <div class="single-feature">
                    <div class="icon"><i class="icofont icofont-car-alt-4"></i></div>
                    <div class="text fix">
                        <h4><a href="{{ url('register') }}">დარეგისტრირდი ჩვენს საიტზე</a></h4>
                        <p>დარეგისტრირების შემდეგ სარგებლობთ ახალი შესაძლებლობები. შეგეძლებათ შეინახოთ გავლილი ტექსტები, ჩვენი საიტის ჭკვიანი პროგრამა დაგითვლით ყველა შეცდომას. ანალიზის შემდეგ კი შეგეძლებათ გაიგოთ რომელ საკითხში გიჭირთ ყველაზე მეტად</p>
                    </div>
                </div>
                <div class="single-feature">
                    <div class="icon"><i class="icofont icofont-video-alt"></i></div>
                    <div class="text fix">
                        <h4>ვიდეო ლექციები</h4>
                        <p>ლორემ იპსუმ არქაულად გაბრდღვიალებული შემოწმება მაწანწალებსა ბარემ ყავარჯნის, შეუთვალა, ზოგის ვიხსენებდი.</p>
                    </div>
                </div>
            </div>
            <!-- Feature Image -->
            <div class="feature-image text-center col-md-4 col-xs-12">
                <img src="img/feature.png" alt="feature" />
            </div>
            <!-- Right Feature -->
            <div class="feature-wrapper feature-right text-left col-md-4 col-xs-12">
                <div class="single-feature">
                    <div class="icon"><i class="icofont icofont-man-in-glasses"></i></div>
                    <div class="text fix">
                        <h4>გამოცდილი ინსტრუქტორები</h4>
                        <p>ლორემ იპსუმ არქაულად გაბრდღვიალებული შემოწმება მაწანწალებსა ბარემ ყავარჯნის, შეუთვალა, ზოგის ვიხსენებდი.</p>
                    </div>
                </div>
                <div class="single-feature">
                    <div class="icon"><i class="icofont icofont-clock-time"></i></div>
                    <div class="text fix">
                        <h4>მორგებული გრაფიკი</h4>
                        <p>ლორემ იპსუმ არქაულად გაბრდღვიალებული შემოწმება მაწანწალებსა ბარემ ყავარჯნის, შეუთვალა, ზოგის ვიხსენებდი.</p>
                    </div>
                </div>
                <div class="single-feature">
                    <div class="icon"><i class="icofont icofont-direction-sign"></i></div>
                    <div class="text fix">
                        <h4>პრაქტიკული სწავლება</h4>
                        <p>ლორემ იპსუმ არქაულად გაბრდღვიალებული შემოწმება მაწანწალებსა ბარემ ყავარჯნის, შეუთვალა, ზოგის ვიხსენებდი.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Funfact Area
============================================ -->
<div class="funfact-area overlay overlay-white overlay-80 pt-90 pb-60">
    <div class="container">
        <div class="row">
            <div class="single-facts text-center col-sm-3 col-xs-12 mb-30">
                <i class="icofont icofont-hat-alt"></i>
                <h1 class="counter plus">500</h1>
                <p>ჩაბარებული გამოცდა</p>
            </div>
            <div class="single-facts text-center col-sm-3 col-xs-12 mb-30">
                <i class="icofont icofont-user-suited"></i>
                <h1 class="counter">6</h1>
                <p>ინსტრუქტორი</p>
            </div>
            <div class="single-facts text-center col-sm-3 col-xs-12 mb-30">
                <i class="icofont icofont-history"></i>
                <h1 class="counter">4</h1>
                <p>წელი თქვენს გვერდით</p>
            </div>
            <div class="single-facts text-center col-sm-3 col-xs-12 mb-30">
                <i class="icofont icofont-users-social"></i>
                <h1 class="counter plus">50</h1>
                <p>მოქმედი მოსწავლე</p>
            </div>
        </div>
    </div>
</div>
<!-- Course Area
============================================ -->
<div id="course-area" class="course-area bg-gray pt-90 pb-60">
    <div class="container">
        <!-- Section Title -->
        <div class="row">
            <div class="section-title text-center col-xs-12 mb-45">
                <h3 class="heading">სწავლება</h3>
                <div class="excerpt">
                    <p>ჩვენს ავტოსკოლაში საშუალება გაქვთ დაეუფლოთ მანქანის როგორც თეორიულ ასევე პრაქტიკულ ნაწილს. მანამდე ჩვენი საიტის მიხედვით იხელმძღვანელეთ.</p>
                </div>
                <i class="icofont icofont-traffic-light"></i>
            </div>
        </div>
        <!-- Course Wrapper -->
        <div class="course-wrapper row">
            <div class="col-md-3 col-sm-6 col-xs-12 mb-30 fix">
                <div class="course-item text-center">
                    <i class="icofont icofont-car-alt-4"></i>
                    <h4>ტესტები</h4>
                    <p>ჩვენს საიტზე განთავსებული ტესტებით თქვენ ისწავლით ნებისმიერი სატრანსპორტო საშუალების მართის თეორია</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 mb-30 fix">
                <div class="course-item text-center">
                    <i class="icofont icofont-ambulance-cross"></i>
                    <h4>მარტივიდან რთულისკენ</h4>
                    <p>დაიწყე მარტივი ტესტებით, სწავლის პროცესში გადადი რთულებზე. </p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 mb-30 fix">
                <div class="course-item text-center">
                    <i class="icofont icofont-fast-delivery"></i>
                    <h4>პრაქტიკული სწავლება</h4>
                    <p>ჩვენი გამოცდილი ინსტრუქტორები მარტივად შეგასწავლიან ტარებას. რომელიც გამოგადგება როგორც გამოცდაზე, ასევე შემდეგში ქალაქში მოძრაობისთვის</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 mb-30 fix">
                <div class="course-item text-center">
                    <i class="icofont icofont-rocket-alt-2"></i>
                    <h4>შეინახე გავლილი ტესტები</h4>
                    <p>ეს დაგეხმარება თვალი ადევნო იმ შეცდომებს რომლებიც დაუშვი. სწავლისთვის კი ყველაზე კარგი სწორედ დაშვებული შეცდომების გააზრებაა. ჩვენი საიტი ამაში ნამდვილად დაგეხმარება</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Video Area
============================================ -->
<div class="video-area overlay overlay-black overlay-50">
    <div class="container">
        <div class="row">
            <div class="video-content text-center col-xs-12">
        <a class="video-popup" href="https://www.youtube.com/watch?v=ngaeb1jARAY"><i class="icofont icofont-play-alt-2"></i></a>
                <h3>სწავლების პროცესი</h3>
            </div>
        </div>
    </div>
</div>

<div id="instructor-area" class="instructor-area bg-gray pt-90 pb-60">
    <div class="container">
        <!-- Section Title -->
        <div class="row">
            <div class="section-title text-center col-xs-12 mb-45">
                <h3 class="heading">ინსტრუქტორები</h3>
                <div class="excerpt">
                    <p>ლორემ იპსუმ არქაულად გაბრდღვიალებული შემოწმება მაწანწალებსა</p>
                </div>
                <i class="icofont icofont-traffic-light"></i>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <!-- Instructor Tab Content -->
                <div class="tab-content">
                    <div class="tab-pane fade in active row" id="instructor-1">
                        <div class="instructor-details text-left col-md-7 col-xs-12">
                            <h4 class="instructor-name">ლადო ჯაყელი</h4>
                            <h5 class="instructor-title">Instructor</h5>
                            <p>სავარაუდო ტექსტი, რომელიც ინსტრუქტორის გამოცდილების შესახებ მოგვიყვება, ლორემ იპსუმ არქაულად გაბრდღვიალებული შემოწმება მაწანწალებსალორემ იპსუმ არქაულად გაბრდღვიალებული შემოწმება მაწანწალებსალორემ იპსუმ არქაულად გაბრდღვიალებული შემოწმება მაწანწალებსა.</p>
                            <div class="instructor-social fix">
                                <a href="#"><i class="icofont icofont-social-facebook"></i></a>
                                <a href="#"><i class="icofont icofont-social-pinterest"></i></a>
                                <a href="#"><i class="icofont icofont-social-twitter"></i></a>
                                <a href="#"><i class="icofont icofont-social-google-plus"></i></a>
                            </div>
                        </div>
                        <div class="instructor-image col-md-5 col-sm-6 col-xs-12">
                            <img src="img/instructor/big-1.jpg" alt="" />
                        </div>
                    </div>
                    <div class="tab-pane fade row" id="instructor-2">
                        <div class="instructor-details text-left col-md-7 col-xs-12">
                            <h4 class="instructor-name">გია გურიელი</h4>
                            <h5 class="instructor-title">ინსტრუქტორი</h5>
                            <p>სავარაუდო ტექსტი, რომელიც ინსტრუქტორის გამოცდილების შესახებ მოგვიყვება, ლორემ იპსუმ არქაულად გაბრდღვიალებული შემოწმება მაწანწალებსალორემ იპსუმ არქაულად გაბრდღვიალებული შემოწმება მაწანწალებსალორემ იპსუმ არქაულად გაბრდღვიალებული შემოწმება მაწანწალებსა..</p>
                            <div class="instructor-social fix">
                                <a href="#"><i class="icofont icofont-social-facebook"></i></a>
                                <a href="#"><i class="icofont icofont-social-pinterest"></i></a>
                                <a href="#"><i class="icofont icofont-social-twitter"></i></a>
                                <a href="#"><i class="icofont icofont-social-google-plus"></i></a>
                            </div>
                        </div>
                        <div class="instructor-image col-md-5 col-sm-6 col-xs-12">
                            <img src="img/instructor/big-2.jpg" alt="" />
                        </div>
                    </div>
                    <div class="tab-pane fade row" id="instructor-3">
                        <div class="instructor-details text-left col-md-7 col-xs-12">
                            <h4 class="instructor-name">სოსო თოლორაია</h4>
                            <h5 class="instructor-title">ინსტრუქტორი</h5>
                            <p>სავარაუდო ტექსტი, რომელიც ინსტრუქტორის გამოცდილების შესახებ მოგვიყვება, ლორემ იპსუმ არქაულად გაბრდღვიალებული შემოწმება მაწანწალებსალორემ იპსუმ არქაულად გაბრდღვიალებული შემოწმება მაწანწალებსალორემ იპსუმ არქაულად გაბრდღვიალებული შემოწმება მაწანწალებსა..</p>
                            <div class="instructor-social fix">
                                <a href="#"><i class="icofont icofont-social-facebook"></i></a>
                                <a href="#"><i class="icofont icofont-social-pinterest"></i></a>
                                <a href="#"><i class="icofont icofont-social-twitter"></i></a>
                                <a href="#"><i class="icofont icofont-social-google-plus"></i></a>
                            </div>
                        </div>
                        <div class="instructor-image col-md-5 col-sm-6 col-xs-12">
                            <img src="img/instructor/big-3.jpg" alt="" />
                        </div>
                    </div>
                    <div class="tab-pane fade row" id="instructor-4">
                        <div class="instructor-details text-left col-md-7 col-xs-12">
                            <h4 class="instructor-name">თომას ედისონი</h4>
                            <h5 class="instructor-title">ინსტრუქტორი</h5>
                            <p>სავარაუდო ტექსტი, რომელიც ინსტრუქტორის გამოცდილების შესახებ მოგვიყვება, ლორემ იპსუმ არქაულად გაბრდღვიალებული შემოწმება მაწანწალებსალორემ იპსუმ არქაულად გაბრდღვიალებული შემოწმება მაწანწალებსალორემ იპსუმ არქაულად გაბრდღვიალებული შემოწმება მაწანწალებსა..</p>
                            <div class="instructor-social fix">
                                <a href="#"><i class="icofont icofont-social-facebook"></i></a>
                                <a href="#"><i class="icofont icofont-social-pinterest"></i></a>
                                <a href="#"><i class="icofont icofont-social-twitter"></i></a>
                                <a href="#"><i class="icofont icofont-social-google-plus"></i></a>
                            </div>
                        </div>
                        <div class="instructor-image col-md-5 col-sm-6 col-xs-12">
                            <img src="img/instructor/big-4.jpg" alt="" />
                        </div>
                    </div>
                </div>
                <!-- Instructor Tab List -->
                <ul class="instructor-tab-list fix">
                    <li class="active"><a href="#instructor-1" data-toggle="tab"><img src="img/instructor/1.jpg" alt="" /></a></li>
                    <li><a href="#instructor-2" data-toggle="tab"><img src="img/instructor/2.jpg" alt="" /></a></li>
                    <li><a href="#instructor-3" data-toggle="tab"><img src="img/instructor/3.jpg" alt="" /></a></li>
                    <li><a href="#instructor-4" data-toggle="tab"><img src="img/instructor/4.jpg" alt="" /></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Pricing Area
============================================ -->
<div id="pricing-area" class="pricing-area overlay overlay-black overlay-40 pt-90 pb-60">
    <div class="container">
        <!-- Section Title -->
        <div class="row">
            <div class="section-title title-white text-center col-xs-12 mb-45">
                <h3 class="heading">ფასები</h3>
                <div class="excerpt">
                    <p>ლორემ იპსუმ არქაულად გაბრდღვიალებული შემოწმება მაწანწალებსალორემ იპსუმ არქაულად გაბრდღვიალებული შემოწმება მაწანწალებსა.</p>
                </div>
                <i class="icofont icofont-traffic-light"></i>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12 mb-30">
                <div class="single-pricing text-center">
                    <div class="pricing-head">
                        <h4>თეორია</h4>
                    </div>
                    <div class="pricing-price">
                        <h2><span>ლ</span>50</h2>
                    </div>
                    <ul class="pricing-details">
                        <li>1 თვიანი კურსი</li>
                        <li>3 საათი ყოველდღე</li>
                        <li>1 ტესტი კვირაში</li>
                        <li>20 ვიდეო კურსი</li>
                        <li>მართვის მოწმობა</li>
                    </ul>
                    <a href="#" class="pricing-action">აირჩიე პაკეტი</a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 mb-30">
                <div class="single-pricing text-center">
                    <div class="pricing-head">
                        <h4>თეორია და პრაქტიკა</h4>
                    </div>
                    <div class="pricing-price">
                        <h2><span>ლ</span>60</h2>
                    </div>
                    <ul class="pricing-details">
                        <li>2 თვიანი კურსი</li>
                        <li>3 საათი ყოველდღე</li>
                        <li>2 ტესტი კვირაში</li>
                        <li>40 ვიდეო კურსი</li>
                        <li>მართვის მოწმობა</li>
                    </ul>
                    <a href="#" class="pricing-action">აირჩიე პაკეტი</a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 mb-30">
                <div class="single-pricing active text-center">
                    <div class="pricing-head">
                        <h4>პრაქტიკა</h4>
                    </div>
                    <div class="pricing-price">
                        <h2><span>ლ</span>90</h2>
                    </div>
                    <ul class="pricing-details">
                        <li>3 თვიანი კურსი</li>
                        <li>5 საათი ყოველდღე</li>
                        <li>4 ტესტი კვირაში</li>
                        <li>70 ვიდეო კურსი</li>
                        <li>მართვის მოწმობა</li>
                    </ul>
                    <a href="#" class="pricing-action">აირჩიე პაკეტი</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- FAQ Area
============================================ -->
<div id="faq-area" class="faq-area bg-white pt-90 pb-60">
    <div class="container">
        <!-- Section Title -->
        <div class="row">
            <div class="section-title text-center col-xs-12 mb-45">
                <h3 class="heading">კითხვები რომელიც შეიძლება გაგიჩნდეს</h3>
                <div class="excerpt">
                    <p>ჩვენ მზად ვართ ყველა კითხვას გავცეთ პასუხი რომელიც დაგეხმარებათ სწორი არჩევანი გააკეთოთ</p>
                </div>
                <i class="icofont icofont-traffic-light"></i>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="panel-group" id="faq">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title"><a data-toggle="collapse" aria-expanded="true" data-parent="#faq" href="#faq-1">რამდენ ხანში ვისწავლი ტარებას?</a></h4>
                        </div>
                        <div id="faq-1" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <p>მიეთითება რამდენიხანი გრძელდება თეორიის და პრაქტიკის კურსები.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title"><a data-toggle="collapse" aria-expanded="false" data-parent="#faq" href="#faq-2">სად უნდა მოვიდე?</a></h4>
                        </div>
                        <div id="faq-2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>კვლავ დავუზუსტოთ მომხმარებელს ადგილმდებაორება. როგორც თეორიის სასწავლებლად ასევე სად უნდა გაიაროს პრაქტიკის კურსები.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title"><a data-toggle="collapse" aria-expanded="false" data-parent="#faq" href="#faq-3">სწავლა ჩემს გრაფიკს მოერგება?</a></h4>
                        </div>
                        <div id="faq-3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>დიახ ჩვენ მაქსიმალურად ვზრუნავთ ჩვენს მომხამარებელებზე. ამითვის უნდა დაგვიკავშირდეთ და შევადგენთ შესაბამის გრაფიკს, როგორც ინდივიდუალურად ასევე ჯგუფთან ერთად.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title"><a data-toggle="collapse" aria-expanded="false" data-parent="#faq" href="#faq-4">თეორიას ჩემით ვერ ვისწავლი?</a></h4>
                        </div>
                        <div id="faq-4" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>ისწავლი, ჩვენს საიტზე განთავსებული ტესტების და გამოცდები ამაში ძალიან დაგეხმარება.</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title"><a data-toggle="collapse" aria-expanded="false" data-parent="#faq" href="#faq-5">სხვა შეკითხვა?</a></h4>
                        </div>
                        <div id="faq-5" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>თუ შეკითხვა გაგიჩნდათ მოგვწერეთ როგორც აქ ასევე ფეისბუქ გვერდზე ან დაგვიკავშირდით ჩვენს ნომერზე 'აქ დაიწერება ავტიკოლის ნომერი' :)</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="faq-image col-md-6">
                <img src="{{ asset('images/static/questions.png') }}" alt="" />
            </div>
        </div>
    </div>
</div>
<!-- CTA Area
============================================ -->
<div class="cta-area pb-40 pt-40">
    <div class="container">
        <div class="row">
            <div class="call-to-action text-left col-md-10 col-md-offset-1 col-xs-12">
                <h3>დაიწყე თეორიის სწავლა ახლავე</h3>
                <a href="{{ url('study') }}" class="btn transparent ">კითხვებზე გადასვლა</a>
            </div>
        </div>
    </div>
</div>


@endsection