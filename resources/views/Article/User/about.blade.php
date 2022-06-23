@extends('components.User.master')
@section('title', 'About')
@section('content')
<!-- Start Team Member -->
<section class="container py-5">
    <div class="row pt-5 pb-3 d-lg-flex align-items-center gx-5">
        <div class="col-lg-8">
            <h2 class="h2 py-5 typo-space-line">About Me</h2>
            <p class="text-muted light-300">
                My name is Muhammad Rayzidane Nazher Dinata, and yes, it's quite a long name. You guys can call me Zi
                anyway. I made this own Website by myself, thats right, by myself. But i'm not made this from scratch.
                I'm using Template so a dont need to make the whole thing, and just to make this Website way better
                looking than me. I'm also using Laravel 8, Html 5, and Bootsrap.
            </p>
            <p class="text-muted light-300">
                Anyway, why i made this website? because... I like Superheroes, i like Comic books, i grew up with them.
                I think it's fun to share what i know to people. I know there is so many people that really love
                Superheroes, and then there is people who wanna know about Superheroes. Perhaps, they would be so
                gladful to find out my Website.
            </p>
            <p class="text-muted light-300">
                But there is another reason actually... Yes, money. I need money. By making this Website, i can make a
                good amount of money now. You can do it too, by doing what i'm doing, making a website. Unfortunately, i
                don't make any education Website about how to make your own Website. Sorry. Anyway, Thank you so much
                for visiting my Website. I hope you enjoy it. Have Fun!
            </p>
        </div>
        <div class="team-member col-lg-4">
            <img class="team-member-img img-fluid rounded-circle p-4" src="/assets2/img/photoprofile.png"
                alt="Card image">
            <ul class="team-member-caption list-unstyled text-center pt-4 light-300">
                <li>
                    <h6>
                        <b>Muhammad Rayzidane Nazher Dinata</b>
                    </h6>
                </li>
                <li>
                    <h6>
                        Junior Web Development
                    </h6>
                </li>
            </ul>
        </div>
    </div>
</section>
<!-- End Team Member -->
@endsection
