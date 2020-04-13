@extends('layouts.app')

@section('content')

<div x-data="{ open: false }" class="relative bg-white overflow-hidden mt-0">
  <div class="max-w-screen-xl mx-auto">
    <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">

      <nav-bar></nav-bar>

      <div class="mt-10 mx-auto max-w-screen-xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
          {{-- <img class="sm:text-center md:text-center max-w-xs" src="img/svgs/covid.svg" alt="Fegocoosa"> --}}
        <div class="sm:text-center lg:text-left delay">
          {{-- <img class="absolute inset-0 w-full h-full object-cover object-center opacity-25" src="img/svgs/covid.svg" alt=""> --}}
          {{-- <div class="sm:text-center lg:text-left">
              <svg class="flex h-32 w-auto fill-current text-gray-600" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
              <g data-name="07-banned" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="1"><circle cx="32" cy="32" r="31"/><path d="M6 32a26 26 0 0042.6 20.012L11.988 15.4A25.9 25.9 0 006 32zM58 32a26 26 0 00-42.6-20.012L52.012 48.6A25.891 25.891 0 0058 32zM27.1 23.682a3 3 0 014.218 4.218"/><ellipse cx="39" cy="27.5" rx="2" ry="2.5" transform="rotate(-23.799 39 27.5)"/><ellipse cx="24.5" cy="35" rx="2" ry="2.5" transform="rotate(-68.052 24.5 35)"/><path d="M43.2 40.365A13.929 13.929 0 0045.841 34H52v.5a1.5 1.5 0 003 0v-5a1.5 1.5 0 00-3 0v.5h-6.159a13.915 13.915 0 00-2.864-6.648l2.812-2.812.353.353a1.5 1.5 0 102.121-2.121l-3.535-3.535a1.5 1.5 0 00-2.121 2.121l.353.353-2.88 2.88A13.912 13.912 0 0034 18.159V12h.5a1.5 1.5 0 000-3h-5a1.5 1.5 0 000 3h.5v6.159a13.912 13.912 0 00-6.08 2.432M20.56 23.974A13.885 13.885 0 0018.159 30H12v-.5a1.5 1.5 0 00-3 0v5a1.5 1.5 0 003 0V34h6.159a13.912 13.912 0 002.432 6.08l-2.38 2.38-.353-.353a1.5 1.5 0 00-2.121 2.121l3.535 3.535a1.5 1.5 0 002.121-2.121l-.353-.353 2.312-2.312A13.915 13.915 0 0030 45.841V52h-.5a1.5 1.5 0 000 3h5a1.5 1.5 0 000-3H34v-6.159a13.911 13.911 0 006.372-2.647"/><ellipse cx="31.5" cy="41" rx="2" ry="1.5" transform="rotate(-41.911 31.5 41)"/></g>
            </svg>
          </div> --}}
          <h2 class="font-boing text-7xl tracking-tight leading-none text-gray-900 sm:text-5xl sm:leading-none md:text-7xl animated slideInDown">
           How are you helping to solve this
            {{-- <br class="xl:hidden" /> --}}
            <br class="xl:hidden" />
            {{-- <div class=""></div> --}}
            <span class="text-teal-600">crisis?</span>
          </h2>
          <p class="font-montserrat mt-3 md:text-base sm:text-sm text-gray-700 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0 animated slideInLeft">
            {{-- The coronavirus disease, COVID-19 is a global pandemic. Are you working on an initiative or interested in supporting any of these initiatives? --}}
            In response to the covid-19 pandemic, many distruptive thinkers, business owners and entrepreneurial individuals have birthed beautiful initiatives in Africa. We have a resource bank of initiatives, solutions and partners helping to flatten the curve and reduce the effect of this pandemic and crisis on the wellbeing of people in any of the 54 African countries.
          </p>
          <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
            <div class="rounded-md shadow">
              <a href="/support" class="font-montserrat w-full flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-teal-600 hover:bg-teal-500 focus:outline-none focus:shadow-outline transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10 shadow-lg hover:shadow-outline">
                Sign up your Initiative
              </a>
            </div>
            <div class="mt-3 sm:mt-0 sm:ml-3">
              <a href="#" class="font-montserrat w-full flex items-center justify-center px-8 py-3 border border-transparent md:text-md sm:text-sm leading-6 font-medium rounded-md text-teal-700 bg-teal-100 hover:text-teal-600 hover:bg-teal-50 focus:outline-none focus:shadow-outline focus:border-teal-300 transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">
                List of Initiatives
              </a>
            </div>
          </div>
      </div>
      <svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-white transform translate-x-1/2" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none">
        <polygon points="50,0 100,0 50,100 0,100" />
      </svg>
    </div>
  </div>
  </div>
  <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
    <div class="absolute inset-0 w-full h-full bg-teal-900 opacity-50"></div>
    <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full translate-x-1/2" fill="currentColor" src="img/coro.jpg" alt="" />

  </div>
</div>



<div class="py-12 bg-gray-50">
  <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="md:flex">
      <div class="md:w-1/2 pt-2">
        <h3 class="font-boing mt-2 text-2xl leading-8 tracking-normal text-gray-800">
          Are you working on an initiative ?
        </h3>
        <p class="mt-4 mb-4 max-w-2xl md:text-md sm:text-sm leading-7 text-gray-700 font-montserrat">
          or is your company / non-profit / government working on one - to reduce the effect of the crisis? This may include rapidly prototyping equipment, scientific research, promoting new ways of distancing and collaboration, or other initiatives to tackle primary and secondary effects of the crisis?
        </p>

        <button class="font-montserrat shadow inline-flex items-center bg-teal-400 hover:bg-teal-600 focus:outline-none focus:shadow-outline text-white text-sm font-normal py-2 px-4 rounded-lg tracking-wide">
        Check list of solution providers
          <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 text-gray-300" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
            <circle cx="12" cy="12" r="9" />
            <line x1="16" y1="12" x2="8" y2="12" />
            <line x1="16" y1="12" x2="12" y2="16" />
            <line x1="16" y1="12" x2="12" y2="8" />
          </svg>
      </button>
      </div>
      <div class="md:w-1/2 content-center sm:text-left pt-6 px-0">
        {{-- <div class="mt-3 sm:mt-0 sm:ml-3"> --}}
          <svg class="w-64 h-48 object-cover mx-auto" stroke="currentColor" fill="none" viewBox="0 0 802.027 590.916" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"><path fill="#e6e6e6" d="M464.906 218.808h337.121v9.889H464.906z"/><path fill="#e6e6e6" d="M492.774 136.101h85.404v85.404h-85.404z"/><path fill="#ccc" d="M509.855 153.182h51.242v51.242h-51.242z"/><path fill="#e6e6e6" d="M684.259 136.101h21.576v85.404h-21.576z"/><path fill="#ccc" d="M684.259 149.586h21.576v9.889h-21.576zM684.259 192.737h21.576v9.889h-21.576z"/><path fill="#e6e6e6" d="M650.997 136.101h21.576v85.404h-21.576z"/><path fill="#ccc" d="M650.997 149.586h21.576v9.889h-21.576zM650.997 192.737h21.576v9.889h-21.576z"/><path fill="#e6e6e6" d="M705.09 145.321l19.335-9.573 37.893 76.537-19.336 9.573z"/><path fill="#ccc" d="M711.072 157.405l19.336-9.573 4.388 8.862-19.336 9.573zM730.219 196.077l19.336-9.573 4.387 8.862-19.336 9.573z"/><path fill="#e6e6e6" d="M524.688 170.382l10.866 18.819 10.865 18.819h-43.461l10.865-18.819 10.865-18.819z"/><path fill="#e6e6e6" d="M543.567 173.978l10.865 18.819 10.866 18.819h-43.461l10.865-18.819 10.865-18.819z"/><circle cx="551.209" cy="162.171" r="6.293" fill="#e6e6e6"/><path fill="#e6e6e6" d="M802.027 92.95H464.906v-9.89h337.121z"/><path fill="#e6e6e6" d="M774.158 85.757h-85.404V.353h85.404z"/><path fill="#ccc" d="M757.078 68.676h-51.242V17.434h51.242z"/><path fill="#e6e6e6" d="M582.673 85.757h-21.576V.353h21.576z"/><path fill="#ccc" d="M582.673 23.727h-21.576v-9.89h21.576zM582.673 66.879h-21.576v-9.89h21.576z"/><path fill="#e6e6e6" d="M615.936 85.757H594.36V.353h21.576z"/><path fill="#ccc" d="M615.936 23.727H594.36v-9.89h21.576zM615.936 66.879H594.36v-9.89h21.576z"/><path fill="#e6e6e6" d="M523.95 86.11l-19.335-9.572L542.508 0l19.335 9.573z"/><path fill="#ccc" d="M551.473 30.52l-19.336-9.573 4.387-8.862 19.336 9.573zM532.326 69.192l-19.336-9.573 4.388-8.862 19.336 9.573z"/><path fill="#e6e6e6" d="M742.244 34.634l-10.865 18.819-10.865 18.819h43.461l-10.866-18.819-10.865-18.819z"/><path fill="#e6e6e6" d="M723.365 38.23L712.5 57.049l-10.865 18.819h43.461l-10.865-18.819-10.866-18.819z"/><circle cx="715.724" cy="26.424" r="6.293" fill="#e6e6e6"/><path fill="#e6e6e6" d="M802.027 364.445H464.906v-9.89h337.121z"/><path fill="#e6e6e6" d="M774.158 357.253h-85.404v-85.404h85.404z"/><path fill="#ccc" d="M757.078 340.172h-51.242V288.93h51.242z"/><path fill="#e6e6e6" d="M582.673 357.253h-21.576v-85.404h21.576z"/><path fill="#ccc" d="M582.673 295.222h-21.576v-9.889h21.576zM582.673 338.373h-21.576v-9.889h21.576z"/><path fill="#e6e6e6" d="M615.936 357.253H594.36v-85.404h21.576z"/><path fill="#ccc" d="M615.936 295.222H594.36v-9.889h21.576zM615.936 338.373H594.36v-9.889h21.576z"/><path fill="#e6e6e6" d="M523.95 357.606l-19.336-9.573 37.893-76.538 19.336 9.574z"/><path fill="#ccc" d="M551.472 302.015l-19.336-9.573 4.388-8.862 19.336 9.573zM532.327 340.686l-19.336-9.573 4.387-8.862 19.336 9.573z"/><path fill="#e6e6e6" d="M742.244 306.129l-10.865 18.819-10.865 18.82h43.461l-10.866-18.82-10.865-18.819z"/><path fill="#e6e6e6" d="M723.365 309.725L712.5 328.544l-10.865 18.82h43.461l-10.865-18.82-10.866-18.819z"/><circle cx="715.724" cy="297.919" r="6.293" fill="#e6e6e6"/><ellipse cx="397.129" cy="562.711" rx="397.129" ry="28.205" fill="#e6e6e6"/><path d="M707.387 578.506c-64.755-11.525-135.568-9.61-209.847 0 33.855-28.581 63.075-57.163 29.22-85.744 66.038 13.624 75.288 12.245 148.751 0-17.039 28.581 14.836 57.163 31.876 85.744z" fill="#6c63ff"/><path d="M707.387 578.506c-64.755-11.525-135.568-9.61-209.847 0 33.855-28.581 63.075-57.163 29.22-85.744 66.038 13.624 75.288 12.245 148.751 0-17.039 28.581 14.836 57.163 31.876 85.744z" opacity=".2"/><path d="M691.592 566.312c-55.007-9.2-115.16-7.67-178.257 0 28.759-22.814 53.58-45.628 24.82-68.442 56.098 10.875 63.956 9.774 126.36 0-14.474 22.814 12.603 45.628 27.077 68.442z" fill="#6c63ff"/><circle cx="670.64" cy="500.244" r="29.309" fill="#2f2e41"/><path fill="#a0616a" d="M537.591 466.249l20.308 3.385 10.154 29.333-29.333 18.052-33.847-50.77H537.591z"/><circle cx="595.13" cy="463.993" r="47.385" fill="#a0616a"/><path d="M333.386 291.377S218.308 303.787 198 301.53s-29.334-4.513-29.334-4.513-13.538 18.051-6.769 25.949a48.822 48.822 0 0013.538 11.282s12.41-3.385 21.436 0 100.411 18.051 116.206 4.513 20.308-47.385 20.308-47.385z" fill="#2f2e41"/><path d="M341.283 542.967s-75.59-21.436-89.128-116.205v-9.026s-14.957 26.239-20.308 31.59c-6.205 6.205-28.205 62.052-27.077 67.693s0 7.897 0 7.897l-32.718-3.384v-10.154s17.487-52.462 18.615-64.872 43.436-98.719 43.436-98.719 15.795-32.718 42.872 0 29.334 55.283 29.334 55.283l34.974 67.692zM172.052 293.633l-36.103-12.41s-33.846-24.82-25.949 0 44 78.975 54.154 73.334 22.366-19.644 19.645-21.668-20.773-16.691-11.747-39.256z" fill="#2f2e41"/><path d="M176.416 504.717l-29.144 14.233s-35.244 5.422-15.589 15.588 73.876 21.011 76.588 11.522 1.635-25.236-1.216-24.817-22.506 2.451-30.64-16.526z" fill="#2f2e41"/><path d="M326.616 468.506s-14.666 63.18 10.154 76.718 198.565 15.795 212.103-9.026 6.77-24.82 6.77-24.82l-36.103-40.616 29.333-2.256s0-9.026-10.153-10.154-41.744-12.41-68.821-4.513-42.872-15.795-42.872-15.795z" fill="#575a89"/><path fill="#3f3d56" d="M307.437 271.069l-19.18 104.924 132.001-15.795 23.692-94.77-136.513 5.641z"/><path fill="#fff" d="M311.386 275.018l-15.795 93.641 120.154-14.102 23.128-85.18-127.487 5.641z"/><path fill="#b3b3b3" d="M292.77 377.121l-4.513-1.128-2.256 4.512 36.103 100.411 3.395-1.298 1.117-6.599-33.846-95.898z"/><path fill="#d0cde1" d="M288.257 374.864l36.103 104.924 136.513-20.308-40.615-99.282-132.001 14.666z"/><path fill="#3f3d56" d="M306.309 371.48v5.641l100.41-11.282-1.128-5.641-99.282 11.282zM308.565 382.762l15.795 44 102.667-12.41-18.051-41.744-100.411 10.154z"/><path d="M437.18 444.813l-3.384-9.025s-25.949-45.129-39.487-36.103 28.205 53.026 28.205 53.026h13.539zM351.437 451.583l-3.385-13.539s-9.025-41.744 6.77-39.487 20.307 41.743 20.307 41.743l-1.128 9.026z" fill="#a0616a"/><path d="M378.514 445.942s-29.333-4.513-30.462 2.256-6.769 108.308 21.436 111.693 168.103 18.05 153.437-16.924-37.231-30.461-37.231-30.461l-95.898 10.154zM467.078 458.916l-29.897-20.872-19.744 15.231 24.821 27.077 24.82-21.436z" fill="#575a89"/><path opacity=".2" d="M386.976 479.224l4.512 42.872 77.847-4.513-67.693-1.128-14.666-37.231z"/><circle cx="618.521" cy="472.603" r="56.41" fill="#2f2e41"/><path fill="#6c63ff" d="M328.309 307.736l69.949-2.435 6.769-25.77-72.205 2.179-4.513 26.026z"/><path fill="#e6e6e6" d="M310.258 322.403l106.051-3.385 1.128-4.513-106.051 3.734-1.128 4.164zM308.001 333.685l106.052-3.385 1.128-4.513-106.052 3.734-1.128 4.164zM306.873 342.71l106.051-3.384 1.129-4.513-106.052 3.733-1.128 4.164z"/></svg>
        {{-- </div> --}}
      </div>
    </div>
  </div>
</div>

<div class="bg-white bg-teal-900" style="background-repeat: no-repeat; background-size: cover; background-blend-mode: multiply;background-position: center center; background-image: url('img/pngs/pattern.png');">
  {{-- <div class="inset-0 w-full h-full bg-teal-900 opacity-50"></div> --}}
  <div class="max-w-screen-xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
    <h2 class="font-montserrat text-lg leading-6 font-bold tracking-tight text-white sm:text-4xl sm:leading-10">
      Are you interested in supporting any of these initiatives,
      <br />
      <span class="text-teal-100">let’s put up your support here:</span>
    </h2>
    <div class="mt-8 flex lg:flex-shrink-0 lg:mt-0">
      <div class="inline-flex rounded-md shadow">
        <a href="#" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base leading-6 font-normal rounded-md text-teal-600 bg-white hover:text-teal-500 focus:outline-none focus:shadow-outline transition duration-150 ease-in-out">
          Give my support
        </a>
      </div>
      {{-- <div class="ml-3 inline-flex rounded-md shadow">
        <a href="#" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-teal-600 bg-white hover:text-teal-500 focus:outline-none focus:shadow-outline transition duration-150 ease-in-out">
          Give my support
        </a>
      </div> --}}
    </div>
  </div>
</div>

<div class="py-12 bg-white">
  <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="lg:text-center">
      {{-- <p class="text-base leading-6 text-teal-600 font-montserrat font-semibold tracking-wide uppercase">Transactions</p> --}}
      <h3 class="font-boing mt-2 text-2xl leading-8 tracking-normal text-gray-900 sm:text-4xl">
        Don’t know what to do to help?
      </h3>
      <p class="mt-4 max-w-2xl text-md leading-7 text-gray-600 lg:mx-auto font-montserrat">
        There is currently no vaccines available to protect you against human coronavirus infection. We’ll be fine with you doing these alone:
      </p>
    </div>

    <div class="mt-10 font-montserrat">
      <ul class="md:grid md:grid-cols-2 md:col-gap-8 md:row-gap-10">
        <li>
          <div class="flex">
            <div class="flex-shrink-0">
              <div class="flex items-center justify-center h-12 w-12 rounded-md bg-teal-500 text-white">
                {{-- <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/>
                </svg> --}}
                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 60 60">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M59.135 37.079a3.279 3.279 0 00-4.228-.552l-4.1 2.594A5.506 5.506 0 0045.5 35.03a3.59 3.59 0 00-.375.026 1.056 1.056 0 01-.9-.322 4.664 4.664 0 00-3.64-1.7 6.205 6.205 0 00-1.471.175 4.928 4.928 0 00-5.062-2.076A4.938 4.938 0 0030 29.03a4.723 4.723 0 00-3.3 1.313 4.814 4.814 0 00-1.742-.312 5.67 5.67 0 00-3.716 1.774.855.855 0 01-.511.275A5.476 5.476 0 0016.24 36l-4.376 2.388A5.007 5.007 0 019.47 39H3a3 3 0 00-3 3v8.014a3.006 3.006 0 002.975 3c2.106.012 5.354.031 7 .031h.126a4.976 4.976 0 011.523.241l20.087 6.474a5 5 0 004.553-.778l22.455-17.057a3.309 3.309 0 00.45-4.807zM20.99 34.063a2.83 2.83 0 001.671-.85A3.765 3.765 0 0125 32.03a2.874 2.874 0 011.008.19 1.96 1.96 0 002-.411 2.957 2.957 0 014.423.483 1.97 1.97 0 002.011.8A2.762 2.762 0 0135 33.03a3 3 0 012.476 1.321 2.043 2.043 0 002.17.793 3.166 3.166 0 01.87-.114 2.778 2.778 0 012.2 1.021 3.05 3.05 0 002.638.991c.052-.005.1-.012.142-.012a3.494 3.494 0 013.475 3.253l-2.685 1.7a3.664 3.664 0 00-3.111-3.321l-22.664-3.593a5.991 5.991 0 00-1.471-.025 3.445 3.445 0 011.95-.981zm36.51 6.276L35.055 57.39a3 3 0 01-2.731.465l-20.09-6.473a6.955 6.955 0 00-2.133-.337h-.011c-1.57 0-4.947-.019-7.1-.031a1 1 0 01-.987-1V42a1 1 0 011-1H9.47a7.025 7.025 0 003.353-.855l4.922-2.687a4 4 0 012.458-.413l22.668 3.593A1.691 1.691 0 0142.614 44H23a1 1 0 000 2h4.664l5.914 4.493a2.482 2.482 0 002.821.119l19.589-12.4a1.292 1.292 0 011.647.192.347.347 0 00.025.029 1.31 1.31 0 01-.158 1.908zM39.945 46l-4.616 2.923a.483.483 0 01-.543-.023L30.97 46zM58 0H32a7.009 7.009 0 00-7 7v5h-1a3 3 0 000 6h14a3 3 0 000-6h-1V9h21a2 2 0 002-2V2a2 2 0 00-2-2zM39 15a1 1 0 01-1 1H24a1 1 0 010-2h14a1 1 0 011 1zm19-8H37a2 2 0 00-2 2v3h-8V7a5.006 5.006 0 015-5h26zM26 22v-1a1 1 0 00-2 0v1a1 1 0 002 0zm12 0v-1a1 1 0 00-2 0v1a1 1 0 002 0zm-9 4v-1a1 1 0 00-2 0v1a1 1 0 002 0zm6 0v-1a1 1 0 00-2 0v1a1 1 0 002 0zm-3-3v-1a1 1 0 00-2 0v1a1 1 0 002 0z"/>
                </svg>
              </div>
            </div>
            <div class="ml-4">
              <h5 class="text-md leading-6 font-medium text-gray-900">Washing</h5>
              <p class="mt-2 text-xs text-base leading-6 text-gray-600 font-normal">
                Wash your hands often with soap and runnung water.
              </p>
            </div>
          </div>
        </li>
        <li class="mt-10 md:mt-0">
          <div class="flex">
            <div class="flex-shrink-0">
              <div class="flex items-center justify-center h-12 w-12 rounded-md bg-teal-500 text-white">
                {{-- <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"/>
                </svg> --}}
                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 64 64">
                  <circle cx="32" cy="32" r="29" fill="none" stroke="" stroke-miterlimit="10" stroke-width="2"/><path fill="none" stroke="" stroke-miterlimit="10" stroke-width="4" d="M11 11l42 42"/><path fill="none" stroke="" stroke-linejoin="round" stroke-width="4" d="M51 32s-8.51 10-19 10-19-10-19-10 8.51-10 19-10 19 10 19 10z"/><circle cx="32" cy="32" r="10" fill="none" stroke="" stroke-linejoin="round" stroke-width="4"/><path fill="" d="M32 26a6 6 0 106 6 6 6 0 00-6-6zm2 4a1 1 0 111-1 1 1 0 01-1 1zM14.63 44.39a2.07 2.07 0 010-2.93L19.05 37 22 40l-4.44 4.44a2.07 2.07 0 01-2.93-.05z"/><path fill="none" stroke="" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M20.5 45.76l-7.84 7.84a28.8 28.8 0 01-6.36-8.16l6.94-6.94a5.13 5.13 0 117.26 7.26z"/>
                </svg>
              </div>
            </div>
            <div class="ml-4">
              <h5 class="text-md leading-6 font-medium text-gray-900">Avoidance</h5>
              <p class="mt-2 text-sm text-base leading-6 text-gray-600 font-normal">
                Avoid toching your eyes, nose, mouth with unwashed hands.
              </p>
            </div>
          </div>
        </li>
        <li class="mt-10 md:mt-0">
          <div class="flex">
            <div class="flex-shrink-0">
              <div class="flex items-center justify-center h-12 w-12 rounded-md bg-teal-500 text-white">
                {{-- <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                </svg> --}}
                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 64 64">
                  <g fill="none" stroke="" stroke-linejoin="round" stroke-width="4"><circle cx="32" cy="24" r="3"/><path d="M36 29a2 2 0 012 2v8a1 1 0 01-1 1 1 1 0 00-1 1v8a4 4 0 01-8 0v-8a1 1 0 00-1-1 1 1 0 01-1-1v-8a2 2 0 012-2z"/><path d="M54 31v25a2 2 0 01-2 2H12a2 2 0 01-2-2V31a2 2 0 00-2-2H3L32 6l29 23h-5a2 2 0 00-2 2z"/></g>
                </svg>
              </div>
            </div>
            <div class="ml-4">
              <h5 class="text-md leading-6 font-medium text-gray-900">Stay clear</h5>
              <p class="mt-2 text-base leading-6 text-gray-600 font-normal">
                Avoid close contact with people who are sick and if you are mildly sick, keep yourself hydrated, stay at home and rest.
              </p>
            </div>
          </div>
        </li>
        <li class="mt-10 md:mt-0">
          <div class="flex">
            <div class="flex-shrink-0">
              <div class="flex items-center justify-center h-12 w-12 rounded-md bg-teal-500 text-white">
                {{-- <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"/>
                </svg> --}}
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 64 64">
                  <g fill="none" stroke="" stroke-width="4"><circle cx="32" cy="32" r="29" stroke-miterlimit="10"/><path stroke-miterlimit="10" d="M11 11l42 42"/><circle cx="32" cy="32" r="4" stroke-linejoin="round"/><path stroke-linejoin="round" d="M26 49v-9a2 2 0 012-2h8a2 2 0 012 2v9"/><circle cx="16" cy="32" r="4" stroke-linejoin="round"/><path stroke-linejoin="round" d="M10 49v-9a2 2 0 012-2h8a2 2 0 012 2v9"/><circle cx="48" cy="32" r="4" stroke-linejoin="round"/><path stroke-linejoin="round" d="M54 49v-9a2 2 0 00-2-2h-8a2 2 0 00-2 2v9"/><circle cx="40" cy="16" r="4" stroke-linejoin="round"/><path stroke-linejoin="round" d="M34 29v-5a2 2 0 012-2h8a2 2 0 012 2v5"/><circle cx="24" cy="16" r="4" stroke-linejoin="round"/><path stroke-linejoin="round" d="M18 29v-5a2 2 0 012-2h8a2 2 0 012 2v5"/></g>
                </svg>
              </div>
            </div>
            <div class="ml-4">
              <h5 class="text-md leading-6 font-medium text-gray-900">Social Distancing</h5>
              <p class="mt-2 text-base leading-6 text-gray-600 font-normal">
                Avoid large gathering as much as possible, let there be at least a gap of 6 meters between you and others in any gathering.
              </p>
            </div>
          </div>
        </li>
      </ul>
    </div>

    <div class="py-10">
      {{-- <p class="mt-4 max-w-2xl text-md leading-7 text-gray-700 lg:mx-auto font-montserrat"> --}}

        <div class="bg-teal-100 leading-6 border-l-4 border-teal-500 text-teal-700 p-4 font-montserrat" role="alert">
          <p class="font-bold">Caution !</p>
          <p class="font-normal sm:text-sm">Stay away from fake news and support your neighbours.</p>
        </div>
      {{-- </p> --}}
    </div>
  </div>
</div>

{{-- Footer --}}
    {{-- <div class="w-full bg-blue-900">
      <div class="flex flex-wrap lg:text-center text-white">

        <!-- ABOUT COLUMN -->

        <div class="w-full md:w-1/3 p-5 border-r border-blue-800 md:text-left">
          <div class="my-6 ml-3 text-xl font-semibold">ABOUT US</div>
          <p class="p-3 text-gray-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac est massa. Donec eget elementum sapien, tincidunt tempor nunc. Cras sodales id ipsum at convallis.</p>
          <p class="p-3 text-gray-400">Morbi tristique massa nec massa auctor, at scelerisque felis consectetur. Morbi tempus et odio sit amet feugiat. Maecenas dignissim a turpis in molestie. Fusce tincidunt vestibulum iaculis.</p>
        </div>

        <!-- CONTACTS COLUMN -->

        <div class="w-full md:w-1/3 p-5 border-r border-blue-800">
          <div class="my-6 text-xl font-semibold">CONTACT US</div>
          <p class="mt-8 text-gray-400">
            A108 Adam Street <br>
            New York, NY 535022 <br>
            United States <br>
            <strong>Phone:</strong> +1 5589 55488 55 <br>
            <strong>Email:</strong> info@webcraft.com
          </p>
          <div class="relative w-20 h-20 mx-auto my-12 bg-blue-300 rotate-45">
            <div class="flex justify-center items-center absolute left-0 top-0 w-10 h-10 hover:-ml-1 hover:-mt-1 bg-blue-800 cursor-pointer">
              <i class="fab fa-facebook-f fa-lg text-blue-500 -rotate-45"></i>
            </div>
            <div class="flex justify-center items-center absolute top-0 right-0 w-10 h-10 hover:-mt-1 hover:-mr-1 bg-blue-800 cursor-pointer">
              <i class="fab fa-twitter fa-lg text-blue-500 -rotate-45"></i>
            </div>
            <div class="flex justify-center items-center absolute right-0 bottom-0 w-10 h-10 hover:-mr-1 hover:-mb-1 bg-blue-800 cursor-pointer">
              <i class="fab fa-google-plus-g fa-lg text-blue-500 -rotate-45"></i>
            </div>
            <div class="flex justify-center items-center absolute bottom-0 left-0 w-10 h-10 hover:-mb-1 hover:-ml-1 bg-blue-800 cursor-pointer">
              <i class="fab fa-linkedin-in fa-lg text-blue-500 -rotate-45"></i>
            </div>
          </div>
        </div>

        <!-- FORM COLUMN -->

        <div class="w-full md:w-1/3 p-5">
          <div class="mt-6 text-xl font-semibold">SAY HELLO!</div>
          <form class="w-4/5 mx-auto mt-2 px-6 pt-6 pb-4 rounded">
            <div class="flex lg:items-center mb-4">
              <input class="w-full h-10 p-2 border-b border-blue-800 bg-blue-900 text-white" type="text" placeholder="Username">
            </div>
            <div class="flex lg:items-center mb-4">
              <input class="w-full h-10 p-2 border-b border-blue-800 bg-blue-900 text-white" type="text" placeholder="Email">
            </div>
            <div class="mb-6">
              <textarea class="w-full h-24 px-2 pt-2 border-b-2 border-blue-800 bg-blue-900 text-white" placeholder="Message"></textarea>
            </div>
            <div class="flex justify-between lg:items-center">
              <button class="w-full py-2 px-4 rounded bg-orange-600 hover:bg-orange-700 text-white font-bold" type="button">SEND</button>
            </div>
          </form>
        </div>

      </div>
    </div> --}}
@endsection

