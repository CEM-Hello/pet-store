@extends('frontend.main')
@section('content')
<section id="jumbo">
  <div class="bg-image"></div>
  <div class="masthead-title">
    <h1>REAL, GOOD FOOD FOR DOGS & CATS</h1>
    <h2>We believe what’s good for people is good for pets too. Think about it — what gets YOU going? Real, fresh food
      made just for you, or something else that’s just ... not?</h2>
  </div>
</section>
<section class="info-links">
  <div class="store-info">
    <img src="{{asset('/frontend/assets/img/h-feature1.jpg')}}">
    <img src="{{asset('/frontend/assets/img/h-feature2.jpg')}}">
    <img src="{{asset('/frontend/assets/img/h-feature3.jpg')}}">
  </div>
</section>
<div class="margin-top-header"></div>
<div class="container-flex mobile-vertical-padded h-section-1">
  <div class="padding-block-medium">
    <h1 class="color-kale scaled">
      Get fresh with your pet’s food
    </h1>
  </div>
  <div class="padding-block-medium">
    <h2 class="padding-bottom">
      Don’t feed them anything you wouldn’t eat.
    </h2>
    <p class="fw-bold">
      Let’s get real, you don’t have to be a
      <a href="#" aria-label="Learn about Justin Richards and veterinary nutritionists">
        Veterinary Nutritionist
      </a>
      to know good food. But it’s nice to have one on staff. Every Pawsitively Pets
      meal is formulated by Dr. Justin Richards, DVM to ensure each recipe is made with fresh,
      whole ingredients and targeted vitamins and minerals for folks with paws.
    </p>
    <div class="container-flex">
      <div class="halves-fixed">
        <div class="padding-bottom">
          <a class="cta-link" href="/dog-food-recipes" aria-label="Fresh dog food recipes">For dogs</a>
        </div>
      </div>
      <div class="halves-fixed">
        <div class="padding-bottom">
          <a class="cta-link" href="/cat-food-recipes" aria-label="Fresh cat food recipes">For cats</a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="home-quote">
  <h2 class="home-quote-cycler">
    "My dog jumps with excitement at meal time."
  </h2>
</div>

<div>
  <img src="{{asset('/frontend/assets/img/hero_pork_ingredients.jpg')}}" class="stretch"
    alt="Pawsitively Pets Pork Potluck dog food recipe ingredients">
</div>
<div class="centered-block color-bg-kale color-bone">
  <div>
    <img src="{{asset('/frontend/assets/img/chicken_cuisine.jpg')}}" class="stretch" alt="Bowl of Pawsitively Pets chicken dog food">
  </div>
  <div class="mobile-vertical-padded">
    <div class="centered-block__content">
      <h1 class="color-tennis-ball padding-bottom">
        Sourced, cooked, mixed & packed with care
      </h1>
      <p class="fw-bold">
        We don’t just handle one part of the process &mdash; we oversee each
        step in our California and Nashville facilities. It’s what the industry
        calls “vertically integrated,” but we prefer to call it
        “made with love.”
      </p>
    </div>
  </div>
</div>

<div class="centered-block flex-direction-reverse color-bg-mushroom">
  <div>
    <img src="{{asset('/frontend/assets/img/cat_waiting_window.jpg')}}" class="stretch"
      alt="Cat waiting at window sill for Pawsitively Pets delivery">
  </div>
  <div class="mobile-vertical-padded">
    <div class="centered-block__content">
      <h1 class="scaled color-frisbee padding-bottom">
        Delivered to your door
      </h1>
      <p class="fw-bold">
        We don’t make you chase your tail. We ship cold, fresh, pre-portioned
        meals anywhere in the lower 48 states on your schedule.
      </p>
      <a href="/profile" class="cta-link" aria-label="Create a profile to sign up">Start trial</a>
    </div>
  </div>
</div>
<div class="centered-block mobile-vertical-padded">
  <div>
    <div class="centered-block__content">
      <h1 class="color-kale scaled padding-bottom">
        Change you can see
      </h1>
      <p class="fw-bold">We couldn’t make this stuff up. Other Paw Parents have reported not even
        recognizing their pet after just a few days.</p>
    </div>
  </div>
  <div>
    <div class="centered-block__content">
      <div class="home-timeline padding-bottom">
        <div class="home-timeline__date">
          <h2>Week 1</h2>
          <span class="fw-bold">
            <div>Excitement at meal time</div>
            <div>More energy</div>
          </span>
        </div>
        <div class="home-timeline__date">
          <h2>Week 2</h2>
          <span class="fw-bold">
            <div>Smaller stools</div>
            <div>Better breath</div>
          </span>
        </div>
        <div class="home-timeline__date">
          <h2>Week 4</h2>
          <span class="fw-bold">
            <div>Softer, silkier coat</div>
            <div>Less shedding</div>
          </span>
        </div>
        <div class="home-timeline__date">
          <h2>Month 3</h2>
          <span class="fw-bold">
            <div>Weight goals reached</div>
            <div>Increased stamina</div>
          </span>
        </div>
        <div class="home-timeline__date">
          <h2>Month 9</h2>
          <span class="fw-bold">
            <div>All-around happier vets</div>
            <div>All-around healthier pets</div>
          </span>
        </div>
      </div>
      <div>
        <a href="/profile" class="cta-link" aria-label="Start trial">Try it for 2 weeks</a>
      </div>
    </div>
  </div>
</div>
<div class="centered-block">
  <div>
    <img src="{{asset('/frontend/assets/img/microbiome_kit_vertical.jpg')}}" class="stretch"
      alt="Pawsitively Pets Microbiome testing kit box">
  </div>
  <div class="mobile-vertical-padded">
    <div class="centered-block__content">
      <h1 class="color-frisbee padding-bottom scaled">
        Real science
        <div>real insights</div>
        <div>real results</div>
      </h1>
      <p class="fw-bold">
        It takes a lot of hard work (and advanced degrees) to make feeding your
        pet right this easy. Right now, our researchers are focused on your
        pet’s “microbiome.” That’s a fancy word for gut health. They study it
        by running tests on a not so fancy thing &mdash; your pet’s poop.
      </p>
      <div>
        <a href="/site/research-and-development" class="cta-link"
          aria-label="Learn more about Pawsitively Pets research and development">Learn more</a>
      </div>
    </div>
  </div>
</div>
<div class="container-flex flex-justify-center color-bg-bowl-faint animate">
  <div class="thirds">
    <img src="{{asset('/frontend/assets/img/press/business_insider.png')}}" class="stretch" alt="Business insider logo">
  </div>
  <div class="thirds">
    <img src="{{asset('/frontend/assets/img/press/buzzfeed.png')}}" class="stretch" alt="BuzzFeed logo">
  </div>
  <div class="thirds">
    <img src="{{asset('/frontend/assets/img/press/inc.png')}}" class="stretch" alt="Inc. logo">
  </div>
  <div class="thirds">
    <img src="{{asset('/frontend/assets/img/press/people.png')}}" class="stretch" alt="People logo">
  </div>
  <div class="thirds">
    <img src="{{asset('/frontend/assets/img/press/sfweekly.png')}}" class="stretch" alt="SFWeekly logo">
  </div>
</div>
@endsection