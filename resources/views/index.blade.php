<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <!-- Google font Roboto -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/css/ion.rangeSlider.min.css" />
    <!--Slick css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <!--Main css File -->
    <link href="{{asset('userassets/css/style.css')}}" rel="stylesheet" />
    <title>Hire Freelancers and Find Freelance Jobs Online - Advizuru</title>
</head>

<body>
    <div class="wrapper bg-gray">
        <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top home-header">
            <div class="container-fluid">
                <div class="d-flex align-items-center">
                    <a class="navbar-brand" href="#">
                        <img src="{{asset('userassets/img/logo.png')}}" alt="logo" class="large-logo" width="180" height="48" />
                        <img src="{{asset('userassets/img/small-logo.png')}}" class="small-logo d-none" alt="logo" width="31" height="26" />
                    </a>
                </div>
                <div class="ms-auto">
                    <div class="session_btn">
                        <a href="javacsript:void(0);" class="btn btn-login" data-bs-toggle="modal" data-bs-target="#loginModal">Login <i
                            class="flaticon flaticon-lock"></i></a>
                        <a href="javacsript:void(0);" class="btn btn-blue"  data-bs-toggle="modal" data-bs-target="#SignUpModal">SignUp <i
                                class="flaticon flaticon-user"></i></a>
                    </div>
                </div>
            </div>
        </nav>
        <div class="main-wrapper">
            <div class="section_one">
                <img src="{{asset('userassets/img/banner.jpg')}}" class="img-fluid w-100" alt="home banner" width="1920" height="900" />
                <div class="container-fluid">
                    <div class="center">
                        <div class="section_content">
                            <h3>An Ecosystem for Organizations <br>
                                & Professionals for
                            </h3>
                            <p>Hiring | Freelancing | Training |
                                Subcontracting of Projects & Resources | Virtual teams
                                |
                                Business lead sharing & Promotion.</p>
                            <div class="flex-btn">
                                <a href="javascript:void(0);" class="btn btn-blue me-3">Register As A Professional /
                                    Individual User <i class="flaticon flaticon-right-arrow"></i></a>
                                <a href="javascript:void(0);" class="btn btn-light">Register As An Organization
                                    <i class="flaticon flaticon-right-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section_two">
                <div class="container-fluid d-between">
                    <h3><b>News :</b> Corporate Actions - Scheme of
                        Arrangement 2021</h3>
                    <a href="javascript:void(0);" class="btn btn-blue">Learn More
                        <i class="flaticon flaticon-right-arrow"></i></a>
                </div>
            </div>
            <div class="section_three space">
                <div class="container-fluid">
                    <div class="row service_flex">
                        <div class="col-md-3 align-self-center">
                            <div class="slide_content">
                                <h2>All Advizuru Services</h2>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum is simply dummy text of the printing and typesetting industry</p>
                                <a href="javascript:void(0);">Visit the knowledge Center</a>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="service_slider">
                                <div>
                                    <div class="slide_card">
                                        <img src="{{asset('userassets/img/slide-img-1.jpg')}}" class="img-fluid" alt="slider image"
                                            width="357" height="201" />
                                        <div class="card_content">
                                            <h5>Recruitment</h5>
                                            <p>Advizuru is an organised online market place for corporate companies
                                                and individuals to showcase their business or individual
                                                professional portfolio, generate qualified business leads &
                                                associate for professional contracts.</p>
                                            <a href="javascript:void(0);">Learn More <i
                                                    class="flaticon flaticon-right-arrow"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="slide_card">
                                        <img src="{{asset('userassets/img/slide-img-2.jpg')}}" class="img-fluid" alt="slider image"
                                            width="357" height="201" />
                                        <div class="card_content">
                                            <h5>Freelancing</h5>
                                            <p>Advizuru is an organised online market place for corporate companies
                                                and individuals to showcase their business or individual
                                                professional portfolio, generate qualified business leads &
                                                associate for professional contracts.</p>
                                            <a href="javascript:void(0);">Learn More <i
                                                    class="flaticon flaticon-right-arrow"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="slide_card">
                                        <img src="{{asset('userassets/img/slide-img-3.jpg')}}" class="img-fluid" alt="slider image"
                                            width="357" height="201" />
                                        <div class="card_content">
                                            <h5>Subcontracting</h5>
                                            <p>Advizuru is an organised online market place for corporate companies
                                                and individuals to showcase their business or individual
                                                professional portfolio, generate qualified business leads &
                                                associate for professional contracts.</p>
                                            <a href="javascript:void(0);">Learn More <i
                                                    class="flaticon flaticon-right-arrow"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="slide_card">
                                        <img src="{{asset('userassets/img/slide-img-4.jpg')}}" class="img-fluid" alt="slider image"
                                            width="357" height="201" />
                                        <div class="card_content">
                                            <h5>Subcontracting</h5>
                                            <p>Advizuru is an organised online market place for corporate companies
                                                and individuals to showcase their business or individual
                                                professional portfolio, generate qualified business leads &
                                                associate for professional contracts.</p>
                                            <a href="javascript:void(0);">Learn More <i
                                                    class="flaticon flaticon-right-arrow"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section_four space">
                <div class="container-fluid">
                    <div class="section_title">
                        <div>
                            <h2>All Advizuru Technologies </h2>
                            <p>Lorem Ipsum is simply dummy text of the
                                printing and typesetting industry</p>
                        </div>
                        <a href="javascript:void(0);" class="btn btn-blue">See More
                            <i class="flaticon flaticon-right-arrow"></i></a>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="tech-card-new">
                                <div class="t-img-box">
                                    <img src="{{asset('userassets/img/sap-s-icon.png')}}" class="img-fluid" width="184" height="72" alt="sap icon" />
                                </div>
                                <h4>Sap</h4>
                                <p>SAP is Enterprise software that is used to manage business operations and customer relations across various sectors and industries.</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="tech-card-new">
                                <div class="t-img-box">
                                    <img src="{{asset('userassets/img/oracle-s-icon.png')}}" class="img-fluid" width="184" height="72" alt="sap icon" />
                                </div>
                                <h4>Oracle</h4>
                                <p>Advizuru offers a comprehensive Network of professionals & organizations with extensive experience in Oracle ERP , Oracle analytics , Oracle database etc.</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="tech-card-new">
                                <div class="t-img-box">
                                    <img src="{{asset('userassets/img/analytics-s-icon.png')}}" class="img-fluid" width="184" height="72" alt="sap icon" />
                                </div>
                                <h4>Analytics</h4>
                                <p>Advizuru analytics offering include Business Intelligence, Corporate performance management, Big data , data visualization across key products i..e SAP BO, ORACLE , Qlikview , tableau.</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="tech-card-new">
                                <div class="t-img-box">
                                    <img src="{{asset('userassets/img/accounting-s-icon.png')}}" class="img-fluid" width="184" height="72" alt="sap icon" />
                                </div>
                                <h4>Accounting & Finance</h4>
                                <p>This is one of the key functions of almost every business which is handled by an chartered accountant or a Bookkeeper. Advizuru offers a Network of professionals & organization's possessing multiple years extensive experience in Accounting, MIS reporting, Budgeting, Legal consolidation, Audit , Risk assurance, fund management etc for your customised for your business needs.</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="tech-card-new">
                                <div class="t-img-box">
                                    <img src="{{asset('userassets/img/microsoft-s-icon.png')}}" class="img-fluid" width="184" height="72" alt="sap icon" />
                                </div>
                                <h4>Microsoft</h4>
                                <p>Microsoft service offering includes application development, maintenance, SharePoint, ERP & CRM. Through our extensive network of experienced freelancer's & Organization's we strive to provide customized, cost effective and cutting edge business solutions.</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="tech-card-new">
                                <div class="t-img-box">
                                    <img src="{{asset('userassets/img/web-technology-s-icon.png')}}" class="img-fluid" width="184" height="72" alt="sap icon" />
                                </div>
                                <h4>Web Technology</h4>
                                <p>Advizuru offers a comprehensive Network of professionals & organizations with extensive experience in Oracle ERP , Oracle analytics , Oracle database etc.</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="tech-card-new">
                                <div class="t-img-box">
                                    <img src="{{asset('userassets/img/sap-s-icon.png')}}" class="img-fluid" width="184" height="72" alt="sap icon" />
                                </div>
                                <h4>Zoho</h4>
                                <p>Website. zoho.com. Zoho Office Suite is an Indian web-based online office suite containing word processing, spreadsheets, presentations, databases, note-taking, wikis, web conferencing, customer relationship management (CRM), project management, invoicing and other applications.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="section_four space">
                <div class="container-fluid">
                    <div class="section_title">
                        <div>
                            <h2>All Advizuru Technologies </h2>
                            <p>Lorem Ipsum is simply dummy text of the
                                printing and typesetting industry</p>
                        </div>
                        <a href="javascript:void(0);" class="btn btn-blue">See More
                            <i class="flaticon flaticon-right-arrow"></i></a>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="tech-card sap-card img-hover-zoom--slowmo">
                                <img src="{{asset('userassets/img/sap-image.png')}}" class="img-fluid w-100" alt="sap image" width="357"
                                    height="687" />
                                <div class="tech_content">
                                    <div class="center">
                                        <i class=""></i>
                                        <h4>Sap</h4>
                                        <p>SAP is Enterprise software that is used to manage business operations and
                                            customer relations across various sectors and industries.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="tech-card oracle-card img-hover-zoom--slowmo">
                                        <img src="{{asset('userassets/img/oracle.png')}}" class="img-fluid w-100" alt="sap image" width=""
                                            height="" />
                                        <div class="tech_content">
                                            <div class="center">
                                                <i class=""></i>
                                                <h4>Oracle</h4>
                                                <p>Advizuru offers a comprehensive Network of professionals &
                                                    organizations with extensive experience in Oracle ERP , Oracle
                                                    analytics , Oracle database etc.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="tech-card analytics-card img-hover-zoom--slowmo">
                                        <img src="{{asset('userassets/img/analytices.png')}}" class="img-fluid w-100" alt="sap image" width=""
                                            height="" />
                                        <div class="tech_content">
                                            <div class="center">
                                                <i class=""></i>
                                                <h4>Analytics</h4>
                                                <p>Advizuru analytics offering include Business Intelligence, Corporate
                                                    performance management, Big data , data visualization across key
                                                    products i..e SAP BO, ORACLE , Qlikview , tableau</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="tech-card accounting-card img-hover-zoom--slowmo">
                                        <img src="{{asset('userassets/img/accounting.png')}}" class="img-fluid w-100" alt="sap image" width=""
                                            height="" />
                                        <div class="tech_content">
                                            <div class="center">
                                                <i class=""></i>
                                                <h4>Accounting & Finance</h4>
                                                <p>This is one of the key functions of almost every business which is
                                                    handled by an chartered accountant or a Bookkeeper. Advizuru offers
                                                    a Network of professionals & organization's possessing multiple
                                                    years extensive experience in Accounting, MIS reporting, Budgeting,
                                                    Legal consolidation, Audit , Risk assurance, fund management etc for
                                                    your customised for your business needs.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="tech-card microsoft-card img-hover-zoom--slowmo">
                                        <img src="{{asset('userassets/img/microsoft.png')}}" class="img-fluid w-100" alt="sap image" width=""
                                            height="" />
                                        <div class="tech_content">
                                            <div class="center top-0">
                                                <i class=""></i>
                                                <h4>Microsoft</h4>
                                                <p>Microsoft service offering includes application development,
                                                    maintenance, SharePoint, ERP & CRM. Through our extensive network of
                                                    experienced freelancer's & Organization's we strive to provide
                                                    customized, cost effective and cutting edge business solutions.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="tech-card web-card img-hover-zoom--slowmo">
                                <img src="{{asset('userassets/img/web-tech.png')}}" class="img-fluid w-100" alt="sap image" width=""
                                    height="" />
                                <div class="tech_content">
                                    <div class="center">
                                        <i class=""></i>
                                        <h4>Web Technology</h4>
                                        <p>Advizuru offers a comprehensive Network of professionals & organizations with
                                            extensive experience in Oracle ERP , Oracle analytics , Oracle database etc.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="tech-card web-card-1 img-hover-zoom--slowmo">
                                <img src="{{asset('userassets/img/web-tech.png')}}" class="img-fluid w-100" alt="sap image" width=""
                                    height="" />
                                <div class="tech_content">
                                    <div class="center">
                                        <i class=""></i>
                                        <h4>Web Technology</h4>
                                        <p>Advizuru offers a comprehensive Network of professionals & organizations with
                                            extensive experience in Oracle ERP , Oracle analytics , Oracle database etc.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="tech-card web-card-2 img-hover-zoom--slowmo">
                                <img src="{{asset('userassets/img/web-tech.png')}}" class="img-fluid w-100" alt="sap image" width=""
                                    height="" />
                                <div class="tech_content">
                                    <div class="center">
                                        <i class=""></i>
                                        <h4>Web Technology</h4>
                                        <p>Advizuru offers a comprehensive Network of professionals & organizations with
                                            extensive experience in Oracle ERP , Oracle analytics , Oracle database etc.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="section_five space">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-7">
                            <img src="{{asset('userassets/img/find-project1.png')}}" class="img-fluid" alt="img-fluid" width=""
                                height="" />
                        </div>
                        <div class="col-md-5 align-self-center project_slider">
                            <div class="hoz_sliderContent">
                                <h3>Powerful services help you work, <br>
                                    learn, Organize, Connect <br>
                                    and create
                                </h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen book.
                                    It has survived not only five centuries, but also the leap into electronic
                                    typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                                    the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                                    with desktop
                                </p>
                                <a href="javascript:void(0);" class="link-1">Learn More <i
                                        class="flaticon flaticon-right-arrow"></i></a>
                            </div>
                            <div class="hoz_sliderContent">
                                <h3>Powerful services help you work, <br>
                                    learn, Organize, Connect <br>
                                    and create 2
                                </h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen book.
                                    It has survived not only five centuries, but also the leap into electronic
                                    typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                                    the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                                    with desktop
                                </p>
                                <a href="javascript:void(0);" class="link-1">Learn More <i
                                        class="flaticon flaticon-right-arrow"></i></a>
                            </div>
                            <div class="hoz_sliderContent">
                                <h3>Powerful services help you work, <br>
                                    learn, Organize, Connect <br>
                                    and create 3
                                </h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen book.
                                    It has survived not only five centuries, but also the leap into electronic
                                    typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                                    the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                                    with desktop
                                </p>
                                <a href="javascript:void(0);" class="link-1">Learn More <i
                                        class="flaticon flaticon-right-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gray-bg-slice">
                <div class="section_six space">
                    <div class="container-fluid">
                        <div class="row service_flex">
                            <div class="col-md-3 align-self-center">
                                <div class="slide_content">
                                    <h2>All Blog</h2>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum is simply dummy text of the printing and typesetting industry</p>
                                    <a href="javascript:void(0);">Visit the knowledge Center</a>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="service_slider">
                                    <div>
                                        <div class="slide_card bg-white">
                                            <img src="{{asset('userassets/img/slide-img-4.jpg')}}" class="img-fluid" alt="slider image"
                                                width="" height="" />
                                            <div class="card_content">
                                                <h5>Interested in growing your career?</h5>
                                                <p>Advizuru is an organised online market place for corporate companies
                                                    and individuals to showcase their business or individual
                                                    professional portfolio, generate qualified business leads &
                                                    associate for professional contracts.</p>
                                                <a href="javascript:void(0);">Learn More <i
                                                        class="flaticon flaticon-right-arrow"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="slide_card bg-white">
                                            <img src="{{asset('userassets/img/slide-img-5.jpg')}}" class="img-fluid" alt="slider image"
                                                width="" height="" />
                                            <div class="card_content">
                                                <h5>employers use credentials to validate skills</h5>
                                                <p>Advizuru is an organised online market place for corporate companies
                                                    and individuals to showcase their business or individual
                                                    professional portfolio, generate qualified business leads &
                                                    associate for professional contracts.</p>
                                                <a href="javascript:void(0);">Learn More <i
                                                        class="flaticon flaticon-right-arrow"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="slide_card bg-white">
                                            <img src="{{asset('userassets/img/slide-img-1.jpg')}}" class="img-fluid" alt="slider image"
                                                width="" height="" />
                                            <div class="card_content">
                                                <h5>SAP PP in steel industries</h5>
                                                <p>Advizuru is an organised online market place for corporate companies
                                                    and individuals to showcase their business or individual
                                                    professional portfolio, generate qualified business leads &
                                                    associate for professional contracts.</p>
                                                <a href="javascript:void(0);">Learn More <i
                                                        class="flaticon flaticon-right-arrow"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="slide_card bg-white">
                                            <img src="{{asset('userassets/img/slide-img-2.jpg')}}" class="img-fluid" alt="slider image"
                                                width="" height="" />
                                            <div class="card_content">
                                                <h5>SAP PP in steel industries</h5>
                                                <p>Advizuru is an organised online market place for corporate companies
                                                    and individuals to showcase their business or individual
                                                    professional portfolio, generate qualified business leads &
                                                    associate for professional contracts.</p>
                                                <a href="javascript:void(0);">Learn More <i
                                                        class="flaticon flaticon-right-arrow"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section_seven space">
                    <div class="container-fluid">
                        <div class="row about-flex">
                            <div class="col-md-3">
                                <div class="about_content">
                                    <h4>About Us</h4>
                                    <p>Advizuru is an organised online market
                                        place for corporate companies and
                                        individuals
                                        to showcase their business or individual professional portfolio, generate
                                        qualified
                                        business leads & associate for professional contracts. Our forte lies in
                                        providing
                                        our audience an access to filtered, authenticated and trustworthy client-vendor
                                        need
                                        based information and professional service exchange platform. As the name of the
                                        company suggests, we help develop Partners Network for seeking and rendering
                                        Professional services.
                                        Our core philosophy 'Help develop an ecosystem that enables Organizations &
                                        Professional's to choose right project partner's and contribute in churning
                                        business
                                        unit goals and profitability'.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="position-relative">
                                            <img src="{{asset('userassets/img/about-banner-1.png')}}" class="img-fluid" alt="about image"
                                                width="" height="" />
                                            <div class="about_bannerContent">
                                                <h2>Use your skills to take
                                                    on climate <br> change</h2>
                                                <p>Our core philosophy 'Help
                                                    develop an ecosystem that enables
                                                    Organizations &
                                                    Professional's to choose right project partner's and contribute in
                                                    churning
                                                    business unit goals and profitability'.</p>
                                                <a href="javascript:void(0);" class="btn btn btn-outline-light">Learn
                                                    More <i class="flaticon flaticon-right-arrow"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <img src="{{asset('userassets/img/about-img-1.png')}}" class="img-fluid w-100" alt="about image"
                                            width="357" height="229" />
                                        <div class="about_subContent">
                                            <h3>Use your skills to take on
                                                climate change</h3>
                                            <p>Lorem Ipsum is simply
                                                dummy text of the printing and
                                                typesetting industry.
                                                Lorem Ipsum is simply dummy text </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section_eight">
                    <div class="container-fluid">

                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <div class="footer-logo">
                            <img src="{{asset('userassets/img/ag-logo.png')}}" class="img-fluid d-inline-block mb-4" alt="footer logo"
                                width="180" height="51" />
                            <p class="mb-0">Advizuru is an organised online market place for corporate companies and
                                individuals to
                                showcase their business or individual professional portfolio, generate qualified
                                business leads & associate for professional contracts.</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <h4 class="f_heading">Useful Links</h4>
                        <ul class="list-unstyled footer-nav">
                            <li>
                                <a href="javascript:void(0);">Home</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Find Project</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">About Us</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Our Services</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h4 class="f_heading">Useful Links</h4>
                        <ul class="list-unstyled footer-nav">
                            <li>
                                <a href="javascript:void(0);">Cookies</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Privacy & Policy</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Terms & Conditions</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h4 class="f_heading">CONTACT WITH US</h4>
                        <ul class="list-unstyled footer-nav">
                            <li>
                                <a href="javascript:void(0);"><i class=""></i> (+91) 9123456798</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);"><i class=""></i> info@advizuru.com</a>
                            </li>
                        </ul>
                        <h4 class="f_heading">FOLLOW US</h4>
                        <ul class="list-unstyled">
                            <li>
                                <a href="javascript:void(0);"><i class=""></i></a>
                            </li>
                            <li>
                                <a href="javascript:void(0);"><i class=""></i></a>
                            </li>
                            <li>
                                <a href="javascript:void(0);"><i class=""></i></a>
                            </li>
                            <li>
                                <a href="javascript:void(0);"><i class=""></i></a>
                            </li>
                            <li>
                                <a href="javascript:void(0);"><i class=""></i></a>
                            </li>
                            <li>
                                <a href="javascript:void(0);"><i class=""></i></a>
                            </li>
                            <li>
                                <a href="javascript:void(0);"><i class=""></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- Login Popup Style -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg-6">
            <div class="modal-content login_modal">
                <!-- <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div> -->
                <div class="modal-body">
                    <div class="mb-4">
                        <h5>Log in to Advizuru</h5>
                        <p class="mb-0">Welcome Back! Login with your data that you entered during registration</p>
                    </div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group-md">
                            <i class="flaticon flaticon-email-1"></i>
                            <div class="form-floating">
                                <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
                                <label for="floatingInput">Email address</label>
                            </div>
                        </div>
                        <div class="form-group-md">
                            <i class="flaticon flaticon-lock"></i>
                            <div class="form-floating">
                                <input type="password" class="form-control" name="password" id="password" placeholder="name@example.com">
                                <label for="floatingInput">Password</label>
                            </div>
                        </div>
                        <div class="d-between mb-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    Remember me
                                </label>
                            </div>
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                @endif
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Login</button>
                        <span class="d-block or-line"><b>Or</b></span>
                        <button class="btn btn-light btn-google w-100">
                            <img src="{{asset('userassets/img/google.png')}}" alt="google image" class="img-fluid me-3" width="20" height="20" />
                            Login with Google
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Forgot passwrod Style -->
    <div class="modal fade" id="forgotPassword" tabindex="-1" aria-labelledby="forgotPasswordLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg-6">
            <div class="modal-content login_modal">
                <div class="modal-body">
                    <div class="mb-4">
                        <h5>Reset Password</h5>
                        <p class="mb-0">You've successfully verified your account. Enter new password below.</p>
                    </div>
                    <form>
                        <div class="form-group-md">
                            <i class="flaticon flaticon-email-1"></i>
                            <div class="form-floating">
                                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Your Email address</label>
                            </div>
                        </div>
                        <button class="btn btn-primary w-100">Reset My password</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Signup Popup Style -->
    <div class="modal fade" id="SignUpModal" tabindex="-1" aria-labelledby="SignUpModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg-8">
            <div class="modal-content signUp_modal">
                <div class="modal-body p-0">
                    <h5><b>Let’s get started!</b> First, tell us what you’re looking for.</h5>
                    <div class="row g-0">
                        <div class="col-md-6">
                            <div class="block org-block">
                                <i class="flaticon flaticon-team"></i>
                                <p>Collaborate with other organization 
                                    for sharing business leads, 
                                    subcontracting resources & projects 
                                    and hiring free lancers 
                                </p>
                                <h6>Find, collaborate with, Organization 
                                    & skilled professionals.</h6>
                                <button class="btn btn-primary w-100">Signup As Organization</button>
                            </div>
                        </div>
                        <div class="col-md-6 bg-light-blue">
                            <div class="block individual-block">
                                <i class="flaticon flaticon-user-2"></i>
                                <p>I’m looking for projects, business leads 
                                    & training                                    
                                </p>
                                <h6>Find projects, share business leads, be 
                                    part of virtual team & enhance your skill 
                                    as trainee or trainer</h6>
                                <button class="btn btn-outline-primary w-100">Signup As Individual</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--main wrapper closed-->
    <!--wrapper closed -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/js/ion.rangeSlider.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type='text/javascript'>
        //For Tootlip
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
        // For choose btn file name
        const actualBtn = document.getElementById('actual-btn');
        const fileChosen = document.getElementById('file-chosen');
        actualBtn.addEventListener('change', function () {
            fileChosen.textContent = this.files[0].name
        })
    </script>
    <script>
        $(document).ready(function () {
            // For Sidebar Filter toggle
            $(".sidebar-dropdown > a").click(function () {
                $(".sidebar-submenu").slideUp(200);
                if (
                    $(this)
                        .parent()
                        .hasClass("active")
                ) {
                    $(".sidebar-dropdown").removeClass("active");
                    $(this)
                        .parent()
                        .removeClass("active");
                } else {
                    $(".sidebar-dropdown").removeClass("active");
                    $(this)
                        .next(".sidebar-submenu")
                        .slideDown(200);
                    $(this)
                        .parent()
                        .addClass("active");
                }
            });
            // For Range Slider
            $("#experience, #cost").ionRangeSlider({
                type: "double",
                grid: true,
                min: 0,
                max: 1000,
                from: 200,
                to: 800,
                prefix: "$"
            });
            // For sidebar make mobile menu
            $('.btn_filter').click(function () {
                $('.mobile-filter').toggleClass('open');
            });
            $('.search-btn').click(function () {
                $('.search-bar input').toggleClass('search-flex');
            });
            // For service Slider
            $('.service_slider').slick({
                autoplay: true,
                slidesToShow: 3,
                slidesToScroll: 1,
                speed: 1000,
                dots: true,
                arrows: false,
                responsive: [
                    {
                        breakpoint: 1060,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                            infinite: true,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 500,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });
            // For Project Slider
            $('.project_slider').slick({
                dots: true,
                vertical: true,
                autoplay: true,
                loop: true,
                arrows: false,
                speed: 1000,
                responsive: [
                    {
                        breakpoint: 900,
                        settings: {
                            vertical: false,
                        }
                    }
                ]
            });
        })
    </script>
</body>

</html>