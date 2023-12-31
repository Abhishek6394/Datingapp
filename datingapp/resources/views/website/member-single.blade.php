@extends('website.layouts.app')
@section('content')
    <!-- ================> Page Header section start here <================== -->
    <div class="pageheader bg_img" style="background-image: url({{ URL::to('website/assets/images/bg-img/pageheader.jpg') }});">
        <div class="container">
            <div class="pageheader__content text-center">
                <h2>Member Single Page</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0">
                      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                      <li class="breadcrumb-item"><a href="#">Community</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Member Single</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- ================> Page Header section end here <================== -->
    <!-- ================> Group section end here <================== -->
    <div class="group group--single padding-bottom">
        <div class="group__top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 d-none d-xl-block"></div>
                    <div class="col-xl-9">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="gt1-tab" data-bs-toggle="tab" data-bs-target="#gt1" type="button" role="tab" aria-controls="gt1" aria-selected="true"><i class="fa-solid fa-house"></i> Activity</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="gt2-tab" data-bs-toggle="tab" data-bs-target="#gt2" type="button" role="tab" aria-controls="gt2" aria-selected="false"><i class="fa-solid fa-users"></i> Profile <span>30</span></button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="gt3-tab" data-bs-toggle="tab" data-bs-target="#gt3" type="button" role="tab" aria-controls="gt3" aria-selected="false"><i class="fa-solid fa-video"></i> Sites <span>06</span></button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="gt4-tab" data-bs-toggle="tab" data-bs-target="#gt4" type="button" role="tab" aria-controls="gt4" aria-selected="false"><i class="fa-solid fa-users"></i> Friends <span>16</span></button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="gt5-tab" data-bs-toggle="tab" data-bs-target="#gt5" type="button" role="tab" aria-controls="gt5" aria-selected="false"><i class="fa-solid fa-layer-group"></i> Groups <span>08</span></button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="gt6-tab" data-bs-toggle="tab" data-bs-target="#gt6" type="button" role="tab" aria-controls="gt6" aria-selected="false"><i class="fa-solid fa-photo-film"></i> Media <span>06</span></button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="group__bottom">
            <div class="container">
                <div class="row g-4">
                    <div class="col-xl-6 order-xl-1">
                        <div class="group__bottom--left">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="gt1" role="tabpanel" aria-labelledby="gt1-tab">
                                    <div class="group__bottom--head group__bottom--activity bg-white mb-4 border-0">
                                        <ul class="nav nav-tabs" id="myTab2" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link active" id="Personal-tab" data-bs-toggle="tab" data-bs-target="#Personal" type="button" role="tab" aria-controls="Personal" aria-selected="true">Personal</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="Mentions-tab" data-bs-toggle="tab" data-bs-target="#Mentions" type="button" role="tab" aria-controls="Mentions" aria-selected="false">Mentions</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="Favorites-tab" data-bs-toggle="tab" data-bs-target="#Favorites" type="button" role="tab" aria-controls="Favorites" aria-selected="false">Favorites</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="Friends-tab" data-bs-toggle="tab" data-bs-target="#Friends" type="button" role="tab" aria-controls="Friends" aria-selected="false">Friends</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="Groups-tab" data-bs-toggle="tab" data-bs-target="#Groups" type="button" role="tab" aria-controls="Groups" aria-selected="false">Groups</button>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="group__bottom--area group__bottom--memberactivity">
                                        <div class="group__bottom--body">
                                            <div class="group__bottom--allmedia">
                                                <div class="media-wrapper">
                                                    <div class="tab-content" id="myTabContent2">
                                                        <div class="tab-pane fade show active" id="Personal"
                                                            role="tabpanel" aria-labelledby="Personal-tab">
                                                            <div class="create-post mb-4">
                                                                <div class="lab-inner">
                                                                    <div class="lab-thumb">
                                                                        <div class="thumb-inner">
                                                                            <div class="thumb-img">
                                                                                <img src="{{ URL::to('website/assets/images/member/profile/profile.jpg') }}" alt="datting thumb">
                                                                            </div>
                                                                            <div class="thumb-content">
                                                                                <h6><a href="#"> William Smith</a></h6>
                                                                                <div class="custom-select">
                                                                                    <select>
                                                                                        <option value="1"> Public</option>
                                                                                        <option value="2"> Private</option>
                                                                                        <option value="3"> Friends</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="lab-content">
                                                                        <form action="#" class="post-form">
                                                                            <input type="text" placeholder="Whats on your mind. William?">
                                                                            <div class="content-type">
                                                                                <ul class="content-list">
                                                                                    <li class="text"><a href="#"><i class="fa-solid fa-pen-to-square"></i>Text </a></li>
                                                                                    <li class="image-video">
                                                                                        <div class="file-btn"><i class="fa-solid fa-camera"></i>Photo/Videos</div>
                                                                                        <input type="file">
                                                                                    </li>
                                                                                    <li class="attach-file">
                                                                                        <div class="file-btn"><i class="fa-solid fa-link"></i>Attach File</div>
                                                                                        <input type="file">
                                                                                    </li>
                                                                                    <li class="post-submit">
                                                                                        <input type="submit" value="Post" class="default-btn">
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            {{-- <div class="post-item mb-4">
                                                                <div class="post-content">
                                                                    <div class="post-author">
                                                                        <div class="post-author-inner">
                                                                            <div class="author-thumb">
                                                                                <img src="{{ URL::to('website/assets/images/member/profile/profile.jpg') }}" alt="datting thumb">
                                                                            </div>
                                                                            <div class="author-details">
                                                                                <h6><a href="#">William Smith</a></h6>
                                                                                <ul class="post-status">
                                                                                    <li class="post-privacy"><i class="icofont-world"></i> Public</li>
                                                                                    <li class="post-time">6 Mintues Ago</li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="post-description">
                                                                        <p>Quickly deliver going forward methods info create empowerment before with client centered bandwdth Credibly pontficate interoperable leadership skills ands B2B data awesome Continually whiteboard ands B2B data awesome Continually whiteboard</p>
                                                                    </div>
                                                                </div>

                                                                <div class="post-meta">
                                                                    <div class="post-meta-top">
                                                                        <p><a href="#"><i class="fa-solid fa-thumbs-up"></i> <i class="fa-solid fa-heart"></i> <i class="fa-solid fa-face-laugh"></i> <span>Julia, Petrova and 306 like this</span></a></p>
                                                                        <p><a href="#">136 Comments</a></p>
                                                                    </div>
                                                                    <div class="post-meta-bottom">
                                                                        <ul class="react-list">
                                                                            <li class="react"><a href="#"><i class="fa-solid fa-thumbs-up"></i>Like</a> </li>
                                                                            <li class="react"><a href="#"><i class="fa-solid fa-comment"></i>Comment</a></li>
                                                                            <li class="react"><a href="#"><i class="fa-solid fa-share-nodes"></i>Share</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="post-item mb-4">
                                                                <div class="post-content">
                                                                    <div class="post-author">
                                                                        <div class="post-author-inner">
                                                                            <div class="author-thumb">
                                                                                <img src="{{ URL::to('website/assets/images/member/profile/profile.jpg') }}" alt="datting thumb">
                                                                            </div>
                                                                            <div class="author-details">
                                                                                <h6><a href="#">William Smith</a></h6>
                                                                                <ul class="post-status">
                                                                                    <li class="post-privacy"><i class="icofont-world"></i> Public</li>
                                                                                    <li class="post-time">6 Mintues Ago </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="post-description">
                                                                        <p>Quickly deliver going forward methods info create empowerment before with client centered bandwdth Credibly pontficate interoperable leadership skills ands B2B data awesome Continually whiteboard ands B2B data awesome Continually whiteboard</p>
                                                                        <div class="post-desc-img">
                                                                            <img src="{{ URL::to('website/assets/images/group/single/01.jpg') }}" alt="dating thumb">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="post-meta">
                                                                    <div class="post-meta-top">
                                                                        <p><a href="#"><i class="fa-solid fa-thumbs-up"></i> <i class="fa-solid fa-heart"></i> <i class="fa-solid fa-face-laugh"></i><span>Julia, Petrova and 306 like this</span></a></p>
                                                                        <p><a href="#">136 Comments</a></p>
                                                                    </div>
                                                                    <div class="post-meta-bottom">
                                                                        <ul class="react-list">
                                                                            <li class="react"><a href="#"><i class="fa-solid fa-thumbs-up"></i>Like</a> </li>
                                                                            <li class="react"><a href="#"><i class="fa-solid fa-comment"></i>Comment</a></li>
                                                                            <li class="react"><a href="#"><i class="fa-solid fa-share-nodes"></i> Share </a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="post-item mb-4">
                                                                <div class="post-content">
                                                                    <div class="post-author">
                                                                        <div class="post-author-inner">
                                                                            <div class="author-thumb">
                                                                                <img src="{{ URL::to('website/assets/images/member/profile/profile.jpg') }}" alt="datting thumb">
                                                                            </div>
                                                                            <div class="author-details">
                                                                                <h6><a href="#">William Smith</a></h6>
                                                                                <ul class="post-status">
                                                                                    <li class="post-privacy"><i class="icofont-world"></i> Public</li>
                                                                                    <li class="post-time">6 Mintues Ago </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="post-description">
                                                                        <p>Quickly deliver going forward methods info create empowerment before with client centered bandwdth Credibly pontficate interoperable leadership skills ands B2B data awesome Continually whiteboard ands B2B data awesome Continually whiteboard</p>
                                                                        <div class="post-desc-img">
                                                                            <div class="row g-3">
                                                                                <div class="col-md-6">
                                                                                    <img src="{{ URL::to('website/assets/images/group/single/01.jpg') }}" alt="dating thumb">
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <img src="{{ URL::to('website/assets/images/group/single/02.jpg') }}" alt="dating thumb">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="post-meta">
                                                                    <div class="post-meta-top">
                                                                        <p><a href="#"><i class="fa-solid fa-thumbs-up"></i> <i class="fa-solid fa-heart"></i> <i class="fa-solid fa-face-laugh"></i><span>Julia, Petrova and 306 like this</span></a></p>
                                                                        <p><a href="#">136 Comments</a></p>
                                                                    </div>
                                                                    <div class="post-meta-bottom">
                                                                        <ul class="react-list">
                                                                            <li class="react"><a href="#"><i class="fa-solid fa-thumbs-up"></i>Like</a> </li>
                                                                            <li class="react"><a href="#"><i class="fa-solid fa-comment"></i>Comment</a></li>
                                                                            <li class="react"><a href="#"><i class="fa-solid fa-share-nodes"></i> Share </a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div> --}}

                                                            {{-- <div class="text-center mt-4">
                                                                <a href="#" class="default-btn"><span>Load More Post</span></a>
                                                            </div> --}}
                                                        </div>

                                                        <div class="tab-pane fade" id="Mentions" role="tabpanel" aria-labelledby="Mentions-tab">
                                                            <div class="post-item">
                                                                <div class="post-content">
                                                                    <div class="post-author pb-3">
                                                                        <div class="post-author-inner">
                                                                            <div class="author-thumb">
                                                                                <img src="{{ URL::to('website/assets/images/member/home2/01.jpg') }}" alt="datting thumb">
                                                                            </div>
                                                                            <div class="author-details">
                                                                                <h6><a href="#">David Baecker</a></h6>
                                                                                <ul class="post-status">
                                                                                    <li class="post-privacy"><i class="icofont-world"></i> Public</li>
                                                                                    <li class="post-time">46 Mintues Ago</li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="post-description ps-5">
                                                                        <p class="ms-5 ps-2">Hello @<a href="#">Sara Hartmann</a></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="tab-pane fade" id="Favorites" role="tabpanel" aria-labelledby="Favorites-tab">
                                                            <div class="post-item mb-4">
                                                                <div class="post-content p-4">
                                                                    <p class="mb-0">Sorry, there was no activity found. Please try a different filter.</p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="tab-pane fade" id="Friends" role="tabpanel" aria-labelledby="Friends-tab">
                                                            <div class="activity__item mb-3">
                                                                <div class="activity__inner bg-white">
                                                                    <div class="activity__thumb">
                                                                        <a href="member-single.html"><img src="{{ URL::to('website/assets/images/member/home2/01.jpg') }}" alt="dating thumb"></a>
                                                                    </div>
                                                                    <div class="activity__content">
                                                                        <h5><a href="member-single.html">Daniel Becker </a><span>became Friend with <a href="#">Angelika Schaefer</a></span></h5>
                                                                        <p>2 days ago</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="activity__item mb-3">
                                                                <div class="activity__inner bg-white">
                                                                    <div class="activity__thumb">
                                                                        <a href="member-single.html"><img src="{{ URL::to('website/assets/images/member/home2/03.jpg') }}" alt="dating thumb"></a>
                                                                    </div>
                                                                    <div class="activity__content">
                                                                        <h5><a href="member-single.html">Thorsten Schwab </a><span>became Friend with <a href="#">David Kirsch</a></span></h5>
                                                                        <p>2 days ago</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="activity__item mb-3">
                                                                <div class="activity__inner bg-white">
                                                                    <div class="activity__thumb">
                                                                        <a href="member-single.html"><img src="{{ URL::to('website/assets/images/member/home2/04.jpg') }}" alt="dating thumb"></a>
                                                                    </div>
                                                                    <div class="activity__content">
                                                                        <h5><a href="member-single.html">Leah Friedman </a><span>became Friend with <a href="#">Manuela Lehrer</a></span></h5>
                                                                        <p>2 days ago</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="activity__item mb-3">
                                                                <div class="activity__inner bg-white">
                                                                    <div class="activity__thumb">
                                                                        <a href="member-single.html"><img src="{{ URL::to('website/assets/images/member/home2/05.jpg') }}" alt="dating thumb"></a>
                                                                    </div>
                                                                    <div class="activity__content">
                                                                        <h5><a href="member-single.html">Maximilian </a><span>became Friend with <a href="#">Franziska Pfeiffer</a></span></h5>
                                                                        <p>2 days ago</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="activity__item">
                                                                <div class="activity__inner bg-white">
                                                                    <div class="activity__thumb">
                                                                        <a href="member-single.html"><img src="{{ URL::to('website/assets/images/member/home2/06.jpg') }}" alt="dating thumb"></a>
                                                                    </div>
                                                                    <div class="activity__content">
                                                                        <h5><a href="member-single.html">Michelle Foerster </a><span>became Friend with <a href="#">Ines Dresdner</a></span></h5>
                                                                        <p>2 days ago</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="tab-pane fade" id="Groups" role="tabpanel" aria-labelledby="Groups-tab">
                                                            <div class="activity__item mb-3">
                                                                <div class="activity__inner bg-white">
                                                                    <div class="activity__thumb">
                                                                        <a href="member-single.html"><img src="{{ URL::to('website/assets/images/member/home2/01.jpg') }}" alt="dating thumb"></a>
                                                                    </div>
                                                                    <div class="activity__content">
                                                                        <h5><a href="member-single.html">Daniel Becker </a><span>joined the group</span></h5>
                                                                        <p>28 days ago</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="activity__item mb-3">
                                                                <div class="activity__inner bg-white">
                                                                    <div class="activity__thumb">
                                                                        <a href="member-single.html"><img src="{{ URL::to('website/assets/images/member/home2/02.jpg') }}" alt="dating thumb"></a>
                                                                    </div>
                                                                    <div class="activity__content">
                                                                        <h5><a href="member-single.html">Simone Wulf </a><span>joined the group</span></h5>
                                                                        <p>12 days ago</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="gt2" role="tabpanel" aria-labelledby="gt2-tab">
                                    <div class="info">
                                        <div class="info-card mb-4">
                                            <div class="info-card-title">
                                                <h6>Base Info</h6>
                                            </div>
                                            <div class="info-card-content">
                                                <ul class="info-list">
                                                    <li>
                                                        <p class="info-name">Name</p>
                                                        <p class="info-details">William Smith</p>
                                                    </li>
                                                    <li>
                                                        <p class="info-name">I'm a</p>
                                                        <p class="info-details">Woman</p>
                                                    </li>
                                                    <li>
                                                        <p class="info-name">Loking for a</p>
                                                        <p class="info-details">Men</p>
                                                    </li>
                                                    <li>
                                                        <p class="info-name">Marital Status</p>
                                                        <p class="info-details">Single</p>
                                                    </li>
                                                    <li>
                                                        <p class="info-name">Age</p>
                                                        <p class="info-details">36</p>
                                                    </li>
                                                    <li>
                                                        <p class="info-name">Date of Birth</p>
                                                        <p class="info-details">27-02-1996</p>
                                                    </li>
                                                    <li>
                                                        <p class="info-name">Address</p>
                                                        <p class="info-details">Streop Rd, Peosur, Inphodux,
                                                            USA.</p>
                                                    </li>
                                                </ul>

                                            </div>
                                        </div>
                                        <div class="info-card mb-4">
                                            <div class="info-card-title">
                                                <h6>Myself Summary</h6>
                                            </div>
                                            <div class="info-card-content">
                                                <p>Collaboratively innovate compelling mindshare after prospective partnership Competently sereiz long-term high-impact internal or "organic" sources vias user friendly strategic themesr areas creat Dramatically coordinate premium partnerships rather than standards compliant technologies ernd Dramaticaly matrix ethical collaboration and idea-sharing through opensour methodolog and Intrinsicly grow collaborative platforms vis-a-vis effective scenarios. The energistically strategize cost effective ideas before the worke unde.</p>
                                            </div>
                                        </div>

                                        <div class="info-card mb-4">
                                            <div class="info-card-title">
                                                <h6>Looking For</h6>
                                            </div>
                                            <div class="info-card-content">
                                                <ul class="info-list">
                                                    <li>
                                                        <p class="info-name">I'm looking for</p>
                                                        <p class="info-details">I want a funny person</p>
                                                    </li>
                                                    <li>
                                                        <p class="info-name">Whatever I like</p>
                                                        <p class="info-details">I like to travel a lot</p>
                                                    </li>
                                                </ul>

                                            </div>
                                        </div>

                                        <div class="info-card mb-4">
                                            <div class="info-card-title">
                                                <h6>Lifestyle</h6>
                                            </div>
                                            <div class="info-card-content">
                                                <ul class="info-list">
                                                    <li>
                                                        <p class="info-name">Interest</p>
                                                        <p class="info-details">Dogs,Cats</p>
                                                    </li>
                                                    <li>
                                                        <p class="info-name">Favorite vocations</p>
                                                        <p class="info-details">Maldives, Bangladesh</p>
                                                    </li>
                                                    <li>
                                                        <p class="info-name">Looking for</p>
                                                        <p class="info-details">Serious Relationshiop,Affair</p>
                                                    </li>
                                                    <li>
                                                        <p class="info-name">Smoking</p>
                                                        <p class="info-details">Casual Smoker</p>
                                                    </li>
                                                    <li>
                                                        <p class="info-name">Language</p>
                                                        <p class="info-details">English, French, Italian</p>
                                                    </li>
                                                </ul>

                                            </div>
                                        </div>

                                        <div class="info-card">
                                            <div class="info-card-title">
                                                <h6>Physical info</h6>
                                            </div>
                                            <div class="info-card-content">
                                                <ul class="info-list">
                                                    <li>
                                                        <p class="info-name">Height</p>
                                                        <p class="info-details">5'8 ft</p>
                                                    </li>
                                                    <li>
                                                        <p class="info-name">Weight</p>
                                                        <p class="info-details">72 kg</p>
                                                    </li>
                                                    <li>
                                                        <p class="info-name">Hair Color</p>
                                                        <p class="info-details">Black</p>
                                                    </li>
                                                    <li>
                                                        <p class="info-name">Eye Color</p>
                                                        <p class="info-details">Brown</p>
                                                    </li>
                                                    <li>
                                                        <p class="info-name">Body Type</p>
                                                        <p class="info-details">Tall</p>
                                                    </li>
                                                    <li>
                                                        <p class="info-name">Ethnicity</p>
                                                        <p class="info-details">Middle Eastern</p>
                                                    </li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="gt3" role="tabpanel" aria-labelledby="gt3-tab">
                                    <div class="site">
                                        <div class="info-card mb-4">
                                            <div class="info-card-title">
                                                <h6>Site Link</h6>
                                            </div>
                                            <div class="info-card-content">
                                                <ul class="info-list">
                                                    <li>
                                                        <div class="info-details">
                                                            <div class="id-left">
                                                                <img src="{{ URL::to('website/assets/images/site/01.png') }}" alt="dating thumb">
                                                            </div>
                                                            <div class="id-right">
                                                                <a href="#" target="_blank"><h5>Ollya Dating</h5></a>
                                                                <p>Active 5 months ago</p>
                                                            </div>
                                                        </div>
                                                        <a href="#" class="default-btn" target="_blank"><span>Visit Site</span></a>
                                                    </li>
                                                    <li>
                                                        <div class="info-details">
                                                            <div class="id-left">
                                                                <img src="{{ URL::to('website/assets/images/site/02.png') }}" alt="dating thumb">
                                                            </div>
                                                            <div class="id-right">
                                                                <a href="#" target="_blank"><h5>Ollya</h5></a>
                                                                <p>Active 2 months ago</p>
                                                            </div>
                                                        </div>
                                                        <a href="#" class="default-btn" target="_blank"><span>Visit Site</span></a>
                                                    </li>
                                                    <li>
                                                        <div class="info-details">
                                                            <div class="id-left">
                                                                <img src="{{ URL::to('website/assets/images/site/03.png') }}" alt="dating thumb">
                                                            </div>
                                                            <div class="id-right">
                                                                <a href="#" target="_blank"><h5>Ollya Dating</h5></a>
                                                                <p>Active 5 months ago</p>
                                                            </div>
                                                        </div>
                                                        <a href="#" class="default-btn" target="_blank"><span>Visit Site</span></a>
                                                    </li>
                                                    <li>
                                                        <div class="info-details">
                                                            <div class="id-left">
                                                                <img src="{{ URL::to('website/assets/images/site/04.png') }}" alt="dating thumb">
                                                            </div>
                                                            <div class="id-right">
                                                                <a href="#" target="_blank"><h5>Ollya</h5></a>
                                                                <p>Active 2 months ago</p>
                                                            </div>
                                                        </div>
                                                        <a href="#" class="default-btn" target="_blank"><span>Visit Site</span></a>
                                                    </li>
                                                    <li>
                                                        <div class="info-details">
                                                            <div class="id-left">
                                                                <img src="{{ URL::to('website/assets/images/site/05.png') }}" alt="dating thumb">
                                                            </div>
                                                            <div class="id-right">
                                                                <a href="#" target="_blank"><h5>Ollya Dating</h5></a>
                                                                <p>Active 5 months ago</p>
                                                            </div>
                                                        </div>
                                                        <a href="#" class="default-btn" target="_blank"><span>Visit Site</span></a>
                                                    </li>
                                                    <li>
                                                        <div class="info-details">
                                                            <div class="id-left">
                                                                <img src="{{ URL::to('website/assets/images/site/06.png') }}" alt="dating thumb">
                                                            </div>
                                                            <div class="id-right">
                                                                <a href="#" target="_blank"><h5>Ollya</h5></a>
                                                                <p>Active 2 months ago</p>
                                                            </div>
                                                        </div>
                                                        <a href="#" class="default-btn" target="_blank"><span>Visit Site</span></a>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="info-card-title info-card-pagination">
                                                <p>Viewing 1 - 2 of 2 sites</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="gt4" role="tabpanel" aria-labelledby="gt4-tab">
                                    <div class="group__bottom--area">
                                        <div class="group__bottom--head">
                                            <div class="left">
                                                <form action="#">
                                                    <input type="text" name="search" placeholder="search">
                                                    <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                                                </form>
                                            </div>
                                            <div class="right">
                                                Orader By:
                                                <div class="banner__inputlist">
                                                    <select>
                                                        <option selected="">Newest</option>
                                                        <option value="">Popular</option>
                                                        <option value="">Old</option>
                                                        <option value="">Recent</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="group__bottom--body">
                                            <div class="member">
                                                <div class="row g-3 row-cols-lg-3 row-cols-sm-2 row-cols-1">
                                                    <div class="col">
                                                        <div class="member__item w-100">
                                                            <div class="member__inner m-0">
                                                                <div class="member__thumb">
                                                                    <img src="{{ URL::to('website/assets/images/member/profile/profile.jpg') }}" alt="member-img">
                                                                    <span class="member__activity">Online</span>
                                                                </div>
                                                                <div class="member__content">
                                                                    <a href="member-single.html"><h6>Michele Storm</h6></a>
                                                                    <p>32 Years old <i class="fa-solid fa-mars"></i></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="member__item w-100">
                                                            <div class="member__inner m-0">
                                                                <div class="member__thumb">
                                                                    <img src="{{ URL::to('website/assets/images/member/male/02.jpg') }}" alt="member-img">
                                                                    <span class="member__activity">Online</span>
                                                                </div>
                                                                <div class="member__content">
                                                                    <a href="member-single.html"><h6>Hanna Marcovick</h6></a>
                                                                    <p>32 Years old <i class="fa-solid fa-venus"></i></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="member__item w-100">
                                                            <div class="member__inner m-0">
                                                                <div class="member__thumb">
                                                                    <img src="{{ URL::to('website/assets/images/member/male/03.jpg') }}" alt="member-img">
                                                                    <span class="member__activity member__activity--ofline">2 Days ago</span>
                                                                </div>
                                                                <div class="member__content">
                                                                    <a href="member-single.html"><h6>Smith Jhonson</h6></a>
                                                                    <p>32 Years old <i class="fa-solid fa-mars"></i></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="member__item w-100">
                                                            <div class="member__inner m-0">
                                                                <div class="member__thumb">
                                                                    <img src="{{ URL::to('website/assets/images/member/female/01.jpg') }}" alt="member-img">
                                                                    <span class="member__activity member__activity--ofline">32 Minites Ago</span>
                                                                </div>
                                                                <div class="member__content">
                                                                    <a href="member-single.html"><h6>Brady Patterson</h6></a>
                                                                    <p>32 Years old <i class="fa-solid fa-mars"></i></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="member__item w-100">
                                                            <div class="member__inner m-0">
                                                                <div class="member__thumb">
                                                                    <img src="{{ URL::to('website/assets/images/member/male/04.jpg') }}" alt="member-img">
                                                                    <span class="member__activity">Online</span>
                                                                </div>
                                                                <div class="member__content">
                                                                    <a href="member-single.html"><h6>Peter Shull</h6></a>
                                                                    <p>32 Years old <i class="fa-solid fa-venus"></i></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="member__item w-100">
                                                            <div class="member__inner m-0">
                                                                <div class="member__thumb">
                                                                    <img src="{{ URL::to('website/assets/images/member/female/02.jpg') }}" alt="member-img">
                                                                    <span class="member__activity">Online</span>
                                                                </div>
                                                                <div class="member__content">
                                                                    <a href="member-single.html"><h6>Alesandra Cirilo</h6></a>
                                                                    <p>32 Years old <i class="fa-solid fa-mars"></i></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="member__item w-100">
                                                            <div class="member__inner m-0">
                                                                <div class="member__thumb">
                                                                    <img src="{{ URL::to('website/assets/images/member/female/03.jpg') }}" alt="member-img">
                                                                    <span class="member__activity">Online</span>
                                                                </div>
                                                                <div class="member__content">
                                                                    <a href="member-single.html"><h6>Diana Kuhn</h6></a>
                                                                    <p>32 Years old <i class="fa-solid fa-mars"></i></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="member__item w-100">
                                                            <div class="member__inner m-0">
                                                                <div class="member__thumb">
                                                                    <img src="{{ URL::to('website/assets/images/member/male/05.jpg') }}" alt="member-img">
                                                                    <span class="member__activity">Online</span>
                                                                </div>
                                                                <div class="member__content">
                                                                    <a href="member-single.html"><h6>Mathias Maur</h6></a>
                                                                    <p>32 Years old <i class="fa-solid fa-venus"></i></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="member__item w-100">
                                                            <div class="member__inner m-0">
                                                                <div class="member__thumb">
                                                                    <img src="{{ URL::to('website/assets/images/member/female/04.jpg') }}" alt="member-img">
                                                                    <span class="member__activity">Online</span>
                                                                </div>
                                                                <div class="member__content">
                                                                    <a href="member-single.html"><h6>Maria Glockner</h6></a>
                                                                    <p>32 Years old <i class="fa-solid fa-mars"></i></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="member__item w-100">
                                                            <div class="member__inner m-0">
                                                                <div class="member__thumb">
                                                                    <img src="{{ URL::to('website/assets/images/member/female/05.jpg') }}" alt="member-img">
                                                                    <span class="member__activity">Online</span>
                                                                </div>
                                                                <div class="member__content">
                                                                    <a href="member-single.html"><h6>Nadine Lange</h6></a>
                                                                    <p>32 Years old <i class="fa-solid fa-mars"></i></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="member__item w-100">
                                                            <div class="member__inner m-0">
                                                                <div class="member__thumb">
                                                                    <img src="{{ URL::to('website/assets/images/member/male/06.jpg') }}" alt="member-img">
                                                                    <span class="member__activity">Online</span>
                                                                </div>
                                                                <div class="member__content">
                                                                    <a href="member-single.html"><h6>Marko Mayer</h6></a>
                                                                    <p>32 Years old <i class="fa-solid fa-venus"></i></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="member__item w-100">
                                                            <div class="member__inner m-0">
                                                                <div class="member__thumb">
                                                                    <img src="{{ URL::to('website/assets/images/member/female/06.jpg') }}" alt="member-img">
                                                                    <span class="member__activity">Online</span>
                                                                </div>
                                                                <div class="member__content">
                                                                    <a href="member-single.html"><h6>Sophia Bader</h6></a>
                                                                    <p>32 Years old <i class="fa-solid fa-mars"></i></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="member__item w-100">
                                                            <div class="member__inner m-0">
                                                                <div class="member__thumb">
                                                                    <img src="{{ URL::to('website/assets/images/member/female/07.jpg') }}" alt="member-img">
                                                                    <span class="member__activity">Online</span>
                                                                </div>
                                                                <div class="member__content">
                                                                    <a href="member-single.html"><h6>Maria Braun</h6></a>
                                                                    <p>32 Years old <i class="fa-solid fa-mars"></i></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="member__item w-100">
                                                            <div class="member__inner m-0">
                                                                <div class="member__thumb">
                                                                    <img src="{{ URL::to('website/assets/images/member/male/08.jpg') }}" alt="member-img">
                                                                    <span class="member__activity">Online</span>
                                                                </div>
                                                                <div class="member__content">
                                                                    <a href="member-single.html"><h6>Leon Baader</h6></a>
                                                                    <p>32 Years old <i class="fa-solid fa-venus"></i></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="member__item w-100">
                                                            <div class="member__inner m-0">
                                                                <div class="member__thumb">
                                                                    <img src="{{ URL::to('website/assets/images/member/female/08.jpg') }}" alt="member-img">
                                                                    <span class="member__activity">Online</span>
                                                                </div>
                                                                <div class="member__content">
                                                                    <a href="member-single.html"><h6>Janina Baer</h6></a>
                                                                    <p>32 Years old <i class="fa-solid fa-mars"></i></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-center mt-5">
                                                <a href="#" class="default-btn"><span><i class="fa-solid fa-spinner"></i> Load More</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="gt5" role="tabpanel" aria-labelledby="gt5-tab">
                                    <div class="group__bottom--area">
                                        <div class="group__bottom--head">
                                            <div class="left">
                                                <form action="#">
                                                    <input type="text" name="search" placeholder="search" class="">
                                                    <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                                                </form>
                                            </div>
                                            <div class="right">
                                                Orader By:
                                                <div class="banner__inputlist">
                                                    <select>
                                                        <option selected="">Newest</option>
                                                        <option value="">Popular</option>
                                                        <option value="">Old</option>
                                                        <option value="">Recent</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="group__bottom--body bg-white">
                                            <div class="group__bottom--group">
                                                <div class="row g-3 justify-content-center mx-12-none row-cols-lg-2 row-cols-sm-2 row-cols-1">
                                                    <div class="col">
                                                        <div class="story__item style2">
                                                            <div class="story__inner">
                                                                <div class="story__thumb position-relative">
                                                                    <a href="group-single.html"><img src="{{ URL::to('website/assets/images/group/01.jpg') }}" alt="dating thumb"></a>
                                                                    <span class="member__activity member__activity--ofline">2 days ago</span>
                                                                </div>
                                                                <div class="story__content px-0 pb-0">
                                                                    <a href="group-single.html"><h4>Be young, love life</h4></a>
                                                                    <p>You become what you believe. –Oprah Winfrey</p>
                                                                    <div class="story__content--author justify-content-between border-top pt-3">
                                                                        <div class="story__content--content mb-2">
                                                                            <p><i class="fa-solid fa-earth-africa"></i> Public</p>
                                                                        </div>
                                                                        <ul class="img-stack">
                                                                            <li>
                                                                                <a href="#">
                                                                                    <img src="{{ URL::to('website/assets/images/group/icon/01.png') }}" alt="member-img">
                                                                                    <div class="time-tooltip">
                                                                                        <div class="time-tooltip-holder">
                                                                                            <span class="tooltip-info">Klaus Klug</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">
                                                                                    <img src="{{ URL::to('website/assets/images/group/icon/02.png') }}" alt="member-img">
                                                                                    <div class="time-tooltip">
                                                                                        <div class="time-tooltip-holder">
                                                                                            <span class="tooltip-info">Mary C. Shen</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">
                                                                                    <img src="{{ URL::to('website/assets/images/group/icon/03.png') }}" alt="member-img">
                                                                                    <div class="time-tooltip">
                                                                                        <div class="time-tooltip-holder">
                                                                                            <span class="tooltip-info">Lucas Vogler</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">
                                                                                    <img src="{{ URL::to('website/assets/images/group/icon/04.png') }}" alt="member-img">
                                                                                    <div class="time-tooltip">
                                                                                        <div class="time-tooltip-holder">
                                                                                            <span class="tooltip-info">Manuela Moench</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">
                                                                                    <img src="{{ URL::to('website/assets/images/group/icon/05.png') }}" alt="member-img">
                                                                                    <div class="time-tooltip">
                                                                                        <div class="time-tooltip-holder">
                                                                                            <span class="tooltip-info">Matthias Propst</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li class="bg-theme">
                                                                                <a href="#">
                                                                                    12+
                                                                                    <div class="time-tooltip">
                                                                                        <div class="time-tooltip-holder">
                                                                                            <span class="tooltip-info">More</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="story__item style2 story--theme-color2">
                                                            <div class="story__inner">
                                                                <div class="story__thumb position-relative">
                                                                    <a href="group-single.html"><img src="{{ URL::to('website/assets/images/group/02.jpg') }}" alt="dating thumb"></a>
                                                                    <span class="member__activity member__activity--ofline">4 days ago</span>
                                                                </div>
                                                                <div class="story__content px-0 pb-0">
                                                                    <a href="group-single.html"><h4>Learn how to love</h4></a>
                                                                    <p>Fall seven times and stand up eight. –Japanese Proverb</p>
                                                                    <div class="story__content--author justify-content-between border-top pt-3">
                                                                        <div class="story__content--content mb-2">
                                                                            <p><i class="fa-solid fa-earth-africa"></i> Public</p>
                                                                        </div>
                                                                        <ul class="img-stack">
                                                                            <li>
                                                                                <a href="#">
                                                                                    <img src="{{ URL::to('website/assets/images/group/icon/06.png') }}" alt="member-img">
                                                                                    <div class="time-tooltip">
                                                                                        <div class="time-tooltip-holder">
                                                                                            <span class="tooltip-info">Klaus Klug</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">
                                                                                    <img src="{{ URL::to('website/assets/images/group/icon/07.png') }}" alt="member-img">
                                                                                    <div class="time-tooltip">
                                                                                        <div class="time-tooltip-holder">
                                                                                            <span class="tooltip-info">Mary C. Shen</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">
                                                                                    <img src="{{ URL::to('website/assets/images/group/icon/08.png') }}" alt="member-img">
                                                                                    <div class="time-tooltip">
                                                                                        <div class="time-tooltip-holder">
                                                                                            <span class="tooltip-info">Lucas Vogler</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">
                                                                                    <img src="{{ URL::to('website/assets/images/group/icon/09.png') }}" alt="member-img">
                                                                                    <div class="time-tooltip">
                                                                                        <div class="time-tooltip-holder">
                                                                                            <span class="tooltip-info">Manuela Moench</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">
                                                                                    <img src="{{ URL::to('website/assets/images/group/icon/10.png') }}" alt="member-img">
                                                                                    <div class="time-tooltip">
                                                                                        <div class="time-tooltip-holder">
                                                                                            <span class="tooltip-info">Matthias Propst</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li class="bg-theme">
                                                                                <a href="#">
                                                                                    12+
                                                                                    <div class="time-tooltip">
                                                                                        <div class="time-tooltip-holder">
                                                                                            <span class="tooltip-info">More</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="story__item style2 story--theme-color3">
                                                            <div class="story__inner">
                                                                <div class="story__thumb position-relative">
                                                                    <a href="group-single.html"><img src="{{ URL::to('website/assets/images/group/03.jpg') }}" alt="dating thumb"></a>
                                                                    <span class="member__activity member__activity--ofline">8 days ago</span>
                                                                </div>
                                                                <div class="story__content px-0 pb-0">
                                                                    <a href="group-single.html"><h4>Love, health and...</h4></a>
                                                                    <p>Definiteness of purpose is the starting point of all</p>
                                                                    <div class="story__content--author justify-content-between border-top pt-3">
                                                                        <div class="story__content--content mb-2">
                                                                            <p><i class="fa-solid fa-earth-africa"></i> Public</p>
                                                                        </div>
                                                                        <ul class="img-stack">
                                                                            <li>
                                                                                <a href="#">
                                                                                    <img src="{{ URL::to('website/assets/images/group/icon/11.png') }}" alt="member-img">
                                                                                    <div class="time-tooltip">
                                                                                        <div class="time-tooltip-holder">
                                                                                            <span class="tooltip-info">Klaus Klug</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">
                                                                                    <img src="{{ URL::to('website/assets/images/group/icon/12.png') }}" alt="member-img">
                                                                                    <div class="time-tooltip">
                                                                                        <div class="time-tooltip-holder">
                                                                                            <span class="tooltip-info">Mary C. Shen</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">
                                                                                    <img src="{{ URL::to('website/assets/images/group/icon/13.png') }}" alt="member-img">
                                                                                    <div class="time-tooltip">
                                                                                        <div class="time-tooltip-holder">
                                                                                            <span class="tooltip-info">Lucas Vogler</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">
                                                                                    <img src="{{ URL::to('website/assets/images/group/icon/14.png') }}" alt="member-img">
                                                                                    <div class="time-tooltip">
                                                                                        <div class="time-tooltip-holder">
                                                                                            <span class="tooltip-info">Manuela Moench</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">
                                                                                    <img src="{{ URL::to('website/assets/images/group/icon/15.png') }}" alt="member-img">
                                                                                    <div class="time-tooltip">
                                                                                        <div class="time-tooltip-holder">
                                                                                            <span class="tooltip-info">Matthias Propst</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li class="bg-theme">
                                                                                <a href="#">
                                                                                    12+
                                                                                    <div class="time-tooltip">
                                                                                        <div class="time-tooltip-holder">
                                                                                            <span class="tooltip-info">More</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="story__item style2 story--theme-color4">
                                                            <div class="story__inner">
                                                                <div class="story__thumb position-relative">
                                                                    <a href="group-single.html"><img src="{{ URL::to('website/assets/images/group/04.jpg') }}" alt="dating thumb"></a>
                                                                    <span class="member__activity member__activity--ofline">12 days ago</span>
                                                                </div>
                                                                <div class="story__content px-0 pb-0">
                                                                    <a href="group-single.html"><h4>Ollya Dating Theme...</h4></a>
                                                                    <p> will most likely be using this theme really nice dating theme for</p>
                                                                    <div class="story__content--author justify-content-between border-top pt-3">
                                                                        <div class="story__content--content mb-2">
                                                                            <p><i class="fa-solid fa-earth-africa"></i> Public</p>
                                                                        </div>
                                                                        <ul class="img-stack">
                                                                            <li>
                                                                                <a href="#">
                                                                                    <img src="{{ URL::to('website/assets/images/group/icon/01.png') }}" alt="member-img">
                                                                                    <div class="time-tooltip">
                                                                                        <div class="time-tooltip-holder">
                                                                                            <span class="tooltip-info">Klaus Klug</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">
                                                                                    <img src="{{ URL::to('website/assets/images/group/icon/06.png') }}" alt="member-img">
                                                                                    <div class="time-tooltip">
                                                                                        <div class="time-tooltip-holder">
                                                                                            <span class="tooltip-info">Mary C. Shen</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">
                                                                                    <img src="{{ URL::to('website/assets/images/group/icon/03.png') }}" alt="member-img">
                                                                                    <div class="time-tooltip">
                                                                                        <div class="time-tooltip-holder">
                                                                                            <span class="tooltip-info">Lucas Vogler</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">
                                                                                    <img src="{{ URL::to('website/assets/images/group/icon/07.png') }}" alt="member-img">
                                                                                    <div class="time-tooltip">
                                                                                        <div class="time-tooltip-holder">
                                                                                            <span class="tooltip-info">Manuela Moench</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">
                                                                                    <img src="{{ URL::to('website/assets/images/group/icon/02.png') }}" alt="member-img">
                                                                                    <div class="time-tooltip">
                                                                                        <div class="time-tooltip-holder">
                                                                                            <span class="tooltip-info">Matthias Propst</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li class="bg-theme">
                                                                                <a href="#">
                                                                                    12+
                                                                                    <div class="time-tooltip">
                                                                                        <div class="time-tooltip-holder">
                                                                                            <span class="tooltip-info">More</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="story__item style2 story--theme-color5">
                                                            <div class="story__inner">
                                                                <div class="story__thumb position-relative">
                                                                    <a href="group-single.html"><img src="{{ URL::to('website/assets/images/group/05.jpg') }}" alt="dating thumb"></a>
                                                                    <span class="member__activity member__activity--ofline">18 days ago</span>
                                                                </div>
                                                                <div class="story__content px-0 pb-0">
                                                                    <a href="group-single.html"><h4>Skip relation routine</h4></a>
                                                                    <p>Twenty years from now you will be more disappointed</p>
                                                                    <div class="story__content--author justify-content-between border-top pt-3">
                                                                        <div class="story__content--content mb-2">
                                                                            <p><i class="fa-solid fa-earth-africa"></i> Public</p>
                                                                        </div>
                                                                        <ul class="img-stack">
                                                                            <li>
                                                                                <a href="#">
                                                                                    <img src="{{ URL::to('website/assets/images/group/icon/11.png') }}" alt="member-img">
                                                                                    <div class="time-tooltip">
                                                                                        <div class="time-tooltip-holder">
                                                                                            <span class="tooltip-info">Klaus Klug</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">
                                                                                    <img src="{{ URL::to('website/assets/images/group/icon/15.png') }}" alt="member-img">
                                                                                    <div class="time-tooltip">
                                                                                        <div class="time-tooltip-holder">
                                                                                            <span class="tooltip-info">Mary C. Shen</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">
                                                                                    <img src="{{ URL::to('website/assets/images/group/icon/03.png') }}" alt="member-img">
                                                                                    <div class="time-tooltip">
                                                                                        <div class="time-tooltip-holder">
                                                                                            <span class="tooltip-info">Lucas Vogler</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">
                                                                                    <img src="{{ URL::to('website/assets/images/group/icon/09.png') }}" alt="member-img">
                                                                                    <div class="time-tooltip">
                                                                                        <div class="time-tooltip-holder">
                                                                                            <span class="tooltip-info">Manuela Moench</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">
                                                                                    <img src="{{ URL::to('website/assets/images/group/icon/07.png') }}" alt="member-img">
                                                                                    <div class="time-tooltip">
                                                                                        <div class="time-tooltip-holder">
                                                                                            <span class="tooltip-info">Matthias Propst</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li class="bg-theme">
                                                                                <a href="#">
                                                                                    12+
                                                                                    <div class="time-tooltip">
                                                                                        <div class="time-tooltip-holder">
                                                                                            <span class="tooltip-info">More</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="story__item style2 story--theme-color6">
                                                            <div class="story__inner">
                                                                <div class="story__thumb position-relative">
                                                                    <a href="group-single.html"><img src="{{ URL::to('website/assets/images/group/06.jpg') }}" alt="dating thumb"></a>
                                                                    <span class="member__activity member__activity--ofline">21 days ago</span>
                                                                </div>
                                                                <div class="story__content px-0 pb-0">
                                                                    <a href="group-single.html"><h4>Gay Community</h4></a>
                                                                    <p>It’s your place in the world; it’s your life. </p>
                                                                    <div class="story__content--author justify-content-between border-top pt-3">
                                                                        <div class="story__content--content mb-2">
                                                                            <p><i class="fa-solid fa-earth-africa"></i> Public</p>
                                                                        </div>
                                                                        <ul class="img-stack">
                                                                            <li>
                                                                                <a href="#">
                                                                                    <img src="{{ URL::to('website/assets/images/group/icon/15.png') }}" alt="member-img">
                                                                                    <div class="time-tooltip">
                                                                                        <div class="time-tooltip-holder">
                                                                                            <span class="tooltip-info">Klaus Klug</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">
                                                                                    <img src="{{ URL::to('website/assets/images/group/icon/12.png') }}" alt="member-img">
                                                                                    <div class="time-tooltip">
                                                                                        <div class="time-tooltip-holder">
                                                                                            <span class="tooltip-info">Mary C. Shen</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">
                                                                                    <img src="{{ URL::to('website/assets/images/group/icon/10.png') }}" alt="member-img">
                                                                                    <div class="time-tooltip">
                                                                                        <div class="time-tooltip-holder">
                                                                                            <span class="tooltip-info">Lucas Vogler</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">
                                                                                    <img src="{{ URL::to('website/assets/images/group/icon/01.png') }}" alt="member-img">
                                                                                    <div class="time-tooltip">
                                                                                        <div class="time-tooltip-holder">
                                                                                            <span class="tooltip-info">Manuela Moench</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">
                                                                                    <img src="{{ URL::to('website/assets/images/group/icon/08.png') }}" alt="member-img">
                                                                                    <div class="time-tooltip">
                                                                                        <div class="time-tooltip-holder">
                                                                                            <span class="tooltip-info">Matthias Propst</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li class="bg-theme">
                                                                                <a href="#">
                                                                                    12+
                                                                                    <div class="time-tooltip">
                                                                                        <div class="time-tooltip-holder">
                                                                                            <span class="tooltip-info">More</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="story__item style2 story--theme-color7">
                                                            <div class="story__inner">
                                                                <div class="story__thumb position-relative">
                                                                    <a href="group-single.html"><img src="{{ URL::to('website/assets/images/group/07.jpg') }}" alt="dating thumb"></a>
                                                                    <span class="member__activity member__activity--ofline">24 days ago</span>
                                                                </div>
                                                                <div class="story__content px-0 pb-0">
                                                                    <a href="group-single.html"><h4>Only Buddies</h4></a>
                                                                    <p>You miss 100% of the shots you don’t take.</p>
                                                                    <div class="story__content--author justify-content-between border-top pt-3">
                                                                        <div class="story__content--content mb-2">
                                                                            <p><i class="fa-solid fa-earth-africa"></i> Public</p>
                                                                        </div>
                                                                        <ul class="img-stack">
                                                                            <li>
                                                                                <a href="#">
                                                                                    <img src="{{ URL::to('website/assets/images/group/icon/15.png') }}" alt="member-img">
                                                                                    <div class="time-tooltip">
                                                                                        <div class="time-tooltip-holder">
                                                                                            <span class="tooltip-info">Klaus Klug</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">
                                                                                    <img src="{{ URL::to('website/assets/images/group/icon/02.png') }}" alt="member-img">
                                                                                    <div class="time-tooltip">
                                                                                        <div class="time-tooltip-holder">
                                                                                            <span class="tooltip-info">Mary C. Shen</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">
                                                                                    <img src="{{ URL::to('website/assets/images/group/icon/09.png') }}" alt="member-img">
                                                                                    <div class="time-tooltip">
                                                                                        <div class="time-tooltip-holder">
                                                                                            <span class="tooltip-info">Lucas Vogler</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">
                                                                                    <img src="{{ URL::to('website/assets/images/group/icon/04.png') }}" alt="member-img">
                                                                                    <div class="time-tooltip">
                                                                                        <div class="time-tooltip-holder">
                                                                                            <span class="tooltip-info">Manuela Moench</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">
                                                                                    <img src="{{ URL::to('website/assets/images/group/icon/08.png') }}" alt="member-img">
                                                                                    <div class="time-tooltip">
                                                                                        <div class="time-tooltip-holder">
                                                                                            <span class="tooltip-info">Matthias Propst</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li class="bg-theme">
                                                                                <a href="#">
                                                                                    12+
                                                                                    <div class="time-tooltip">
                                                                                        <div class="time-tooltip-holder">
                                                                                            <span class="tooltip-info">More</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="story__item style2 story--theme-color8">
                                                            <div class="story__inner">
                                                                <div class="story__thumb position-relative">
                                                                    <a href="group-single.html"><img src="{{ URL::to('website/assets/images/group/08.jpg') }}" alt="dating thumb"></a>
                                                                    <span class="member__activity member__activity--ofline">30 days ago</span>
                                                                </div>
                                                                <div class="story__content px-0 pb-0">
                                                                    <a href="group-single.html"><h4>Love Stories</h4></a>
                                                                    <p>You become what you believe. –Oprah Winfrey</p>
                                                                    <div class="story__content--author justify-content-between border-top pt-3">
                                                                        <div class="story__content--content mb-2">
                                                                            <p><i class="fa-solid fa-earth-africa"></i> Public</p>
                                                                        </div>
                                                                        <ul class="img-stack">
                                                                            <li>
                                                                                <a href="#">
                                                                                    <img src="{{ URL::to('website/assets/images/group/icon/01.png') }}" alt="member-img">
                                                                                    <div class="time-tooltip">
                                                                                        <div class="time-tooltip-holder">
                                                                                            <span class="tooltip-info">Klaus Klug</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">
                                                                                    <img src="{{ URL::to('website/assets/images/group/icon/07.png') }}" alt="member-img">
                                                                                    <div class="time-tooltip">
                                                                                        <div class="time-tooltip-holder">
                                                                                            <span class="tooltip-info">Mary C. Shen</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">
                                                                                    <img src="{{ URL::to('website/assets/images/group/icon/14.png') }}" alt="member-img">
                                                                                    <div class="time-tooltip">
                                                                                        <div class="time-tooltip-holder">
                                                                                            <span class="tooltip-info">Lucas Vogler</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">
                                                                                    <img src="{{ URL::to('website/assets/images/group/icon/02.png') }}" alt="member-img">
                                                                                    <div class="time-tooltip">
                                                                                        <div class="time-tooltip-holder">
                                                                                            <span class="tooltip-info">Manuela Moench</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#">
                                                                                    <img src="{{ URL::to('website/assets/images/group/icon/05.png') }}" alt="member-img">
                                                                                    <div class="time-tooltip">
                                                                                        <div class="time-tooltip-holder">
                                                                                            <span class="tooltip-info">Matthias Propst</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                            <li class="bg-theme">
                                                                                <a href="#">
                                                                                    12+
                                                                                    <div class="time-tooltip">
                                                                                        <div class="time-tooltip-holder">
                                                                                            <span class="tooltip-info">More</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="text-center mt-5">
                                                    <a href="#" class="default-btn"><i class="fa-solid fa-spinner"></i> Load More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="gt6" role="tabpanel" aria-labelledby="gt6-tab">
                                    <div class="group__bottom--body bg-white">
                                        <div class="group__bottom--allmedia">
                                            <div class="media-wrapper">
                                                <ul class="nav nav-tabs" id="myTab3" role="tablist">
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link active" id="all-media-tab" data-bs-toggle="tab" data-bs-target="#all-media" type="button" role="tab" aria-controls="all-media" aria-selected="true"><i class="fa-solid fa-table-cells-large"></i> All <span>12</span></button>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link" id="album-tab" data-bs-toggle="tab" data-bs-target="#album" type="button" role="tab" aria-controls="album" aria-selected="false"><i class="fa-solid fa-camera"></i> Albums <span>4</span></button>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link" id="photos-media-tab" data-bs-toggle="tab" data-bs-target="#photos-media" type="button" role="tab" aria-controls="photos-media" aria-selected="false"><i class="fa-solid fa-image"></i> Photos <span>4</span></button>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link" id="video-tab" data-bs-toggle="tab" data-bs-target="#video" type="button" role="tab" aria-controls="video" aria-selected="false"><i class="fa-solid fa-video"></i> Videos <span>4</span></button>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link" id="music-tab" data-bs-toggle="tab" data-bs-target="#music" type="button" role="tab" aria-controls="music" aria-selected="false"><i class="fa-solid fa-music"></i> Music <span>0</span></button>
                                                    </li>
                                                </ul>
                                                <div class="tab-content" id="myTabContent3">
                                                    <div class="tab-pane fade show active" id="all-media"
                                                        role="tabpanel" aria-labelledby="all-media-tab">
                                                        <div class="media-content">
                                                            <ul class="media-upload">
                                                                <li class="upload-now">
                                                                    <div class="custom-upload">
                                                                        <div class="file-btn"><i class="fa-solid fa-upload"></i> Upload</div>
                                                                        <input type="file">
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                            <div class="row row-cols-2 row-cols-sm-3 row-cols-lg-4 row-cols-xl-3 g-3">
                                                                <div class="col">
                                                                    <div class="media-thumb video-thumb">
                                                                        <img src="{{ URL::to('website/assets/images/allmedia/01.jpg') }}" alt="dating thumb">
                                                                        <a href="#groupmodalvideo" data-rel="lightcase" class="icon">
                                                                            <i class="fa-solid fa-circle-play"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="media-thumb albam-thumb">
                                                                        <img src="{{ URL::to('website/assets/images/allmedia/02.jpg') }}" alt="dating thumb">
                                                                        <a href="#groupmodal" data-rel="lightcase:collection" class="icon">
                                                                            <i class="fa-solid fa-camera"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="media-thumb">
                                                                        <img src="{{ URL::to('website/assets/images/allmedia/03.jpg') }}" alt="dating thumb">
                                                                        <a href="#groupmodal" data-rel="lightcase" class="icon">
                                                                            <i class="fa-solid fa-image"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="media-thumb">
                                                                        <img src="{{ URL::to('website/assets/images/allmedia/04.jpg') }}" alt="dating thumb">
                                                                        <a href="#groupmodal" data-rel="lightcase" class="icon">
                                                                            <i class="fa-solid fa-image"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="media-thumb video-thumb">
                                                                        <img src="{{ URL::to('website/assets/images/allmedia/05.jpg') }}" alt="dating thumb">
                                                                        <a href="#groupmodalvideo" data-rel="lightcase" class="icon">
                                                                            <i class="fa-solid fa-circle-play"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="media-thumb albam-thumb">
                                                                        <img src="{{ URL::to('website/assets/images/allmedia/06.jpg') }}" alt="dating thumb">
                                                                        <a href="#groupmodal" data-rel="lightcase:collection" class="icon">
                                                                            <i class="fa-solid fa-camera"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="media-thumb video-thumb">
                                                                        <img src="{{ URL::to('website/assets/images/allmedia/07.jpg') }}" alt="dating thumb">
                                                                        <a href="#groupmodalvideo" data-rel="lightcase" class="icon">
                                                                            <i class="fa-solid fa-circle-play"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="media-thumb">
                                                                        <img src="{{ URL::to('website/assets/images/allmedia/08.jpg') }}" alt="dating thumb">
                                                                        <a href="#groupmodal" data-rel="lightcase" class="icon">
                                                                            <i class="fa-solid fa-image"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="media-thumb">
                                                                        <img src="{{ URL::to('website/assets/images/allmedia/09.jpg') }}" alt="dating thumb">
                                                                        <a href="#groupmodal" data-rel="lightcase" class="icon">
                                                                            <i class="fa-solid fa-image"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="media-thumb albam-thumb">
                                                                        <img src="{{ URL::to('website/assets/images/allmedia/10.jpg') }}" alt="dating thumb">
                                                                        <a href="#groupmodal" data-rel="lightcase:collection" class="icon">
                                                                            <i class="fa-solid fa-camera"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="media-thumb video-thumb">
                                                                        <img src="{{ URL::to('website/assets/images/allmedia/11.jpg') }}" alt="dating thumb">
                                                                        <a href="#groupmodalvideo" data-rel="lightcase" class="icon">
                                                                            <i class="fa-solid fa-circle-play"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="media-thumb albam-thumb">
                                                                        <img src="{{ URL::to('website/assets/images/allmedia/12.jpg') }}" alt="dating thumb">
                                                                        <a href="#groupmodal" data-rel="lightcase:collection" class="icon">
                                                                            <i class="fa-solid fa-camera"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="text-center mt-5">
                                                                <a href="#" class="default-btn"><i class="fa-solid fa-spinner"></i> Load More</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="tab-pane fade" id="album" role="tabpanel" aria-labelledby="album-tab">
                                                        <div class="media-content">
                                                            <ul class="media-upload">
                                                                 <li class="upload-now">
                                                                    <div class="custom-upload">
                                                                        <div class="file-btn"><i class="fa-solid fa-upload"></i> Upload</div>
                                                                        <input type="file">
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                            <div class="row row-cols-2 row-cols-sm-3 row-cols-lg-4 row-cols-xl-3 g-3">
                                                                <div class="col">
                                                                    <div class="media-thumb albam-thumb">
                                                                        <img src="{{ URL::to('website/assets/images/allmedia/02.jpg') }}" alt="dating thumb">
                                                                        <a href="#groupmodal" data-rel="lightcase:collection" class="icon">
                                                                            <i class="fa-solid fa-camera"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="media-thumb albam-thumb">
                                                                        <img src="{{ URL::to('website/assets/images/allmedia/06.jpg') }}" alt="dating thumb">
                                                                        <a href="#groupmodal" data-rel="lightcase:collection" class="icon">
                                                                            <i class="fa-solid fa-camera"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="media-thumb albam-thumb">
                                                                        <img src="{{ URL::to('website/assets/images/allmedia/10.jpg') }}" alt="dating thumb">
                                                                        <a href="#groupmodal" data-rel="lightcase:collection" class="icon">
                                                                            <i class="fa-solid fa-camera"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="media-thumb albam-thumb">
                                                                        <img src="{{ URL::to('website/assets/images/allmedia/12.jpg') }}" alt="dating thumb">
                                                                        <a href="#groupmodal" data-rel="lightcase:collection" class="icon">
                                                                            <i class="fa-solid fa-camera"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="text-center mt-5">
                                                                <a href="#" class="default-btn"><i class="fa-solid fa-spinner"></i> Load More</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="tab-pane fade" id="photos-media" role="tabpanel" aria-labelledby="photos-media-tab">
                                                        <div class="media-content">
                                                            <ul class="media-upload">
                                                                 <li class="upload-now">
                                                                    <div class="custom-upload">
                                                                        <div class="file-btn"><i class="fa-solid fa-upload"></i> Upload</div>
                                                                        <input type="file">
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                            <div class="row row-cols-2 row-cols-sm-3 row-cols-lg-4 row-cols-xl-3 g-3">
                                                                <div class="col">
                                                                    <div class="media-thumb">
                                                                        <img src="{{ URL::to('website/assets/images/allmedia/03.jpg') }}" alt="dating thumb">
                                                                        <a href="#groupmodal" data-rel="lightcase" class="icon">
                                                                            <i class="fa-solid fa-image"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="media-thumb">
                                                                        <img src="{{ URL::to('website/assets/images/allmedia/04.jpg') }}" alt="dating thumb">
                                                                        <a href="#groupmodal" data-rel="lightcase" class="icon">
                                                                            <i class="fa-solid fa-image"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="media-thumb">
                                                                        <img src="{{ URL::to('website/assets/images/allmedia/08.jpg') }}" alt="dating thumb">
                                                                        <a href="#groupmodal" data-rel="lightcase" class="icon">
                                                                            <i class="fa-solid fa-image"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="media-thumb">
                                                                        <img src="{{ URL::to('website/assets/images/allmedia/09.jpg') }}" alt="dating thumb">
                                                                        <a href="#groupmodal" data-rel="lightcase" class="icon">
                                                                            <i class="fa-solid fa-image"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="text-center mt-5">
                                                                <a href="#" class="default-btn"><i class="fa-solid fa-spinner"></i> Load More</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="tab-pane fade" id="video" role="tabpanel" aria-labelledby="video-tab">
                                                        <div class="media-content">
                                                            <ul class="media-upload">
                                                                 <li class="upload-now">
                                                                    <div class="custom-upload">
                                                                        <div class="file-btn"><i class="fa-solid fa-upload"></i> Upload</div>
                                                                        <input type="file">
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                            <div class="row row-cols-2 row-cols-sm-3 row-cols-lg-4 row-cols-xl-3 g-3">
                                                                <div class="col">
                                                                    <div class="media-thumb video-thumb">
                                                                        <img src="{{ URL::to('website/assets/images/allmedia/01.jpg') }}" alt="dating thumb">
                                                                        <a href="#groupmodalvideo" data-rel="lightcase" class="icon">
                                                                            <i class="fa-solid fa-circle-play"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="media-thumb video-thumb">
                                                                        <img src="{{ URL::to('website/assets/images/allmedia/05.jpg') }}" alt="dating thumb">
                                                                        <a href="#groupmodalvideo" data-rel="lightcase" class="icon">
                                                                            <i class="fa-solid fa-circle-play"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="media-thumb video-thumb">
                                                                        <img src="{{ URL::to('website/assets/images/allmedia/07.jpg') }}" alt="dating thumb">
                                                                        <a href="#groupmodalvideo" data-rel="lightcase" class="icon">
                                                                            <i class="fa-solid fa-circle-play"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="media-thumb video-thumb">
                                                                        <img src="{{ URL::to('website/assets/images/allmedia/11.jpg') }}" alt="dating thumb">
                                                                        <a href="#groupmodalvideo" data-rel="lightcase" class="icon">
                                                                            <i class="fa-solid fa-circle-play"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="text-center mt-5">
                                                                <a href="#" class="default-btn"><i class="fa-solid fa-spinner"></i> Load More</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="tab-pane fade" id="music" role="tabpanel" aria-labelledby="music-tab">
                                                        <div class="media-content">
                                                            <ul class="media-upload">
                                                                 <li class="upload-now">
                                                                    <div class="custom-upload">
                                                                        <div class="file-btn"><i class="fa-solid fa-upload"></i> Upload</div>
                                                                        <input type="file">
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                            <div class="row">
                                                                <div class="col">
                                                                    <p><i class="icofont-worried"></i> Sorry !!
                                                                        There's no media found for the
                                                                        request !! </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 order-xl-0">
                        <div class="group__bottom--center">
                            <div class="story__item style2">
                                <div class="story__inner">
                                    <div class="story__thumb position-relative">
                                        <img src="{{ URL::to('website/assets/images/member/profile/profile.jpg') }}" alt="dating thumb">
                                    </div>
                                    <div class="story__content px-0 pb-0">
                                        <h4>William Smith</h4>
                                        <div class="story__content--content mb-2 pb-3">
                                            <p><i class="fa-solid fa-clock"></i> Active 3 Days Ago</p>
                                        </div>
                                        <p class="mb-2">Challenges are whats make lifes interesting and overcoming them is what makes life meaningful.</p>
                                        <div class="story__content--author mt-3 pb-2">
                                            <h6 class="d-block w-100 mb-3">William Smith Photos</h6>
                                            <div class="row g-2">
                                                <div class="col-4">
                                                    <a href="#groupmodal" data-rel="lightcase:callection"><img src="{{ URL::to('website/assets/images/member/profile/01.jpg') }}" alt="dating thumb"></a>
                                                </div>
                                                <div class="col-4">
                                                    <a href="#groupmodal" data-rel="lightcase:callection"><img src="{{ URL::to('website/assets/images/member/profile/02.jpg') }}" alt="dating thumb"></a>
                                                </div>
                                                <div class="col-4">
                                                    <a href="#groupmodal" data-rel="lightcase:callection"><img src="{{ URL::to('website/assets/images/member/profile/03.jpg') }}" alt="dating thumb"></a>
                                                </div>
                                                <div class="col-4">
                                                    <a href="#groupmodal" data-rel="lightcase:callection"><img src="{{ URL::to('website/assets/images/member/profile/04.jpg') }}" alt="dating thumb"></a>
                                                </div>
                                                <div class="col-4">
                                                    <a href="#groupmodal" data-rel="lightcase:callection"><img src="{{ URL::to('website/assets/images/member/profile/05.jpg') }}" alt="dating thumb"></a>
                                                </div>
                                                <div class="col-4">
                                                    <a href="#groupmodal" data-rel="lightcase:callection"><img src="{{ URL::to('website/assets/images/member/profile/06.jpg') }}" alt="dating thumb"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 order-xl-2">
                        <div class="group__bottom--right">
                            <div class="modal-content border-0 mb-4">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Filter your search</h5>
                                </div>
                                <div class="modal-body">
                                    <form action="#">
                                        <div class="banner__list">
                                            <div class="row align-items-center row-cols-1">
                                                <div class="col">
                                                    <label>I am a</label>
                                                    <div class="banner__inputlist">
                                                        <select>
                                                            <option>Select Gender</option>
                                                            <option value="male" selected>Male</option>
                                                            <option value="female">Female</option>
                                                            <option value="others">Others</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <label>Looking for</label>
                                                    <div class="banner__inputlist">
                                                        <select>
                                                            <option>Select Gender</option>
                                                            <option value="male">Male</option>
                                                            <option value="female" selected>Female</option>
                                                            <option value="others">Others</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <label>Age</label>
                                                    <div class="row g-3">
                                                        <div class="col-6">
                                                            <div class="banner__inputlist">
                                                                <select>
                                                                    <option value="18" selected>18</option>
                                                                    <option value="19">19</option>
                                                                    <option value="20">20</option>
                                                                    <option value="21">21</option>
                                                                    <option value="22">22</option>
                                                                    <option value="23">23</option>
                                                                    <option value="24">24</option>
                                                                    <option value="25">25</option>
                                                                    <option value="26">26</option>
                                                                    <option value="27">27</option>
                                                                    <option value="28">28</option>
                                                                    <option value="29">29</option>
                                                                    <option value="30">30</option>
                                                                    <option value="31">31</option>
                                                                    <option value="32">32</option>
                                                                    <option value="33">33</option>
                                                                    <option value="34">34</option>
                                                                    <option value="35">35</option>
                                                                    <option value="36">36</option>
                                                                    <option value="37">37</option>
                                                                    <option value="38">38</option>
                                                                    <option value="39">39</option>
                                                                    <option value="40">40</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="banner__inputlist">
                                                                <select>
                                                                    <option value="18">18</option>
                                                                    <option value="19">19</option>
                                                                    <option value="20">20</option>
                                                                    <option value="21">21</option>
                                                                    <option value="22">22</option>
                                                                    <option value="23">23</option>
                                                                    <option value="24">24</option>
                                                                    <option value="25" selected>25</option>
                                                                    <option value="26">26</option>
                                                                    <option value="27">27</option>
                                                                    <option value="28">28</option>
                                                                    <option value="29">29</option>
                                                                    <option value="30">30</option>
                                                                    <option value="31">31</option>
                                                                    <option value="32">32</option>
                                                                    <option value="33">33</option>
                                                                    <option value="34">34</option>
                                                                    <option value="35">35</option>
                                                                    <option value="36">36</option>
                                                                    <option value="37">37</option>
                                                                    <option value="38">38</option>
                                                                    <option value="39">39</option>
                                                                    <option value="40">40</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <label>Country</label>
                                                    <div class="banner__inputlist">
                                                        <select id="country" name="country">
                                                            <option value="Afganistan">Afghanistan</option>
                                                            <option value="Albania">Albania</option>
                                                            <option value="Algeria">Algeria</option>
                                                            <option value="American Samoa">American Samoa</option>
                                                            <option value="Andorra">Andorra</option>
                                                            <option value="Angola">Angola</option>
                                                            <option value="Anguilla">Anguilla</option>
                                                            <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                                                            <option value="Argentina">Argentina</option>
                                                            <option value="Armenia">Armenia</option>
                                                            <option value="Aruba">Aruba</option>
                                                            <option value="Australia">Australia</option>
                                                            <option value="Austria">Austria</option>
                                                            <option value="Azerbaijan">Azerbaijan</option>
                                                            <option value="Bahamas">Bahamas</option>
                                                            <option value="Bahrain">Bahrain</option>
                                                            <option value="Bangladesh" selected>Bangladesh</option>
                                                            <option value="Barbados">Barbados</option>
                                                            <option value="Belarus">Belarus</option>
                                                            <option value="Belgium">Belgium</option>
                                                            <option value="Belize">Belize</option>
                                                            <option value="Benin">Benin</option>
                                                            <option value="Bermuda">Bermuda</option>
                                                            <option value="Bhutan">Bhutan</option>
                                                            <option value="Bolivia">Bolivia</option>
                                                            <option value="Bonaire">Bonaire</option>
                                                            <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                                                            <option value="Botswana">Botswana</option>
                                                            <option value="Brazil">Brazil</option>
                                                            <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                                            <option value="Brunei">Brunei</option>
                                                            <option value="Bulgaria">Bulgaria</option>
                                                            <option value="Burkina Faso">Burkina Faso</option>
                                                            <option value="Burundi">Burundi</option>
                                                            <option value="Cambodia">Cambodia</option>
                                                            <option value="Cameroon">Cameroon</option>
                                                            <option value="Canada">Canada</option>
                                                            <option value="Canary Islands">Canary Islands</option>
                                                            <option value="Cape Verde">Cape Verde</option>
                                                            <option value="Cayman Islands">Cayman Islands</option>
                                                            <option value="Central African Republic">Central African Republic</option>
                                                            <option value="Chad">Chad</option>
                                                            <option value="Channel Islands">Channel Islands</option>
                                                            <option value="Chile">Chile</option>
                                                            <option value="China">China</option>
                                                            <option value="Christmas Island">Christmas Island</option>
                                                            <option value="Cocos Island">Cocos Island</option>
                                                            <option value="Colombia">Colombia</option>
                                                            <option value="Comoros">Comoros</option>
                                                            <option value="Congo">Congo</option>
                                                            <option value="Cook Islands">Cook Islands</option>
                                                            <option value="Costa Rica">Costa Rica</option>
                                                            <option value="Cote DIvoire">Cote DIvoire</option>
                                                            <option value="Croatia">Croatia</option>
                                                            <option value="Cuba">Cuba</option>
                                                            <option value="Curaco">Curacao</option>
                                                            <option value="Cyprus">Cyprus</option>
                                                            <option value="Czech Republic">Czech Republic</option>
                                                            <option value="Denmark">Denmark</option>
                                                            <option value="Djibouti">Djibouti</option>
                                                            <option value="Dominica">Dominica</option>
                                                            <option value="Dominican Republic">Dominican Republic</option>
                                                            <option value="East Timor">East Timor</option>
                                                            <option value="Ecuador">Ecuador</option>
                                                            <option value="Egypt">Egypt</option>
                                                            <option value="El Salvador">El Salvador</option>
                                                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                            <option value="Eritrea">Eritrea</option>
                                                            <option value="Estonia">Estonia</option>
                                                            <option value="Ethiopia">Ethiopia</option>
                                                            <option value="Falkland Islands">Falkland Islands</option>
                                                            <option value="Faroe Islands">Faroe Islands</option>
                                                            <option value="Fiji">Fiji</option>
                                                            <option value="Finland">Finland</option>
                                                            <option value="France">France</option>
                                                            <option value="French Guiana">French Guiana</option>
                                                            <option value="French Polynesia">French Polynesia</option>
                                                            <option value="French Southern Ter">French Southern Ter</option>
                                                            <option value="Gabon">Gabon</option>
                                                            <option value="Gambia">Gambia</option>
                                                            <option value="Georgia">Georgia</option>
                                                            <option value="Germany">Germany</option>
                                                            <option value="Ghana">Ghana</option>
                                                            <option value="Gibraltar">Gibraltar</option>
                                                            <option value="Great Britain">Great Britain</option>
                                                            <option value="Greece">Greece</option>
                                                            <option value="Greenland">Greenland</option>
                                                            <option value="Grenada">Grenada</option>
                                                            <option value="Guadeloupe">Guadeloupe</option>
                                                            <option value="Guam">Guam</option>
                                                            <option value="Guatemala">Guatemala</option>
                                                            <option value="Guinea">Guinea</option>
                                                            <option value="Guyana">Guyana</option>
                                                            <option value="Haiti">Haiti</option>
                                                            <option value="Hawaii">Hawaii</option>
                                                            <option value="Honduras">Honduras</option>
                                                            <option value="Hong Kong">Hong Kong</option>
                                                            <option value="Hungary">Hungary</option>
                                                            <option value="Iceland">Iceland</option>
                                                            <option value="Indonesia">Indonesia</option>
                                                            <option value="India">India</option>
                                                            <option value="Iran">Iran</option>
                                                            <option value="Iraq">Iraq</option>
                                                            <option value="Ireland">Ireland</option>
                                                            <option value="Isle of Man">Isle of Man</option>
                                                            <option value="Israel">Israel</option>
                                                            <option value="Italy">Italy</option>
                                                            <option value="Jamaica">Jamaica</option>
                                                            <option value="Japan">Japan</option>
                                                            <option value="Jordan">Jordan</option>
                                                            <option value="Kazakhstan">Kazakhstan</option>
                                                            <option value="Kenya">Kenya</option>
                                                            <option value="Kiribati">Kiribati</option>
                                                            <option value="Korea North">Korea North</option>
                                                            <option value="Korea Sout">Korea South</option>
                                                            <option value="Kuwait">Kuwait</option>
                                                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                            <option value="Laos">Laos</option>
                                                            <option value="Latvia">Latvia</option>
                                                            <option value="Lebanon">Lebanon</option>
                                                            <option value="Lesotho">Lesotho</option>
                                                            <option value="Liberia">Liberia</option>
                                                            <option value="Libya">Libya</option>
                                                            <option value="Liechtenstein">Liechtenstein</option>
                                                            <option value="Lithuania">Lithuania</option>
                                                            <option value="Luxembourg">Luxembourg</option>
                                                            <option value="Macau">Macau</option>
                                                            <option value="Macedonia">Macedonia</option>
                                                            <option value="Madagascar">Madagascar</option>
                                                            <option value="Malaysia">Malaysia</option>
                                                            <option value="Malawi">Malawi</option>
                                                            <option value="Maldives">Maldives</option>
                                                            <option value="Mali">Mali</option>
                                                            <option value="Malta">Malta</option>
                                                            <option value="Marshall Islands">Marshall Islands</option>
                                                            <option value="Martinique">Martinique</option>
                                                            <option value="Mauritania">Mauritania</option>
                                                            <option value="Mauritius">Mauritius</option>
                                                            <option value="Mayotte">Mayotte</option>
                                                            <option value="Mexico">Mexico</option>
                                                            <option value="Midway Islands">Midway Islands</option>
                                                            <option value="Moldova">Moldova</option>
                                                            <option value="Monaco">Monaco</option>
                                                            <option value="Mongolia">Mongolia</option>
                                                            <option value="Montserrat">Montserrat</option>
                                                            <option value="Morocco">Morocco</option>
                                                            <option value="Mozambique">Mozambique</option>
                                                            <option value="Myanmar">Myanmar</option>
                                                            <option value="Nambia">Nambia</option>
                                                            <option value="Nauru">Nauru</option>
                                                            <option value="Nepal">Nepal</option>
                                                            <option value="Netherland Antilles">Netherland Antilles</option>
                                                            <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                                            <option value="Nevis">Nevis</option>
                                                            <option value="New Caledonia">New Caledonia</option>
                                                            <option value="New Zealand">New Zealand</option>
                                                            <option value="Nicaragua">Nicaragua</option>
                                                            <option value="Niger">Niger</option>
                                                            <option value="Nigeria">Nigeria</option>
                                                            <option value="Niue">Niue</option>
                                                            <option value="Norfolk Island">Norfolk Island</option>
                                                            <option value="Norway">Norway</option>
                                                            <option value="Oman">Oman</option>
                                                            <option value="Pakistan">Pakistan</option>
                                                            <option value="Palau Island">Palau Island</option>
                                                            <option value="Palestine">Palestine</option>
                                                            <option value="Panama">Panama</option>
                                                            <option value="Papua New Guinea">Papua New Guinea</option>
                                                            <option value="Paraguay">Paraguay</option>
                                                            <option value="Peru">Peru</option>
                                                            <option value="Phillipines">Philippines</option>
                                                            <option value="Pitcairn Island">Pitcairn Island</option>
                                                            <option value="Poland">Poland</option>
                                                            <option value="Portugal">Portugal</option>
                                                            <option value="Puerto Rico">Puerto Rico</option>
                                                            <option value="Qatar">Qatar</option>
                                                            <option value="Republic of Montenegro">Republic of Montenegro</option>
                                                            <option value="Republic of Serbia">Republic of Serbia</option>
                                                            <option value="Reunion">Reunion</option>
                                                            <option value="Romania">Romania</option>
                                                            <option value="Russia">Russia</option>
                                                            <option value="Rwanda">Rwanda</option>
                                                            <option value="St Barthelemy">St Barthelemy</option>
                                                            <option value="St Eustatius">St Eustatius</option>
                                                            <option value="St Helena">St Helena</option>
                                                            <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                                            <option value="St Lucia">St Lucia</option>
                                                            <option value="St Maarten">St Maarten</option>
                                                            <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                                                            <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                                                            <option value="Saipan">Saipan</option>
                                                            <option value="Samoa">Samoa</option>
                                                            <option value="Samoa American">Samoa American</option>
                                                            <option value="San Marino">San Marino</option>
                                                            <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                                                            <option value="Saudi Arabia">Saudi Arabia</option>
                                                            <option value="Senegal">Senegal</option>
                                                            <option value="Seychelles">Seychelles</option>
                                                            <option value="Sierra Leone">Sierra Leone</option>
                                                            <option value="Singapore">Singapore</option>
                                                            <option value="Slovakia">Slovakia</option>
                                                            <option value="Slovenia">Slovenia</option>
                                                            <option value="Solomon Islands">Solomon Islands</option>
                                                            <option value="Somalia">Somalia</option>
                                                            <option value="South Africa">South Africa</option>
                                                            <option value="Spain">Spain</option>
                                                            <option value="Sri Lanka">Sri Lanka</option>
                                                            <option value="Sudan">Sudan</option>
                                                            <option value="Suriname">Suriname</option>
                                                            <option value="Swaziland">Swaziland</option>
                                                            <option value="Sweden">Sweden</option>
                                                            <option value="Switzerland">Switzerland</option>
                                                            <option value="Syria">Syria</option>
                                                            <option value="Tahiti">Tahiti</option>
                                                            <option value="Taiwan">Taiwan</option>
                                                            <option value="Tajikistan">Tajikistan</option>
                                                            <option value="Tanzania">Tanzania</option>
                                                            <option value="Thailand">Thailand</option>
                                                            <option value="Togo">Togo</option>
                                                            <option value="Tokelau">Tokelau</option>
                                                            <option value="Tonga">Tonga</option>
                                                            <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                                                            <option value="Tunisia">Tunisia</option>
                                                            <option value="Turkey">Turkey</option>
                                                            <option value="Turkmenistan">Turkmenistan</option>
                                                            <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                                                            <option value="Tuvalu">Tuvalu</option>
                                                            <option value="Uganda">Uganda</option>
                                                            <option value="United Kingdom">United Kingdom</option>
                                                            <option value="Ukraine">Ukraine</option>
                                                            <option value="United Arab Erimates">United Arab Emirates</option>
                                                            <option value="United States of America">United States of America</option>
                                                            <option value="Uraguay">Uruguay</option>
                                                            <option value="Uzbekistan">Uzbekistan</option>
                                                            <option value="Vanuatu">Vanuatu</option>
                                                            <option value="Vatican City State">Vatican City State</option>
                                                            <option value="Venezuela">Venezuela</option>
                                                            <option value="Vietnam">Vietnam</option>
                                                            <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                                            <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                                            <option value="Wake Island">Wake Island</option>
                                                            <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                                                            <option value="Yemen">Yemen</option>
                                                            <option value="Zaire">Zaire</option>
                                                            <option value="Zambia">Zambia</option>
                                                            <option value="Zimbabwe">Zimbabwe</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <button type="submit" class="default-btn d-block w-100"><span>Find Your Partner </span></button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="groupmodal" id="groupmodal">
        <div class="container">
            <div class="groupmodal__area">
                <div class="post-item">
                    <div class="post-content">
                        <div class="post-author">
                            <div class="post-author-inner">
                                <div class="author-thumb">
                                    <img src="{{ URL::to('website/assets/images/member/profile/profile.jpg') }}" alt="datting thumb">
                                </div>
                                <div class="author-details">
                                    <h6><a href="#">William Smith</a></h6>
                                    <ul class="post-status">
                                        <li class="post-privacy"><i class="icofont-world"></i> Public</li>
                                        <li class="post-time">6 Mintues Ago </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="post-description">

                            <div class="post-desc-img">
                                <img src="{{ URL::to('website/assets/images/group/single/01.jpg') }}" alt="dating thumb">
                            </div>
                        </div>
                    </div>

                    <div class="post-meta">
                        <div class="post-meta-top">
                            <p><a href="#"><i class="fa-solid fa-thumbs-up"></i> <i class="fa-solid fa-heart"></i> <i class="fa-solid fa-face-laugh"></i><span>Julia, Petrova & 306 like this</span></a></p>
                            <p><a href="#">136 Comments</a></p>
                        </div>
                        <div class="post-meta-bottom">
                            <ul class="react-list">
                                <li class="react"><a href="#"><i class="fa-solid fa-thumbs-up"></i>Like</a> </li>
                                <li class="react"><a href="#"><i class="fa-solid fa-comment"></i>Comment</a></li>
                                <li class="react"><a href="#"><i class="fa-solid fa-share-nodes"></i> Share </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="groupmodal" id="groupmodalvideo">
        <div class="container">
            <div class="groupmodal__area">
                <div class="post-item">
                    <div class="post-content">
                        <div class="post-author">
                            <div class="post-author-inner">
                                <div class="author-thumb">
                                    <img src="{{ URL::to('website/assets/images/member/profile/profile.jpg') }}" alt="datting thumb">
                                </div>
                                <div class="author-details">
                                    <h6><a href="#">William Smith</a></h6>
                                    <ul class="post-status">
                                        <li class="post-privacy"><i class="icofont-world"></i> Public</li>
                                        <li class="post-time">6 Mintues Ago </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="post-description">
                            <div class="post-desc-img">
                                <iframe src="https://www.youtube.com/embed/U9O8G5AreXE" title="YouTube video player" height="300"  allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>

                    <div class="post-meta">
                        <div class="post-meta-top">
                            <p><a href="#"><i class="fa-solid fa-thumbs-up"></i> <i class="fa-solid fa-heart"></i> <i class="fa-solid fa-face-laugh"></i><span>Julia,Akhi & 306 like this</span></a></p>
                            <p><a href="#">136 Comments</a></p>
                        </div>
                        <div class="post-meta-bottom">
                            <ul class="react-list">
                                <li class="react"><a href="#"><i class="fa-solid fa-thumbs-up"></i>Like</a> </li>
                                <li class="react"><a href="#"><i class="fa-solid fa-comment"></i>Comment</a></li>
                                <li class="react"><a href="#"><i class="fa-solid fa-share-nodes"></i> Share </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ================> Group section end here <================== -->
@endsection
@section('script')
@endsection
