@extends('layouts.app')
@section('title', 'CyberSafe - Phishing, Scam & Fraud Awareness')

@section('content')

    {{-- ================= VIDEO SECTION - FIRST ================= --}}
    {{-- ================= HERO BANNER WITH VIDEO ON RIGHT ================= --}}
    <section class="cyber-hero">
        <div class="hero-grid"></div>

        <div class="container position-relative">
            <div class="row align-items-center g-4">

                {{-- LEFT SIDE: CONTENT --}}
                <div class="col-lg-6">
                    <div class="hero-eyebrow">
                        <span class="hero-pulse"></span>
                        CYBER SECURITY AWARENESS PROGRAM
                    </div>

                    <h1>
                        Outsmart Online Scams.
                        <span>Protect Your Digital World.</span>
                    </h1>

                    <p class="hero-description">
                        Learn how to spot phishing emails, fake websites, payment
                        fraud and online scams. Build the knowledge you need to
                        navigate the digital world safely and confidently.
                    </p>

                    <div class="hero-actions">
                        <a href="{{ route('checker') }}" class="btn-cyber-primary">
                            <i class="fas fa-search"></i>
                            Check a Scam
                            <i class="fas fa-arrow-right arrow-icon"></i>
                        </a>

                        <a href="{{ route('quiz') }}" class="btn-cyber-secondary">
                            <i class="fas fa-clipboard-check"></i>
                            Take Quiz
                        </a>
                    </div>

                    <div class="hero-trust">
                        <div class="trust-icon">
                            <i class="fas fa-lock"></i>
                        </div>
                        <span>Think smart. Click safe. Stay secure.</span>
                    </div>
                </div>

                {{-- RIGHT SIDE: VIDEO --}}
                <div class="col-lg-6">
                    <div class="banner-video-card">

                        <div class="banner-video-header">
                            <div class="banner-video-status">
                                <span class="status-dot"></span>
                                CYBERSECURITY AWARENESS
                            </div>

                            <span class="banner-video-tag">
                                <i class="fas fa-play-circle"></i> Watch & Learn
                            </span>
                        </div>

                        <div class="banner-video-wrapper">
                            <iframe src="https://www.youtube.com/embed/daV3thmt6Gg"
                                title="Phishing Fraud - Cyber Security Awareness by MyGov India" loading="lazy"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                            </iframe>
                        </div>

                        <div class="banner-video-footer">
                            <div class="banner-video-shield">
                                <i class="fas fa-shield-alt"></i>
                            </div>

                            <div>
                                <h6>Stay Alert. Stay Protected.</h6>
                                <p>Recognise online threats before they cause harm.</p>
                            </div>
                        </div>

                    </div>

                    <div class="banner-safety-note">
                        <i class="fas fa-lightbulb"></i>
                        Never share your OTP, UPI PIN or banking password.
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- ================= STATISTICS ================= --}}
    <section class="cyber-stats-section mt-5">
        <div class="container">
            <div class="stats-panel">
                <div class="row g-0">
                    <div class="col-md-4">
                        <div class="stat-item">
                            <div class="stat-icon stat-purple">
                                <i class="fas fa-clipboard-list"></i>
                            </div>
                            <div>
                                <h3>{{ $questions }}</h3>
                                <p>Quiz Questions</p>
                                <small>Test what you know</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="stat-item">
                            <div class="stat-icon stat-orange">
                                <i class="fas fa-book-open"></i>
                            </div>
                            <div>
                                <h3>{{ $articles->count() }}</h3>
                                <p>Awareness Topics</p>
                                <small>Learn about digital threats</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="stat-item">
                            <div class="stat-icon stat-green">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <div>
                                <h3>24/7</h3>
                                <p>Stay Cyber Aware</p>
                                <small>Make safer online choices</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- ================= COMMON SCAMS ================= --}}
    <section class="scams-section">
        <div class="container py-5">

            <div class="section-heading">
                <div>
                    <span class="section-kicker">
                        <i class="fas fa-exclamation-triangle"></i>
                        KNOW THE WARNING SIGNS
                    </span>

                    <h2>Common Online <span>Scams</span></h2>

                    <p>
                        Understand the tricks scammers use and learn what to watch out for.
                    </p>
                </div>

                <a href="{{ route('checker') }}" class="explore-link">
                    Check a suspicious message
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>

            @php
                $scams = [
                    [
                        'Phishing',
                        'Fake emails, SMS and websites designed to steal your passwords and personal information.',
                        'fa-envelope-open-text',
                        'scam-purple',
                        '01',
                    ],
                    [
                        'UPI & OTP Fraud',
                        'Fraudsters trick users into sharing OTPs, revealing PINs or approving unwanted payments.',
                        'fa-mobile-alt',
                        'scam-blue',
                        '02',
                    ],
                    [
                        'Job Scams',
                        'Fake recruitment offers that demand registration fees or promise unrealistic earnings.',
                        'fa-briefcase',
                        'scam-orange',
                        '03',
                    ],
                    [
                        'Investment Scams',
                        'Fraudulent schemes promising guaranteed profits or unusually high returns.',
                        'fa-chart-line',
                        'scam-green',
                        '04',
                    ],
                    [
                        'Shopping Fraud',
                        'Fake online stores, copied websites and tempting offers designed to take your money.',
                        'fa-shopping-bag',
                        'scam-pink',
                        '05',
                    ],
                    [
                        'Social Engineering',
                        'Scammers impersonate trusted people or create urgency, fear and pressure to manipulate you.',
                        'fa-user-secret',
                        'scam-teal',
                        '06',
                    ],
                ];
            @endphp

            <div class="row g-4">
                @foreach ($scams as $scam)
                    <div class="col-md-6 col-lg-4">
                        <div class="scam-card">
                            <div class="scam-card-top">
                                <div class="scam-icon {{ $scam[3] }}">
                                    <i class="fas {{ $scam[2] }}"></i>
                                </div>

                                <span class="scam-number">{{ $scam[4] }}</span>
                            </div>

                            <h5>{{ $scam[0] }}</h5>

                            <p>{{ $scam[1] }}</p>

                            <a href="{{ route('checker') }}" class="scam-link">
                                Learn to stay safe
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- Safety Reminder --}}
            <div class="safety-banner">
                <div class="safety-banner-icon">
                    <i class="fas fa-shield-alt"></i>
                </div>

                <div class="safety-banner-content">
                    <h4>Your security is in your hands.</h4>
                    <p>
                        Verify unexpected requests, avoid suspicious links and
                        never share your banking credentials.
                    </p>
                </div>

                <a href="{{ route('quiz') }}" class="safety-banner-btn">
                    Take the Quiz <i class="fas fa-arrow-right"></i>
                </a>
            </div>

        </div>
    </section>


    {{-- ================= CUSTOM STYLES ================= --}}
    <style>
        :root {
            --cyber-navy: #07152e;
            --cyber-dark: #0b1f3e;
            --cyber-blue: #246bfe;
            --cyber-cyan: #36d6ff;
            --cyber-text: #182844;
            --cyber-muted: #718096;
            --cyber-bg: #f5f8fd;
        }

        /* General */
        .cyber-video-section,
        .cyber-hero,
        .cyber-stats-section,
        .scams-section {
            font-family: inherit;
        }

        /* Hero banner with video on the right */
        .cyber-hero {
            position: relative;
            overflow: hidden;
            padding: 75px 0;
            background:
                radial-gradient(ellipse at 85% 25%,
                    rgba(36, 107, 254, .22),
                    transparent 42%),
                linear-gradient(120deg, #06132a, #0b2142 65%, #102b50);
            color: #fff;
        }

        /* Video card */
        .banner-video-card {
            overflow: hidden;
            border: 1px solid rgba(54, 214, 255, .35);
            border-radius: 17px;
            background: #07152e;
            box-shadow: 0 22px 55px rgba(0, 0, 0, .3);
            transition: transform .3s ease, box-shadow .3s ease;
        }

        .banner-video-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 28px 60px rgba(0, 0, 0, .38);
        }

        .banner-video-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 10px;
            padding: 15px 17px;
            background: linear-gradient(110deg, #07152e, #102d52);
            color: #fff;
        }

        .banner-video-status {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 10px;
            font-weight: 800;
            letter-spacing: .8px;
        }

        .status-dot {
            width: 8px;
            height: 8px;
            flex-shrink: 0;
            border-radius: 50%;
            background: #41e6a0;
            box-shadow: 0 0 10px rgba(65, 230, 160, .8);
        }

        .banner-video-tag {
            color: #9bdfff;
            font-size: 11px;
            font-weight: 600;
            white-space: nowrap;
        }

        .banner-video-tag i {
            margin-right: 4px;
            color: #36d6ff;
        }

        .banner-video-wrapper {
            position: relative;
            width: 100%;
            aspect-ratio: 16 / 9;
            background: #030b18;
        }

        .banner-video-wrapper iframe {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            border: 0;
        }

        .banner-video-footer {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 16px 18px;
            background: #0b1f3e;
        }

        .banner-video-shield {
            display: grid;
            width: 42px;
            height: 42px;
            flex-shrink: 0;
            place-items: center;
            border: 1px solid rgba(54, 214, 255, .25);
            border-radius: 11px;
            background: rgba(54, 214, 255, .1);
            color: #36d6ff;
            font-size: 19px;
        }

        .banner-video-footer h6 {
            margin: 0 0 5px;
            color: #fff;
            font-size: 13px;
            font-weight: 750;
        }

        .banner-video-footer p {
            margin: 0;
            color: #afc2dc;
            font-size: 11px;
            line-height: 1.6;
        }

        .banner-safety-note {
            display: flex;
            align-items: flex-start;
            justify-content: center;
            gap: 8px;
            margin-top: 16px;
            color: #c3d4e9;
            font-size: 11px;
            line-height: 1.7;
        }

        .banner-safety-note i {
            margin-top: 3px;
            color: #ffd166;
        }

        /* Tablet */
        @media (max-width: 991.98px) {
            .cyber-hero {
                padding: 55px 0;
            }

            .banner-video-card {
                max-width: 680px;
                margin: 20px auto 0;
            }

            .banner-safety-note {
                margin-bottom: 10px;
            }
        }

        /* Mobile */
        @media (max-width: 575.98px) {
            .cyber-hero {
                padding: 40px 0;
            }

            .cyber-hero h1 {
                font-size: clamp(34px, 8vw, 43px);
                letter-spacing: -1px;
            }

            .hero-description {
                font-size: 14px;
                line-height: 1.8;
            }

            .hero-actions {
                gap: 10px;
            }

            .banner-video-header {
                padding: 12px;
            }

            .banner-video-status {
                font-size: 9px;
                letter-spacing: .3px;
            }

            .banner-video-tag {
                font-size: 10px;
            }

            .banner-video-footer {
                padding: 13px;
            }

            .banner-video-shield {
                width: 36px;
                height: 36px;
                font-size: 16px;
            }
        }

        .cyber-hero h1 {
            max-width: 720px;
            margin-bottom: 22px;
            color: #fff;
            font-size: clamp(38px, 5vw, 61px);
            font-weight: 850;
            line-height: 1.12;
            letter-spacing: -2px;
        }

        .cyber-hero h1 span {
            display: block;
            margin-top: 7px;
            background: linear-gradient(90deg, #46a1ff, #48e2f5);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .hero-description {
            max-width: 610px;
            margin-bottom: 30px;
            color: #b9c9df;
            font-size: 16px;
            line-height: 1.9;
        }

        .hero-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 13px;
        }

        .btn-cyber-primary,
        .btn-cyber-secondary {
            display: inline-flex;
            min-height: 53px;
            align-items: center;
            justify-content: center;
            gap: 11px;
            padding: 14px 20px;
            border-radius: 9px;
            font-size: 13px;
            font-weight: 750;
            text-decoration: none;
            transition: transform .2s, box-shadow .2s, background .2s;
        }

        .btn-cyber-primary {
            background: linear-gradient(110deg, #246bfe, #268bf9);
            box-shadow: 0 8px 24px rgba(36, 107, 254, .25);
            color: #fff;
        }

        .btn-cyber-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 30px rgba(36, 107, 254, .4);
            color: white;
        }

        .btn-cyber-primary .arrow-icon {
            margin-left: 5px;
            transition: transform .2s;
        }

        .btn-cyber-primary:hover .arrow-icon {
            transform: translateX(4px);
        }

        .btn-cyber-secondary {
            border: 1px solid rgba(190, 216, 255, .3);
            background: rgba(255, 255, 255, .04);
            color: #fff;
        }

        .btn-cyber-secondary:hover {
            transform: translateY(-3px);
            border-color: #50cfff;
            background: rgba(54, 214, 255, .08);
            color: #fff;
        }

        .hero-trust {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-top: 30px;
            color: #a7bdd8;
            font-size: 12px;
        }

        .trust-icon {
            display: grid;
            width: 28px;
            height: 28px;
            place-items: center;
            border-radius: 50%;
            background: rgba(65, 230, 160, .12);
            color: #54e6a7;
        }

        /* Hero illustration */
        .hero-visual {
            position: relative;
            display: flex;
            min-height: 420px;
            align-items: center;
            justify-content: center;
        }

        .orbit {
            position: absolute;
            width: 330px;
            height: 330px;
            border: 1px solid rgba(87, 177, 255, .18);
            border-radius: 50%;
        }

        .orbit-two {
            width: 260px;
            height: 260px;
            border-style: dashed;
            border-color: rgba(87, 177, 255, .28);
        }

        .shield-circle {
            display: grid;
            width: 200px;
            height: 200px;
            place-items: center;
            border: 1px solid rgba(83, 193, 255, .5);
            border-radius: 50%;
            background: radial-gradient(circle, rgba(36, 107, 254, .3), rgba(36, 107, 254, .03));
            box-shadow: 0 0 70px rgba(36, 107, 254, .18);
        }

        .shield-inner {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 8px;
            color: #5fdcff;
            text-align: center;
        }

        .shield-inner i {
            font-size: 84px;
            filter: drop-shadow(0 0 15px rgba(54, 214, 255, .4));
        }

        .shield-inner span {
            color: #fff;
            font-size: 12px;
            font-weight: 900;
            letter-spacing: 3px;
            line-height: 1.5;
        }

        .floating-card {
            position: absolute;
            z-index: 2;
            display: flex;
            align-items: center;
            gap: 12px;
            max-width: calc(100% - 10px);
            padding: 14px;
            border: 1px solid rgba(164, 199, 255, .2);
            border-radius: 13px;
            background: rgba(13, 36, 69, .94);
            box-shadow: 0 15px 35px rgba(0, 0, 0, .2);
            backdrop-filter: blur(12px);
        }

        .floating-card-top {
            top: 50px;
            right: 0;
        }

        .floating-card-bottom {
            bottom: 48px;
            left: 0;
        }

        .float-icon {
            display: grid;
            width: 42px;
            height: 42px;
            flex-shrink: 0;
            place-items: center;
            border-radius: 10px;
            font-size: 19px;
        }

        .float-green {
            background: rgba(65, 230, 160, .12);
            color: #54e6a7;
        }

        .float-blue {
            background: rgba(65, 158, 255, .14);
            color: #65b9ff;
        }

        .floating-card strong,
        .floating-card small {
            display: block;
        }

        .floating-card strong {
            margin-bottom: 4px;
            color: white;
            font-size: 12px;
        }

        .floating-card small {
            color: #a9bed8;
            font-size: 10px;
        }

        .visual-decoration {
            position: absolute;
            display: grid;
            width: 45px;
            height: 45px;
            place-items: center;
            border: 1px solid rgba(120, 186, 255, .2);
            border-radius: 12px;
            background: rgba(36, 107, 254, .12);
            color: #75cfff;
            font-size: 19px;
        }

        .decoration-one {
            top: 65px;
            left: 32px;
        }

        .decoration-two {
            right: 30px;
            bottom: 75px;
        }

        /* Statistics */
        .cyber-stats-section {
            position: relative;
            z-index: 3;
            padding: 0 0 20px;
            background: var(--cyber-bg);
        }

        .stats-panel {
            position: relative;
            margin-top: -1px;
            overflow: hidden;
            border: 1px solid #e5ecf7;
            border-radius: 17px;
            background: #fff;
            box-shadow: 0 15px 45px rgba(24, 54, 95, .07);
        }

        .stat-item {
            display: flex;
            min-height: 145px;
            align-items: center;
            gap: 17px;
            padding: 25px;
        }

        .stats-panel .col-md-4+.col-md-4 .stat-item {
            border-left: 1px solid #edf1f7;
        }

        .stat-icon {
            display: grid;
            width: 55px;
            height: 55px;
            flex-shrink: 0;
            place-items: center;
            border-radius: 15px;
            font-size: 23px;
        }

        .stat-purple {
            background: #f0eaff;
            color: #7952d6;
        }

        .stat-orange {
            background: #fff0e4;
            color: #e98a35;
        }

        .stat-green {
            background: #e3f9ef;
            color: #20ad79;
        }

        .stat-item h3 {
            margin: 0 0 4px;
            color: #102442;
            font-size: 29px;
            font-weight: 850;
            letter-spacing: -.8px;
        }

        .stat-item p {
            margin: 0 0 5px;
            color: #283c58;
            font-size: 13px;
            font-weight: 750;
        }

        .stat-item small {
            color: #8a98ad;
            font-size: 11px;
        }

        /* Common scams */
        .scams-section {
            background: var(--cyber-bg);
        }

        .section-heading {
            display: flex;
            align-items: flex-end;
            justify-content: space-between;
            gap: 25px;
            margin-bottom: 35px;
        }

        .section-kicker {
            display: inline-block;
            margin-bottom: 13px;
            color: #3974e8;
            font-size: 10px;
            font-weight: 850;
            letter-spacing: 1.4px;
        }

        .section-kicker i {
            margin-right: 6px;
        }

        .section-heading h2 {
            margin-bottom: 12px;
            color: #102442;
            font-size: clamp(30px, 4vw, 39px);
            font-weight: 850;
            letter-spacing: -1.2px;
        }

        .section-heading h2 span {
            color: #246bfe;
        }

        .section-heading p {
            margin: 0;
            color: #738197;
            font-size: 14px;
            line-height: 1.8;
        }

        .explore-link {
            display: inline-flex;
            flex-shrink: 0;
            align-items: center;
            gap: 10px;
            padding-bottom: 5px;
            color: #246bfe;
            font-size: 12px;
            font-weight: 750;
            text-decoration: none;
        }

        .explore-link:hover {
            color: #104bc0;
        }

        .explore-link i {
            transition: transform .2s;
        }

        .explore-link:hover i {
            transform: translateX(4px);
        }

        .scam-card {
            position: relative;
            height: 100%;
            padding: 27px;
            overflow: hidden;
            border: 1px solid #e6edf7;
            border-radius: 15px;
            background: #fff;
            box-shadow: 0 5px 20px rgba(18, 48, 88, .025);
            transition: transform .25s, box-shadow .25s, border-color .25s;
        }

        .scam-card:hover {
            transform: translateY(-6px);
            border-color: #cbdcff;
            box-shadow: 0 18px 35px rgba(18, 48, 88, .09);
        }

        .scam-card-top {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 23px;
        }

        .scam-icon {
            display: grid;
            width: 55px;
            height: 55px;
            place-items: center;
            border-radius: 15px;
            font-size: 23px;
            transition: transform .25s;
        }

        .scam-card:hover .scam-icon {
            transform: scale(1.07) rotate(-3deg);
        }

        .scam-purple {
            background: #f0eaff;
            color: #7952d6;
        }

        .scam-blue {
            background: #e7f2ff;
            color: #2c7be5;
        }

        .scam-orange {
            background: #fff0e4;
            color: #e98a35;
        }

        .scam-green {
            background: #e3f9ef;
            color: #20ad79;
        }

        .scam-pink {
            background: #ffebf1;
            color: #d94c83;
        }

        .scam-teal {
            background: #e0f8f7;
            color: #149b9a;
        }

        .scam-number {
            color: #e2e9f3;
            font-size: 29px;
            font-weight: 850;
            letter-spacing: -1px;
        }

        .scam-card h5 {
            margin-bottom: 12px;
            color: #142743;
            font-size: 18px;
            font-weight: 800;
        }

        .scam-card p {
            min-height: 75px;
            margin-bottom: 21px;
            color: #748198;
            font-size: 13px;
            line-height: 1.85;
        }

        .scam-link {
            display: inline-flex;
            align-items: center;
            gap: 9px;
            color: #2868e8;
            font-size: 12px;
            font-weight: 800;
            text-decoration: none;
        }

        .scam-link i {
            transition: transform .2s;
        }

        .scam-link:hover {
            color: #104bc0;
        }

        .scam-link:hover i {
            transform: translateX(4px);
        }

        /* Bottom safety banner */
        .safety-banner {
            display: flex;
            align-items: center;
            gap: 20px;
            margin-top: 45px;
            padding: 28px 30px;
            border: 1px solid #1c467b;
            border-radius: 16px;
            background:
                radial-gradient(ellipse at 85% 0%, rgba(36, 107, 254, .23), transparent 45%),
                linear-gradient(110deg, #091a35, #102b50);
            box-shadow: 0 15px 35px rgba(12, 37, 73, .1);
        }

        .safety-banner-icon {
            display: grid;
            width: 58px;
            height: 58px;
            flex-shrink: 0;
            place-items: center;
            border: 1px solid rgba(54, 214, 255, .25);
            border-radius: 15px;
            background: rgba(54, 214, 255, .1);
            color: #5fdcff;
            font-size: 27px;
        }

        .safety-banner-content {
            flex: 1;
        }

        .safety-banner h4 {
            margin-bottom: 7px;
            color: white;
            font-size: 18px;
            font-weight: 800;
        }

        .safety-banner p {
            margin: 0;
            color: #b5c7df;
            font-size: 12px;
            line-height: 1.8;
        }

        .safety-banner-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            padding: 13px 18px;
            flex-shrink: 0;
            border-radius: 8px;
            background: #fff;
            color: #174eaf;
            font-size: 12px;
            font-weight: 800;
            text-decoration: none;
            transition: background .2s, transform .2s;
        }

        .safety-banner-btn:hover {
            transform: translateY(-2px);
            background: #e8f2ff;
            color: #174eaf;
        }

        /* Tablet and mobile */
        @media (max-width: 991.98px) {
            .cyber-hero {
                padding: 65px 0;
            }

            .hero-visual {
                min-height: 350px;
            }

            .orbit {
                width: 285px;
                height: 285px;
            }

            .orbit-two {
                width: 225px;
                height: 225px;
            }

            .shield-circle {
                width: 170px;
                height: 170px;
            }

            .shield-inner i {
                font-size: 70px;
            }

            .floating-card-top {
                right: 5%;
            }

            .floating-card-bottom {
                left: 4%;
            }

            .stat-item {
                padding: 20px 15px;
            }

            .stat-icon {
                width: 46px;
                height: 46px;
            }
        }

        @media (max-width: 767.98px) {
            .cyber-video-section .container {
                padding-top: 38px !important;
                padding-bottom: 35px !important;
            }

            .video-heading {
                margin-bottom: 23px;
            }

            .video-heading h2 {
                letter-spacing: -.8px;
            }

            .video-heading p {
                font-size: 14px;
            }

            .video-card {
                border-radius: 13px;
            }

            .video-topbar {
                padding: 13px;
            }

            .video-status {
                font-size: 9px;
                letter-spacing: .5px;
            }

            .video-duration {
                font-size: 10px;
            }

            .video-footer {
                padding: 14px;
                gap: 10px;
            }

            .video-footer-icon {
                width: 36px;
                height: 36px;
                font-size: 16px;
            }

            .video-footer h6 {
                font-size: 12px;
            }

            .video-footer p {
                font-size: 10px;
            }

            .video-footer-badge {
                display: none;
            }

            .video-note {
                align-items: flex-start;
                font-size: 11px;
                line-height: 1.7;
            }

            .cyber-hero {
                padding: 55px 0 35px;
            }

            .cyber-hero h1 {
                font-size: clamp(36px, 8vw, 48px);
                letter-spacing: -1.5px;
            }

            .hero-description {
                font-size: 14px;
            }

            .hero-visual {
                min-height: 330px;
                margin-top: 5px;
            }

            .floating-card-top {
                top: 25px;
                right: 0;
            }

            .floating-card-bottom {
                bottom: 25px;
                left: 0;
            }

            .floating-card {
                padding: 11px;
            }

            .floating-card strong {
                font-size: 11px;
            }

            .floating-card small {
                font-size: 9px;
            }

            .stats-panel {
                margin-top: 0;
            }

            .stat-item {
                min-height: auto;
                padding: 20px;
            }

            .stats-panel .col-md-4+.col-md-4 .stat-item {
                border-top: 1px solid #edf1f7;
                border-left: 0;
            }

            .section-heading {
                align-items: flex-start;
                flex-direction: column;
                gap: 14px;
                margin-bottom: 26px;
            }

            .section-heading h2 {
                font-size: 32px;
            }

            .scam-card {
                padding: 23px;
            }

            .scam-card p {
                min-height: auto;
            }

            .safety-banner {
                align-items: flex-start;
                flex-wrap: wrap;
                padding: 23px;
            }

            .safety-banner-content {
                min-width: calc(100% - 85px);
            }

            .safety-banner-btn {
                width: 100%;
            }
        }

        @media (max-width: 400px) {
            .cyber-label {
                font-size: 9px;
                letter-spacing: .5px;
            }

            .hero-actions {
                flex-direction: column;
            }

            .btn-cyber-primary,
            .btn-cyber-secondary {
                width: 100%;
            }

            .hero-visual {
                min-height: 300px;
            }

            .orbit {
                width: 235px;
                height: 235px;
            }

            .orbit-two {
                width: 190px;
                height: 190px;
            }

            .shield-circle {
                width: 145px;
                height: 145px;
            }

            .shield-inner i {
                font-size: 60px;
            }

            .floating-card {
                gap: 8px;
                padding: 9px;
            }

            .float-icon {
                width: 33px;
                height: 33px;
                font-size: 15px;
            }
        }
    </style>

@endsection
