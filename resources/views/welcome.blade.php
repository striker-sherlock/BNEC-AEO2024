<x-app>
    <section id="hero" class="hero min-vh-100 d-flex align-items-center mx-auto" style="background: linear-gradient(0deg, rgba(201,147,71,1) 0%, rgba(84,3,0,1) 90%);">
        <div class="container">
            <div class="d-flex flex-row justify-content-center">
                <div class="col-md-4 reversed">
                    <img src="{{ asset('/image/greek.png') }}" style="width: 100%;" />
                </div>
                    
                <div class="col-md-6">
                    <div class="ms-3 justify-content-center text-center">
                        <h3 data-bs-aos="fade-up" class="aeo-title mb-3" style="color: white; font-size: 2.5rem">The 2024 Asian English Olympics</h3>
                        <h1 data-bs-aos="fade-up" class="aeo-theme mb-4 display-5" style="letter-spacing:0.1em;color: white;font-size: 4rem">ASCEND YOUR OLYMPUS</h1>
                        <div class="row">
                            <div class="col-md-6">
                                <a href="/aeo-overview" class="shine pop-up action scrollto d-inline-flex align-items-center justify-content-center align-self-center text-center text-decoration-none my-3 w-100">
                                    <button class="btn w-100 text-uppercase fs-3 fw-bold" style="color: black; border-radius: 20px; background-color: #c99347">aeo overview</button>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="/aeo-overview" class="shine pop-up action scrollto d-inline-flex align-items-center justify-content-center align-self-center text-center text-decoration-none my-3  w-100">
                                    <button class="btn w-100 text-uppercase fs-3 fw-bold" style="color: black; border-radius: 20px; background-color: #c99347">about us</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <img src="{{ asset('/image/greek.png') }}" style="width: 100%;transform: scaleX(-1)" />
                </div>
            </div>
        </div>
    </section>

    <div id="content">
        <section id="about">
            <div class="container">
                <h2 class="fw-bold text-uppercase display-6 text-gradient">About Asian English Olympics</h2>
                
                    <p style="text-align: justify; font-size: 1.5rem">
                        This event is conducted by Bina Nusantara English Club (BNEC), an English student organization of BINUS University in Jakarta, Indonesia. We began as a National English Olympics. With the passage of time, we have evolved into an Asian-scaled competition with the purpose of developing the skills of Asian youths. The 2023 AEO drew 345 students from 6 nations to compete in 7 competition areas, including Speech, Debate, Newscasting, Storytelling, Spelling Bee, Radio Drama, and Short Story Writing.
                
                        <br><br>Learning Platform, Talent Display, Competitiveness, International Ambience, Hospitality, Cultural Exchange, and Networking are the seven values that AEO upholds. As a result, AEO is a memorable event that provides you with an excellent opportunity to enhance your abilities and gain networks from youths across Asia. AEO will undoubtedly present you, remarkable individuals, with extraordinary experiences! The 2024 AEO will be held onsite on January 29 - February 3, 2024. There will be 8 fields of competition, namely Debate, Newscasting, Speech, Spelling Bee, Storytelling, Radio Drama, Short Story Writing, and Scrabble.
                    </p>
                
                <br>
            </div>
        </section>

        <section id="pmGreeting">
            <div class="container align-items-center d-flex flex-row">
                <br>
                <br>
                <div class="d-flex flex-column">
                    <h4 class="fw-bold text-uppercase display-6 text-gradient">project manager greetings</h4>
                    <h3 style="font-size:2rem">Greetings, Extraordinaries!</h3>
                    <p style="text-align: justify;font-size:1.5rem">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> 
                    <p style="text-align: justify;font-size:1.5rem">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <p style="text-align: justify;font-size:1.5rem">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <div class="d-flex flex-column justify-content-center align-items-center text-center ">
                    <img src="{{ asset('/image/profil.png') }}" alt="logo" style="width:40%"/>
                    <h3 style="font-size:2rem">Jane Doe</h3>
                    <p style="font-size:1.5rem">Project Manager of the 2024 Asian English Olympics</p>
                </div>
            </div>
        </section>

        <section id="competField">
            <div class="container align-items-center">
                <h4 class="fw-bold text-uppercase display-6 text-center text-gradient">competition fields</h4>
                <div class="slideshow-container">
                    <div class="mySlides w3-animate-left">
                        <div class="event">
                            <img src="{{ asset('/image/db.png') }}">
                            <div>
                                <h3 style="font-size:2rem; color:#540300">Debate</h3>
                                <p style="text-align: justify;font-size:1.5rem">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <a href="#" class="action scrollto d-inline-flex align-items-center justify-content-center align-self-center text-center text-decoration-none my-3 w-30">
                                    <button class="btn w-30 text-uppercase fs-5 fw-bold" style="color: white; border-radius: 10px; background-color: #540300">Read more</button>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="mySlides w3-animate-left">
                        <div class="event">
                            <img src="{{ asset('/image/nc.png') }}"/>
                            <div>
                                <h3 style="font-size:2rem; color:#540300">Newscasting</h3>
                                <p style="text-align: justify;font-size:1.5rem">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <a href="#" class="action scrollto d-inline-flex align-items-center justify-content-center align-self-center text-center text-decoration-none my-3 w-30">
                                    <button class="btn w-30 text-uppercase fs-5 fw-bold" style="color: white; border-radius: 10px; background-color: #540300">Read more</button>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="mySlides w3-animate-left">
                        <div class="event">
                            <img src="{{ asset('/image/rd.png') }}"/>
                            <div>
                                <h3 style="font-size:2rem; color:#540300">Radio Drama</h3>
                                <p style="text-align: justify;font-size:1.5rem">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <a href="#" class="action scrollto d-inline-flex align-items-center justify-content-center align-self-center text-center text-decoration-none my-3 w-30">
                                    <button class="btn w-30 text-uppercase fs-5 fw-bold" style="color: white; border-radius: 10px; background-color: #540300">Read more</button>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="mySlides w3-animate-left">
                        <div class="event">
                            <img src="{{ asset('/image/sb.png') }}"/>
                            <div>
                                <h3 style="font-size:2rem; color:#540300">Spelling Bee</h3>
                                <p style="text-align: justify;font-size:1.5rem">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <a href="#" class="action scrollto d-inline-flex align-items-center justify-content-center align-self-center text-center text-decoration-none my-3 w-30">
                                    <button class="btn w-30 text-uppercase fs-5 fw-bold" style="color: white; border-radius: 10px; background-color: #540300">Read more</button>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="mySlides w3-animate-left">
                        <div class="event">
                            <img src="{{ asset('/image/sp.png') }}"/>
                            <div>
                                <h3 style="font-size:2rem; color:#540300">Speech</h3>
                                <p style="text-align: justify;font-size:1.5rem">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <a href="#" class="action scrollto d-inline-flex align-items-center justify-content-center align-self-center text-center text-decoration-none my-3 w-30">
                                    <button class="btn w-30 text-uppercase fs-5 fw-bold" style="color: white; border-radius: 10px; background-color: #540300">Read more</button>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="mySlides w3-animate-left">
                        <div class="event">
                            <img src="{{ asset('/image/ssw.png') }}"/>
                            <div>
                                <h3 style="font-size:2rem; color:#540300">Short Story Writing</h3>
                                <p style="text-align: justify;font-size:1.5rem">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <a href="#" class="action scrollto d-inline-flex align-items-center justify-content-center align-self-center text-center text-decoration-none my-3 w-30">
                                    <button class="btn w-30 text-uppercase fs-5 fw-bold" style="color: white; border-radius: 10px; background-color: #540300">Read more</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mySlides w3-animate-left">
                        <div class="event">
                            <img src="{{ asset('/image/st.png') }}"/>
                            <div>
                                <h3 style="font-size:2rem; color:#540300">Storytelling</h3>
                                <p style="text-align: justify;font-size:1.5rem">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <a href="#" class="action scrollto d-inline-flex align-items-center justify-content-center align-self-center text-center text-decoration-none my-3 w-30">
                                    <button class="btn w-30 text-uppercase fs-5 fw-bold" style="color: white; border-radius: 10px; background-color: #540300">Read more</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mySlides w3-animate-left">
                        <div class="event">
                            <img src="{{ asset('/image/st.png') }}"/>
                            <div>
                                <h3 style="font-size:2rem; color:#540300">Scrabble</h3>
                                <p style="text-align: justify;font-size:1.5rem">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <a href="#" class="action scrollto d-inline-flex align-items-center justify-content-center align-self-center text-center text-decoration-none my-3 w-30">
                                    <button class="btn w-30 text-uppercase fs-5 fw-bold" style="color: white; border-radius: 10px; background-color: #540300">Read more</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <br>
            
                <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(1)"></span> 
                    <span class="dot" onclick="currentSlide(2)"></span> 
                    <span class="dot" onclick="currentSlide(3)"></span> 
                    <span class="dot" onclick="currentSlide(4)"></span> 
                    <span class="dot" onclick="currentSlide(5)"></span> 
                    <span class="dot" onclick="currentSlide(6)"></span> 
                    <span class="dot" onclick="currentSlide(7)"></span> 
                    <span class="dot" onclick="currentSlide(8)"></span> 
                </div>
            </div>   
        </section>
        
        <section id="break" class="p-5" style="background-color: #e6b953">
            <div class="container text-center">
                <img src="{{ asset('/image/horse.png') }}" style="width:10%"/>
            </div>
        </section>

        <section id="faq" class="pt-5 pb-5" style="background: linear-gradient(0deg, rgba(246,223,119,1) 2%, rgba(230,185,83,1) 98%);">
            <div class="container align-items-center">
                <h4 class="fw-bold text-uppercase display-6 text-center text-gradient pb-4">frequently asked questions</h4>
                <div class="accordion accordion-flush" id="accordionExample">
                    {{-- q1 --}}
                    <div class="accordion-item" style="border-radius: 20px">
                        <h3 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed custom-accordion active" style="border-radius: 20px;font-size:2rem; color:white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Lorem ipsum?
                            </button>
                        </h3>
                        <div id="collapseOne" class="accordion-collapse collapse show custom-accordion" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p style="text-align: justify;font-size:1.5rem">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>
                    <br>
                    {{-- q2 --}}
                    <div class="accordion-item" style="border-radius: 20px">
                        <h3 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed custom-accordion active" style="border-radius: 20px;font-size:2rem; color:white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Lorem ipsum?
                            </button>
                        </h3>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p style="text-align: justify;font-size:1.5rem">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>
                    <br>
                    {{-- q3 --}}
                    <div class="accordion-item" style="border-radius: 20px">
                        <h3 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed custom-accordion active" style="border-radius: 20px;font-size:2rem; color:white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Lorem ipsum?
                            </button>
                        </h3>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p style="text-align: justify;font-size:1.5rem">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>
                    <br>
                    {{-- q4 --}}
                    <div class="accordion-item" style="border-radius: 20px">
                        <h3 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed custom-accordion active" style="border-radius: 20px;font-size:2rem; color:white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Lorem ipsum?
                            </button>
                        </h3>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p style="text-align: justify;font-size:1.5rem">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </section>

        <section id="break2" style="background-color: #f6df77">
            <div class="container text-center">
                <img src="{{ asset('/image/horse.png') }}" style="width:10%"/>
            </div>
        </section>

        <section id="sponsor" class="m-5">
            <h4 class="fw-bold text-center text-uppercase">Sponsors</h4>
            {{-- <div class="tengah"> --}}
                <div class="relative d-flex flex-wrap justify-content-center">
                        {{-- @foreach($media_partners as $media_partner) --}}
                        
                        <img src="{{ asset('/image/ssw.png') }}" class="m-3" style="width:20%; height:20%"/>
                        <img src="{{ asset('/image/ssw.png') }}" class="m-3" style="width:20%; height:20%"/>
                        <img src="{{ asset('/image/ssw.png') }}" class="m-3" style="width:20%; height:20%"/>
                        <img src="{{ asset('/image/ssw.png') }}" class="m-3" style="width:20%; height:20%"/>
                    
                        {{-- @endforeach --}}
                </div>
            {{-- </div> --}}
        </section>

        <section id="medpar" class="m-5">
            <h4 class="fw-bold text-center text-uppercase">Media Partners</h4>
            <div class="relative d-flex flex-wrap justify-content-center">
                {{-- @foreach($media_partners as $media_partner) --}}
                
                <img src="{{ asset('/image/ssw.png') }}" class="m-3" style="width:20%; height:20%"/>
                <img src="{{ asset('/image/ssw.png') }}" class="m-3" style="width:20%; height:20%"/>
                <img src="{{ asset('/image/ssw.png') }}" class="m-3" style="width:20%; height:20%"/>
                <img src="{{ asset('/image/ssw.png') }}" class="m-3" style="width:20%; height:20%"/>
            
                {{-- @endforeach --}}
            </div>
        </section>

        <section id="question" class="m-5">
            <div class="card border-0 overflow-hidden shadow mb-5" style="border-radius: 20px;">
                <div class="card-body my-3">
                    <h6 class="card-title-sm text-uppercase text-center">submit question</h6>
                    <div class="divider"></div>
                    <h3 class="fw-bold my-3 text-center">Drop Your Question Here</h3>
                    <p class="text-muted mb-4">Please fill the form below, then we will answer your question
                        via e-mail.
                    </p>
                    <form method="POST" action="#"  enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row mb-0 mb-sm-3">
                            <label for="name" class="col-sm-3 col-form-label text-sm-left">
                                Name
                                <span class="text-danger">*</span>
                            </label>
                            <div class="col-sm-9">
                                <input class="form-control rounded-pill" id="name" name="name"
                                    value="{{ old('name') }}" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0 mb-sm-3">
                            <label for="country_id" class="col-sm-3 col-form-label text-sm-left">
                                Country
                                <span class="text-danger">*</span>
                            </label>
                            <div class="col-sm-9">
                                <select class="form-select rounded-pill" name="country_id" id="country_id">
                                    <option selected class="d-none">Select your Country</option>
                                    {{-- @foreach ($countries as $country)
                                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                                    @endforeach
                                    @foreach ($countries as $country)
                                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                                    @endforeach --}}

                                </select>
                            </div>
                        </div>

                        <div class="form-group row mb-0 mb-sm-3">
                            <label for="phone_number" class="col-sm-3 col-form-label text-sm-left">
                                Phone Number
                                <span class="text-danger">*</span>
                            </label>
                            <div class="col-sm-9">
                                <input type="tel" class="form-control rounded-pill" id="phone_number"
                                    name="phone_number" value="{{ old('phone_number') }}"
                                     required>
                            </div>
                        </div>

                        <div class="form-group row mb-0 mb-sm-3">
                            <label for="email" class="col-sm-3 col-form-label text-sm-left">
                                Email
                                <span class="text-danger">*</span>
                            </label>
                            <div class="col-sm-9">
                                <input class="form-control rounded-pill" id="email" name="email"
                                    value="{{ old('email') }}" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0 mb-sm-3">
                            <label for="question" class="col-sm-3 col-form-label text-sm-left rounded-pill">
                                Question
                                <span class="text-danger">*</span>
                            </label>
                            <div class="col-sm-9">
                                <textarea class="form-control rounded-20" id="question" name="question" value="{{ old('question') }}" style="height: 100px"
                                    required>{{ old('question') }}</textarea>
                            </div>
                        </div>
                        <div class="d-grid mt-4">
                            <button type="submit" class="btn btn-outline-info" id="btn-submit" style="border-radius: 20px">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
</x-app>

<script src="{{ asset('js/compet.js')}}"></script>
