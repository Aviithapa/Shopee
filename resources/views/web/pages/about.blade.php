@extends('web.layouts.app')
@section('content')
    <div class="container-fluid aboutbanner">
        <img src="{{$aboutBanner->getImage()}}" alt="banner">
    </div>

    <div class="container-fluid about">
        <h1 style="font-size: 50px;">WHO WE ARE</h1>
        <div class="container">
            <p>With a vision to promote sustainability with reuse of books, House of Books Pvt. Ltd. was established in 2020 by a group of young self-motivated individuals who had a vision to provide a platform for second hands book sale market. We offer tremendous gathering of books in numerous classification of Novel, story books, fantasy, Drama, Action and journey, Romance, Self-help, Health, Guide & Travel, Children's, Religion, Spirituality & New Age, History, Math, Anthology, Poetry, Encyclopedias, Dictionaries, Comics, Art, Cookbooks, Diaries, Journals, Prayer books, Series, Trilogy, Biographies, Autobiographies, Trade books and different content across its multi-channel distribution platform. We likewise move in immense accumulation of different course books by various foundations from different universities with shipping all around the world. Other than to this, we likewise offer an expansive gathering of E-Books at reasonable value.
                <br>Our team at House of Books is convinced that an individual's reading habits have a significant impact on the positive transformation of society. As a result, our goal is to create and encourage a reading community. We are focused in providing excellent service that exceeds our valued customers' expectations. We aim towards assisting consumers in developing a strong reading habit of sharing their book so that a safe reading atmosphere can be promoted. We primarily work to improve an individual's reading habits as well as the reading habits of a community as a whole.
                We modestly welcome every one of the merchants around the nation to band together with us. We will without a doubt give you the stage to many shimmering areas and develop the “House of Books” family. We might want to thank you for shopping with us. We believe in treating our clients with dignity and trust. Creativity, imagination, and innovation help us to evolve. Honesty, dignity, and corporate ethics are ingrained in every aspect of our operations.</p>
        </div>
        <div class="section">

            <div class="container">
                <h1>OUR VISION</h1>
                <p>" PROMOTING sustainability through reuse of Books "</p>
                <h1>Our Mission</h1>
                <p>"our mission is to provide qaulity but affordable books for education entertainment self development and self fullfillment
                    to all when the need arises by providing a wide range of books to satisfy our clients exceeding of customer expectations in
                    their book requirments." </p>
            </div>
        </div>




        <div class="container">
            <h1>OUR AREA OF SERVICE</h1>
            <div class="overwrite" style="margin-top: 0 !important;">
                <div class="row ">
                    <div class="col-3" style=" margin-top:5px  ">
                        <div class="icons">
                            <span><img src="{{$question->getPostImage()}}" height="70px" width="70px"></span>
                        </div>
                        <h5>QUESTION BANK <br>
                            AND SOLUTION SETS  <br>
                            FOR DIFFERENT COURSE</h5>
                    </div>
                    <div class="col-3 vl">
                        <div class="icons">
                            <span><img src="{{$course->getPostImage()}}" height="70px" width="70px"></span>
                        </div>
                        <h5>COURSE BOOKS<br>
                            Available FROM <br>
                            VARIOUS PUBLICATION</h5>
                    </div>
                    <div class="col-3 vl">
                        <div class="icons">
                            <span><img src="{{$entrance->getPostImage()}}" height="70px" width="70px"></span>

                        </div>
                        <h5>ENTRANCE EXAM <br>
                            PREPARATION BOOKS <br>
                            FOR DIFFERENT LEVELS</h5>
                    </div>
                    <div class="col-3 vl" style=" margin-top:5px  ">
                        <div class="icons">
                            <span><img src="{{$second->getPostImage()}}" height="70px" width="70px"></span>
                        </div>
                        <h5>SECOND HAND <br>
                            BOOK SELLING AND <br>
                            BUYING PLATFORM</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="section team mt-5" style="margin-top: 50px !important;" >
            <div class="container teams bootdey">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1>Our Team</h4>
                            <!-- <p class="text-muted para-desc mx-auto mb-0">Build responsive, mobile-first projects on the web with the world's most popular front-end component library.</p> -->
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row" style="margin-top: -25px; margin-left: 30px;">
                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                        <div class="team text-center rounded p-3 py-4">
                            <img src="{{$binaya->getPostImage()}}" class="img-fluid avatar avatar-medium shadow rounded-pill" alt="Abhishek">
                            <div class="content mt-3">
                                <h4 class="">{{$binaya->title}}</h4>
                                <small class="text-muted">{{$binaya->excerpt}}</small>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                        <div class="team text-center rounded p-3 py-4">
                            <img src="{{$dipesh->getPostImage()}}" class="img-fluid avatar avatar-medium shadow rounded-pill" alt="Abhishek">
                            <div class="content mt-3">
                                <h4 class="">{{$dipesh->title}}</h4>
                                <small class="text-muted">{{$dipesh->excerpt}}</small>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                        <div class="team text-center rounded p-3 py-4">
                            <img src="{{$hemanti->getPostImage()}}" class="img-fluid avatar avatar-medium shadow rounded-pill" alt="Abhishek">
                            <div class="content mt-3">
                                <h4 class="">{{$hemanti->title}}</h4>
                                <small class="text-muted">{{$hemanti->excerpt}}</small>
                            </div>
                        </div>
                    </div><!--end col-->
                </div>
                <div class="row" style="margin-left: 150px;">

                    <div class="col-lg-6 col-md-6 col-12 mt-4 pt-2 " >
                        <div class="team text-center rounded p-3 py-4">
                            <img src="{{$tilak->getPostImage()}}" class="img-fluid avatar avatar-medium shadow rounded-pill" alt="Abhishek">
                            <div class="content mt-3">
                                <h4 class="">{{$tilak->title}}</h4>
                                <small class="text-muted">{{$tilak->excerpt}}</small>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-6 col-md-6 col-12 mt-4 pt-2">
                        <div class="team text-center rounded p-3 py-4">
                            <img src="{{$abhishek->getPostImage()}}" class="img-fluid avatar avatar-medium shadow rounded-pill" alt="Abhishek">
                            <div class="content mt-3">
                                <h4 class="">{{$abhishek->title}}</h4>
                                <small class="text-muted">{{$abhishek->excerpt}}</small>
                            </div>
                        </div>
                    </div><!--end col-->

                </div><!--end row-->
            </div>
        </div>
@endsection
