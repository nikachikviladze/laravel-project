<div class="find-course-form float-left text-left wow fadeInUp" data-wow-duration=".9s" data-wow-delay="3s">
    <h5><span>ჩაეწერეთ ავტოსკოლაში</span><i class="icofont icofont-police-car"></i></h5>
    <form method="post" action="/">
    	{{ csrf_field() }}
    	@include('layouts.message')
        <div class="course-input"><i class="icofont icofont-user-alt-3"></i> <input type="text" name="name" placeholder="თქვენი სახელი" required /></div>
        <div class="course-input"><i class="icofont icofont-envelope"></i> <input type="text" name="email" placeholder="თქვენი მეილი" required /></div>
        <div class="course-input"><i class="icofont icofont-phone"></i> <input type="number" name="phone" placeholder="ტელეფონი" required /></div>
        <div class="course-select"><i class="icofont icofont-clock-time"></i>
            <select class="cusselect" name="time">
                <option disabled selected>დრო</option>
                <option>9:00 AM</option>
                <option>12:00 PM</option>
                <option>03:00 PM</option>
                <option>06:00 PM</option>
            </select>
        </div>
        <div class="course-select course-date"><i class="icofont icofont-calendar"></i><input class="date-picker" type="text" placeholder="დღე" name="day"></div>
        <div class="course-select"><i class="icofont icofont-copy-alt"></i>
            <select class="cusselect" name="curse">
                <option disabled selected>კურსი</option>
                <option>თეორია და პრაქტიკა</option>
                <option>თეორია</option>
                <option>პრაქტიკა</option>
                <option>ქალაქში ტარება</option>
            </select>
        </div>
        <div class="course-select"><i class="icofont icofont-car-alt-4"></i>
            <select class="cusselect" name="type">
                <option disabled selected>საგამოცდო ტიპი</option>
                @foreach($categories as $cat)
                	<option>{{ $cat->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="course-submit"><input type="submit" value="ჩაეწერეთ" /></div>
    </form>
</div>