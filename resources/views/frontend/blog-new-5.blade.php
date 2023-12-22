
@extends('frontend.layouts.app')
@include('frontend.layouts.header')
<br><br><br><br>
<h2>Latest Posts</h2>
<div class="card-container">
    <div class="card card-1">
      <div class="card-img" style="background-image: url(https://source.unsplash.com/Qm_n6aoYzDs);"></div>
      <a href="" class="card-link">
        <div class="card-img-hovered"></div>
      </a>
      <div class="card-info">
        <div class="card-about">
          <a class="card-tag tag-news">NEWS</a>
          <div class="card-time">6/11/2018</div>
        </div>
        <h1 class="card-title">There have been big Tesla accident at New Jersey</h1>
        <div class="card-creator">by <a href="">Sardorbek Usmonov</a></div>
      </div>
    </div>
    <div class="card card-2">
      <div class="card-img" style="background-image: url(https://source.unsplash.com/C-v1p2DTakA);"></div>
      <a href="" class="card-link">
        <div class="card-img-hovered"></div>
      </a>
      <div class="card-info">
        <div class="card-about">
          <a class="card-tag">Tech</a>
          <div class="card-time">6/07/2018</div>
        </div>
        <h1 class="card-title">Samsung laptops is exploding again</h1>
        <div class="card-creator">by <a href="">Tyler Platt</a></div>
      </div>
    </div>
    <div class="card card-3">
      <div class="card-img" style="background-image: url(https://source.unsplash.com/V0L1LH7qWOQ);"></div>
      <a href="" class="card-link">
        <div class="card-img-hovered"></div>
      </a>
      <div class="card-info">
        <div class="card-about">
          <a class="card-tag tag-deals">Deals</a>
          <div class="card-time">5/27/2018</div>
        </div>
        <h1 class="card-title">Apple is having big Sale for the first time</h1>
        <div class="card-creator">by <a href="">Timur Mirzoyev</a></div>
      </div>
    </div>
    {{-- <div class="card card-4">
      <div class="card-img" style="background-image: url(https://source.unsplash.com/zAi2Is48-MA);"></div>
      <a href="" class="card-link">
        <div class="card-img-hovered"></div>
      </a>
      <div class="card-info">
        <div class="card-about">
          <a class="card-tag tag-politics">Politics</a>
          <div class="card-time">5/20/2018</div>
        </div>
        <h1 class="card-title">Net-Nutrality is coming to its end</h1>
        <div class="card-creator">by <a href="">Gregoy Trem</a></div>
      </div>
    </div> --}}

    <div class="card card-1">
        <div class="card-img" style="background-image: url(https://source.unsplash.com/Qm_n6aoYzDs);"></div>
        <a href="" class="card-link">
          <div class="card-img-hovered"></div>
        </a>
        <div class="card-info">
          <div class="card-about">
            <a class="card-tag tag-news">NEWS</a>
            <div class="card-time">6/11/2018</div>
          </div>
          <h1 class="card-title">There have been big Tesla accident at New Jersey</h1>
          <div class="card-creator">by <a href="">Sardorbek Usmonov</a></div>
        </div>
      </div>
      <div class="card card-2">
        <div class="card-img" style="background-image: url(https://source.unsplash.com/C-v1p2DTakA);"></div>
        <a href="" class="card-link">
          <div class="card-img-hovered"></div>
        </a>
        <div class="card-info">
          <div class="card-about">
            <a class="card-tag">Tech</a>
            <div class="card-time">6/07/2018</div>
          </div>
          <h1 class="card-title">Samsung laptops is exploding again</h1>
          <div class="card-creator">by <a href="">Tyler Platt</a></div>
        </div>
      </div>
      <div class="card card-3">
        <div class="card-img" style="background-image: url(https://source.unsplash.com/V0L1LH7qWOQ);"></div>
        <a href="" class="card-link">
          <div class="card-img-hovered"></div>
        </a>
        <div class="card-info">
          <div class="card-about">
            <a class="card-tag tag-deals">Deals</a>
            <div class="card-time">5/27/2018</div>
          </div>
          <h1 class="card-title">Apple is having big Sale for the first time</h1>
          <div class="card-creator">by <a href="">Timur Mirzoyev</a></div>
        </div>
      </div>
</div>


<div class="blognav__container">
    <div class="blognav__item">
        <a href="#" class="blognav__button">Previous Post</a>
        {{-- <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p> --}}
    </div>
    <div class="blognav__item">
        <a href="#" class="blognav__button">Next Post</a>
        {{-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, culpa esse.</p> --}}
    </div>
</div>


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- select2 -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />

  <!-- select2-bootstrap4-theme -->
  <link href="https://raw.githack.com/ttskch/select2-bootstrap4-theme/master/dist/select2-bootstrap4.css" rel="stylesheet"> <!-- for live demo page -->
  <link href="select2-bootstrap4.css" rel="stylesheet"> <!-- for local development env -->

<div class="wrapper">
<div class="container">
  <h3>Select2 multi-select example</h3>
  <form>
    <div class="form-group">
      <label>Example of multiple select</label>
      <select multiple placeholder="Choose skills" data-allow-clear="1">
        <option>HTML</option>
        <option>CSS</option>
        <option>JavaScript</option>
        <option>PHP</option>
        <option>MySQL</option>
      </select>
    </div>
</form>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

<script>
  $(function () {
  $('select').each(function () {
    $(this).select2({
      theme: 'bootstrap4',
      width: 'style',
      placeholder: $(this).attr('placeholder'),
      allowClear: Boolean($(this).data('allow-clear')),
    });
  });
});
</script>
<style>

select {
  width: 100%;
  min-height: 100px;
  border-radius: 3px;
  border: 1px solid #444;
  padding: 10px;
  color: #444444;
  font-size: 14px;
}
</style>
<style>
@media(min-width: 991px){
    .blognav__item {
    flex-basis: 48%; /* Adjust the width as needed */
    max-height: 100px; /* Adjust the height as needed */
    overflow: hidden;
    padding:10px!important;
    max-width:22%!important;
}
}
.blognav__container {
    display: flex;
    justify-content: space-between;
}

/* .blognav__item {
    flex-basis: 28%; /* Adjust the width as needed */
} */
.blognav__item {
    flex-basis: 48%; /* Adjust the width as needed */
    max-height: 100px; /* Adjust the height as needed */
    overflow: hidden;
    padding:10px!important;
    width:40%;
}

.blognav__button {
    display: block;
    /* padding: 10px 20px; */
    background-color: #71BC2F;
    color: #fff;

    text-decoration: none;
    border-radius: 5px;
    margin-bottom: 10px;
}

.blognav__item p {
    margin: 0;
}
</style>

  <style>
/* RESET */
*
/* RESET */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  background: #ebecf0;
  font-family: "Open Sans", sans-serif;
  min-height: 100vh;
}

a {
  text-decoration: none;
  color: #172b4d;
}

h1 {
  font-family: "Song Myung", serif;
}

/* DEFAULT STYLE */
:root {
  font-size: 16px;
  --card-img-height: 150px;
}

.card-container {
  width: 100%;
  height: 150vh;
  display: flex;
  flex-flow: row wrap;
  justify-content: center;
  align-items: center;
  transition: all 200ms ease-in-out;
}

.card {
  align-self: flex-start;
  position: relative;
  width: 325px;
  min-width: 275px;
  margin: 1.25rem 0.75rem;
  background: white;
  transition: all 300ms ease-in-out;
}

.card .card-img {
  visibility: hidden;
  width: 100%;
  height: var(--card-img-height);
  background-repeat: no-repeat;
  background-position: center center;
  background-size: cover;
}

.card .card-img-hovered {
  --card-img-hovered-overlay: linear-gradient(
    to bottom,
    rgba(0, 0, 0, 0),
    rgba(0, 0, 0, 0)
  );
  transition: all 350ms ease-in-out;
  background-repeat: no-repeat;
  background-position: center center;
  background-size: cover;
  width: 100%;
  position: absolute;
  height: var(--card-img-height);
  top: 0;
}

.card .card-info {
  position: relative;
  padding: 0.75rem 1.25rem;
  transition: all 200ms ease-in-out;
}

.card .card-info .card-about {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 0.75rem 0;
  transition: all 200ms ease-in-out;
}

.card .card-info .card-about .card-tag {
  width: 60px;
  max-width: 100px;
  padding: 0.2rem 0.5rem;
  font-size: 12px;
  text-align: center;
  text-transform: uppercase;
  letter-spacing: 1px;
  background: #505f79;
  color: #fff;
}

.card .card-info .card-about .card-tag.tag-news {
  background: #36b37e;
}

.card .card-info .card-about .card-tag.tag-deals {
  background: #ffab00;
}

.card .card-info .card-about .card-tag.tag-politics {
  width: 71px;
  background: #ff5630;
}

.card .card-info .card-about .card-time {
  font-size: 12px;
}

.card .card-info .card-title {
  z-index: 10;
  font-size: 1.5rem;
  padding-bottom: 0.75rem;
  transition: all 350ms ease-in-out;
}

.card .card-info .card-creator {
  padding-bottom: 0.75rem;
  transition: all 250ms ease-in-out;
}

.card:hover {
  cursor: pointer;
  box-shadow: 0px 15px 35px rgba(227, 252, 239, 0.1),
    0px 5px 15px rgba(0, 0, 0, 0.07);
  transform: scale(1.025);
}

.card:hover .card-img-hovered {
  --card-img-hovered-overlay: linear-gradient(
    to bottom,
    rgba(0, 0, 0, 0),
    rgba(0, 0, 0, 0.65)
  );
  height: 100%;
}

.card:hover .card-about,
.card:hover .card-creator {
  opacity: 0;
}

.card:hover .card-info {
  background-color: transparent;
}

.card:hover .card-title {
  color: #ebecf0;
  transform: translate(0, 40px);
}

/* CARD IMAGES */
.card-1 .card-img,
.card-1 .card-img-hovered {
  background-image: var(--card-img-hovered-overlay),
    url(https://source.unsplash.com/Qm_n6aoYzDs);
}

.card-2 .card-img,
.card-2 .card-img-hovered {
  background-image: var(--card-img-hovered-overlay),
    url(https://source.unsplash.com/C-v1p2DTakA);
}

.card-3 .card-img,
.card-3 .card-img-hovered {
  background-image: var(--card-img-hovered-overlay),
    url(https://source.unsplash.com/V0L1LH7qWOQ);
}

.card-4 .card-img,
.card-4 .card-img-hovered {
  background-image: var(--card-img-hovered-overlay),
    url(https://source.unsplash.com/zAi2Is48-MA);
}
</style>

@include('frontend.layouts.footer')