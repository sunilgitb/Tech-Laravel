@extends('frontend.layouts.app')
@include('frontend.layouts.header')
<br><br><br><br>
<div class="container">
    <div class="card">
      <div class="card__header">
        <img src="https://source.unsplash.com/600x400/?computer" alt="card__image" class="card__image" width="600">
      </div>
      <div class="card__body">
        <span class="tag tag-blue">Technology</span>
        <h4>What's new in 2022 Tech</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
      </div>
      <div class="card__footer">
        <div class="user">
          <img src="https://i.pravatar.cc/40?img=1" alt="user__image" class="user__image">
          <div class="user__info">
            <h5>Jane Doe</h5>
            <small>2h ago</small>
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card__header">
        <img src="https://source.unsplash.com/600x400/?food" alt="card__image" class="card__image" width="600">
      </div>
      <div class="card__body">
        <span class="tag tag-brown">Food</span>
        <h4>Delicious Food</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi perferendis </p>
      </div>
      <div class="card__footer">
        <div class="user">
          <img src="https://i.pravatar.cc/40?img=2" alt="user__image" class="user__image">
          <div class="user__info">
            <h5>Jony Doe</h5>
            <small>Yesterday</small>
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card__header">
        <img src="https://source.unsplash.com/600x400/?car,automobile" alt="card__image" class="card__image" width="600">
      </div>
      <div class="card__body">
        <span class="tag tag-red">Automobile</span>
        <h4>Race to your heart content</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
      </div>
      <div class="card__footer">
        <div class="user">
          <img src="https://i.pravatar.cc/40?img=3" alt="user__image" class="user__image">
          <div class="user__info">
            <h5>John Doe</h5>
            <small>2d ago</small>
          </div>
        </div>
      </div>
    </div>
  </div><br>
<div class="container">
    <div class="card">
      <div class="card__header">
        <img src="https://source.unsplash.com/600x400/?computer" alt="card__image" class="card__image" width="600">
      </div>
      <div class="card__body">
        <span class="tag tag-blue">Technology</span>
        <h4>What's new in 2022 Tech</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi perferendis </p>
      </div>
      <div class="card__footer">
        <div class="user">
          <img src="https://i.pravatar.cc/40?img=1" alt="user__image" class="user__image">
          <div class="user__info">
            <h5>Jane Doe</h5>
            <small>2h ago</small>
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card__header">
        <img src="https://source.unsplash.com/600x400/?food" alt="card__image" class="card__image" width="600">
      </div>
      <div class="card__body">
        <span class="tag tag-brown">Food</span>
        <h4>Delicious Food</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
      </div>
      <div class="card__footer">
        <div class="user">
          <img src="https://i.pravatar.cc/40?img=2" alt="user__image" class="user__image">
          <div class="user__info">
            <h5>Jony Doe</h5>
            <small>Yesterday</small>
          </div>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card__header">
        <img src="https://source.unsplash.com/600x400/?car,automobile" alt="card__image" class="card__image" width="600">
      </div>
      <div class="card__body">
        <span class="tag tag-red">Automobile</span>
        <h4>Race to your heart content</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
      </div>
      <div class="card__footer">
        <div class="user">
          <img src="https://i.pravatar.cc/40?img=3" alt="user__image" class="user__image">
          <div class="user__info">
            <h5>John Doe</h5>
            <small>2d ago</small>
          </div>
        </div>
      </div>
    </div>
  </div>
<br><br><br>
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
    @import url("https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap");

*,
*::before,
*::after {
  box-sizing: border-box;
  padding: 0;
  margin: 0;
}


.container {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  max-width: 1200px;
  margin-block: 2rem;
  gap: 2rem;
}

img {
  max-width: 100%;
  display: block;
  object-fit: cover;
}

.card {
  display: flex;
  flex-direction: column;
  width: clamp(20rem, calc(20rem + 2vw), 22rem);
  overflow: hidden;
  box-shadow: 0 .1rem 1rem rgb(254, 254, 254);
  border-radius: 1em;
  background: #ECE9E6;
background: linear-gradient(to right, #FFFFFF, #ECE9E6);

}



.card__body {
  padding: 1rem;
  display: flex;
  flex-direction: column;
  gap: .5rem;
}


.tag {
  align-self: flex-start;
  padding: .25em .75em;
  border-radius: 1em;
  font-size: .75rem;
}

.tag + .tag {
  margin-left: .5em;
}

.tag-blue {
  background: #56CCF2;
background: linear-gradient(to bottom, #2F80ED, #56CCF2);
  color: #fafafa;
}

.tag-brown {
  background: #D1913C;
background: linear-gradient(to bottom, #FFD194, #D1913C);
  color: #fafafa;
}

.tag-red {
  background: #cb2d3e;
background: linear-gradient(to bottom, #ef473a, #cb2d3e);
  color: #fafafa;
}

.card__body h4 {
  font-size: 1.5rem;
  text-transform: capitalize;
}

.card__footer {
  display: flex;
  padding: 1rem;
  margin-top: auto;
}

.user {
  display: flex;
  gap: .5rem;
}

.user__image {
  border-radius: 50%;
}

/* .user__info > small {
  color: #666;
} */
  </style>

@include('frontend.layouts.footer')