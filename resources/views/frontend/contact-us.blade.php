@extends('frontend.layouts.app')
@include('frontend.layouts.header')

<body>
<!-- @if ($errors->any())
   <div class="alert alert-danger">
      <ul>
         @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
         @endforeach
      </ul>
   </div>
@endif -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Tech Simians</title>
</head>

    <main>
      <section class="contact">
        <div class="contact__row">
        <form class="contact__form" action="{{ route('contact.submit') }}" method="POST">
    @csrf

    <h1 class="contact__title">Let’s Talk, Let’s Connect!</h1>
    @if(session('success'))
    <div id="success-message" class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <div class="input">
        <input class="input__field" placeholder="Name" name="name" value="{{ old('name') }}" required />
        @error('name')
        <div class="input__message">{{ $message }}</div>
        @enderror
    </div>
    <div class="input">
        <input class="input__field" placeholder="Email" type="email" name="email" value="{{ old('email') }}" required />
        @error('email')
        <div class="input__message" style="color:red;">{{ $message }}</div>
        @enderror
    </div>
    <div class="input">
        <input class="input__field" placeholder="Phone" name="phone" type="tel" maxlength="10" value="{{ old('phone') }}" required />
        @error('phone')
        <div class="input__message">{{ $message }}</div>
        @enderror
    </div>
    <div class="input">
        <textarea name="message" class="input__field input__field--textarea" placeholder="Message" required
            cols="30" rows="5">{{ old('message') }}</textarea>
        @error('message')
        <div class="input__message">{{ $message }}</div>
        @enderror
    </div>
    <div class="contact__form--submit">
        <button type="submit" class="button button--white">Send request</button>
    </div>
</form>


          <div class="contact__right">
            <div class="contact__item">
              <div class="contact__item-icon">
                <svg
                  width="63"
                  height="63"
                  viewBox="0 0 63 63"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <circle
                    cx="31.5"
                    cy="31.5"
                    r="30.5"
                    stroke="#000"
                    stroke-width="1.5"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-dasharray="0.01 5"
                  />
                  <path
                    d="M31.95 32.09a3.58 3.58 0 1 0 0-7.17 3.58 3.58 0 0 0 0 7.17Z"
                    fill="#0047FF"
                  />
                  <path
                    d="M40.9 28.5c0 8.07-8.95 14.34-8.95 14.34s-8.96-6.27-8.96-14.33a8.96 8.96 0 0 1 17.92 0v0Z"
                    stroke="#000"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                </svg>
              </div>
              <div class="contact__item-text">
              B/305, Everest Chambers, Marol Naka, Andheri East, Mumbai - 400059, India
                <a href="{{url('https://www.google.com/maps/dir/19.1299584,72.8334336/techsimians/@19.1190713,72.8200359,13z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x3be7b1e3b0d9d8ab:0x291f369c19244030!2m2!1d72.8797716!2d19.1083072?entry=ttu')}}" target="_blank"
                  >Direction
                  <svg
                    width="11"
                    height="11"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path d="M11 1 7 11 5 6 0 4l10-4 1 1Z" fill="#0047FF" />
                  </svg>
                </a>
              </div>
            </div>
            <div class="contact__item">
              <div class="contact__item-icon">
                <svg
                  width="63"
                  height="64"
                  viewBox="0 0 63 64"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <circle
                    cx="31.5422"
                    cy="32.1639"
                    r="30.5422"
                    stroke="black"
                    stroke-width="1.5"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-dasharray="0.01 5"
                  />
                  <path
                    d="M31.9346 34.2L21.3616 25.241H42.5375L31.9346 34.2Z"
                    fill="#0047FF"
                  />
                  <path
                    d="M21.3616 26.3302C21.3615 26.1871 21.3876 26.0454 21.4384 25.9133C21.4892 25.7811 21.5638 25.661 21.6577 25.5598C21.7517 25.4586 21.8632 25.3784 21.986 25.3237C22.1088 25.269 22.2404 25.2409 22.3733 25.241H41.5258C41.6586 25.241 41.7902 25.2691 41.9129 25.3239C42.0357 25.3786 42.1472 25.4588 42.2412 25.56C42.3351 25.6611 42.4096 25.7812 42.4605 25.9134C42.5113 26.0455 42.5375 26.1871 42.5375 26.3302V36.2409C42.5375 37.8978 41.1943 39.2409 39.5375 39.2409H24.3616C22.7047 39.2409 21.3616 37.8978 21.3616 36.2409V26.3302Z"
                    stroke="black"
                    stroke-miterlimit="10"
                  />
                </svg>
              </div>
              <div class="contact__item-text">
                info@techsimians.com
              </div>
            </div>
            <div class="contact__item">
              <div class="contact__item-icon">
                <svg
                  width="63"
                  height="64"
                  viewBox="0 0 63 64"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <circle
                    cx="31.5422"
                    cy="31.9711"
                    r="30.5422"
                    stroke="black"
                    stroke-width="1.5"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-dasharray="0.01 5"
                  />
                  <path
                    d="M28.2844 30.3422L25.4338 23.0121L27.47 22.6049L29.5061 28.3061L28.2844 30.3422Z"
                    fill="#0047FF"
                  />
                  <path
                    d="M41.3157 39.3013L33.5786 36.0434L35.8326 34.6326L41.7229 37.2651L41.3157 39.3013Z"
                    fill="#0047FF"
                  />
                  <path
                    d="M27.7632 32.4456C28.6394 34.2549 30.1024 35.7142 31.9139 36.5857C32.0475 36.6489 32.1953 36.6763 32.3428 36.6651C32.4902 36.6539 32.6322 36.6045 32.7547 36.5218L35.4154 34.7445C35.5329 34.6647 35.6688 34.6161 35.8102 34.6031C35.9517 34.59 36.0941 34.6131 36.2242 34.67L41.2051 36.8092C41.3753 36.88 41.5175 37.0049 41.6098 37.1645C41.7021 37.3241 41.7394 37.5096 41.7159 37.6925C41.558 38.9247 40.9566 40.0571 40.0242 40.8779C39.0917 41.6987 37.8922 42.1516 36.65 42.1518C32.8112 42.1518 29.1296 40.6269 26.4152 37.9125C23.7007 35.198 22.1758 31.5165 22.1758 27.6777C22.1761 26.4354 22.629 25.2359 23.4497 24.3034C24.2705 23.371 25.4029 22.7696 26.6351 22.6117C26.818 22.5882 27.0035 22.6255 27.1631 22.7178C27.3228 22.8101 27.4476 22.9523 27.5185 23.1226L29.6577 28.114C29.7133 28.2421 29.7366 28.3819 29.7254 28.5211C29.7143 28.6603 29.6691 28.7946 29.5938 28.9122L27.8165 31.6155C27.7373 31.7378 27.6909 31.8783 27.6816 32.0236C27.6722 32.169 27.7004 32.3143 27.7632 32.4456V32.4456Z"
                    stroke="black"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                </svg>
              </div>
              <div class="contact__item-text">
                +91 80804 25120
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

  </body>

  <style>
    #success-message {
    background-color: #c3e6cb; /* Set the desired shade of green */
    color: #155724; /* Set the desired text color */
    padding: 10px;
    border-radius: 5px;
    margin-bottom: 10px;
}

  </style>
  @include('frontend.layouts.footer')
